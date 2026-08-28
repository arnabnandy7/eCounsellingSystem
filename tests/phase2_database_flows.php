<?php

error_reporting(E_ALL);
require dirname(__DIR__) . '/includes/turso_mysql_compat.php';
require dirname(__DIR__) . '/includes/counselling_service.php';

function queryOrFail($sql)
{
    $result = mysql_query($sql);
    if ($result === false) {
        throw new RuntimeException(mysql_error() . "\nSQL: " . $sql);
    }
    return $result;
}

function expectOneRow($sql, $message)
{
    $result = queryOrFail($sql);
    if (mysql_num_rows($result) !== 1) {
        throw new RuntimeException($message);
    }
    return mysql_fetch_array($result);
}

// Exercise the exact credential query shapes used by all three portals without
// printing or modifying any seeded account details.
$candidate = expectOneRow('SELECT email, password FROM candidate_reg_log_check LIMIT 1', 'Candidate seed is missing.');
expectOneRow(
    "SELECT * FROM candidate_reg_log_check WHERE email='" . $candidate['email'] . "' AND password='" . $candidate['password'] . "' AND chk_flg=1",
    'Candidate authentication query failed.'
);

$admin = expectOneRow('SELECT email, password FROM admin_login LIMIT 1', 'Admin seed is missing.');
expectOneRow(
    "SELECT * FROM admin_login WHERE email='" . $admin['email'] . "' AND password='" . $admin['password'] . "'",
    'Admin authentication query failed.'
);

$collegeLogin = expectOneRow('SELECT clg_uid, password FROM college_login LIMIT 1', 'College seed is missing.');
expectOneRow(
    "SELECT * FROM college_login WHERE clg_uid='" . $collegeLogin['clg_uid'] . "' AND password='" . $collegeLogin['password'] . "'",
    'College authentication query failed.'
);

$rank = 900001;
$firstCollege = 900001;
$secondCollege = 900002;
$thirdCollege = 900003;
$email = 'phase2-flow@example.invalid';

// Always remove prior interrupted smoke-test records before starting.
$cleanup = function () use ($rank, $firstCollege, $secondCollege, $thirdCollege, $email) {
    mysql_query("DELETE FROM counselling_date WHERE event='Phase Two Auto Increment Test'");
    mysql_query("DELETE FROM seat_allotments WHERE rank=$rank");
    mysql_query("DELETE FROM candidate_preferences WHERE rank=$rank");
    mysql_query("DELETE FROM candidate_reg_log_check WHERE email='$email'");
    mysql_query("DELETE FROM candidate_details WHERE rank=$rank");
    mysql_query("DELETE FROM college_login WHERE college_id IN ($firstCollege,$secondCollege,$thirdCollege)");
    mysql_query("DELETE FROM college_details WHERE college_cuid IN ($firstCollege,$secondCollege,$thirdCollege)");
    mysql_query("DELETE FROM rank_details WHERE rank=$rank");
};

$cleanup();

try {
    queryOrFail("INSERT INTO rank_details VALUES ($rank, 'PHASE2-ENROLMENT', 'Phase Two Candidate', '2000-01-01')");
    queryOrFail("INSERT INTO candidate_details VALUES (NULL, 900001, 'Phase Two Candidate', $rank, '$email', '" . md5('phase2-password') . "', '', '', '')");
    queryOrFail("INSERT INTO candidate_reg_log_check VALUES ('$email', '" . md5('phase2-password') . "', '', 1)");
    queryOrFail("INSERT INTO counselling_date VALUES (NULL, 'Phase Two Auto Increment Test', '')");
    $event = expectOneRow("SELECT id FROM counselling_date WHERE event='Phase Two Auto Increment Test'", 'Counselling event insert failed.');
    if ((int) $event['id'] <= 0) {
        throw new RuntimeException('SQLite did not generate a counselling event ID.');
    }

    queryOrFail("INSERT INTO college_details VALUES ($firstCollege, 'Phase Two First College', 'test', 'Test University', 'Test', 1, 0, 1, '', '', '', 'phase2-first@example.invalid')");
    queryOrFail("INSERT INTO college_details VALUES ($secondCollege, 'Phase Two Second College', 'test', 'Test University', 'Test', 1, 1, 1, '', '', '', 'phase2-second@example.invalid')");
    queryOrFail("INSERT INTO college_details VALUES ($thirdCollege, 'Phase Two Third College', 'test', 'Test University', 'Test', 1, 1, 1, '', '', '', 'phase2-third@example.invalid')");
    queryOrFail("INSERT INTO candidate_preferences VALUES ($rank, $firstCollege, $secondCollege, $thirdCollege)");

    $registered = expectOneRow("SELECT id FROM candidate_details WHERE rank=$rank AND email='$email'", 'Registration flow failed.');
    if ((int) $registered['id'] <= 0) {
        throw new RuntimeException('SQLite did not generate a candidate ID.');
    }

    $newPassword = md5('phase2-new-password');
    queryOrFail("UPDATE candidate_details SET password='$newPassword' WHERE rank=$rank");
    queryOrFail("UPDATE candidate_reg_log_check SET password='$newPassword' WHERE email='$email'");
    expectOneRow("SELECT * FROM candidate_reg_log_check WHERE email='$email' AND password='$newPassword' AND chk_flg=1", 'Candidate password synchronization failed.');

    // Round one: first preference has no seat, so allocate the second.
    if (counselling_run_first_round($rank, $rank) !== 1) {
        throw new RuntimeException('Round-one service did not process the candidate.');
    }
    expectOneRow("SELECT * FROM seat_allotments WHERE rank=$rank AND allot_clg_id=$secondCollege AND pref_clg=2", 'Round-one allotment failed.');

    // A repeated run must not consume another seat or create another allotment.
    if (counselling_run_first_round($rank, $rank) !== 0) {
        throw new RuntimeException('Round-one service is not idempotent.');
    }

    // Upgrade: make the first preference available and move the allotment.
    queryOrFail("UPDATE seat_allotments SET upgrd_sts='Y' WHERE rank=$rank");
    queryOrFail("UPDATE college_details SET seat1=1 WHERE college_cuid=$firstCollege");
    if (counselling_run_second_round($rank, $rank) !== 1) {
        throw new RuntimeException('Second-round service did not process the candidate.');
    }
    expectOneRow("SELECT * FROM seat_allotments WHERE rank=$rank AND allot_clg_id=$firstCollege AND upgrd_sts='N'", 'Upgrade flow failed.');
    expectOneRow("SELECT * FROM college_details WHERE college_cuid=$firstCollege AND seat1=0", 'Upgrade did not consume the new seat.');
    expectOneRow("SELECT * FROM college_details WHERE college_cuid=$secondCollege AND seat1=1", 'Upgrade did not release the old seat.');

    // Admission: validate the sequence and consume one admission seat.
    expectOneRow("SELECT * FROM seat_allotments WHERE rank=$rank AND allot_clg_id=$firstCollege AND active='Y'", 'Admission validation failed.');
    queryOrFail("UPDATE seat_allotments SET admited='Y' WHERE rank=$rank");
    queryOrFail("UPDATE college_details SET seat2=seat2-1 WHERE college_cuid=$firstCollege");
    expectOneRow("SELECT * FROM seat_allotments WHERE rank=$rank AND admited='Y'", 'Admission status update failed.');
    expectOneRow("SELECT * FROM college_details WHERE college_cuid=$firstCollege AND seat2=0", 'Admission seat update failed.');
} finally {
    $cleanup();
}

echo "Phase 2 database flow tests passed.\n";
