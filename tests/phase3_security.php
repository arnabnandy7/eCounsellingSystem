<?php

error_reporting(E_ALL);
require dirname(__DIR__) . '/includes/turso_mysql_compat.php';
require dirname(__DIR__) . '/includes/auth.php';

function securityQuery($sql, array $parameters = array())
{
    $result = turso_query($sql, $parameters);
    if ($result === false) {
        throw new RuntimeException(mysql_error());
    }
    return $result;
}

$rank = 900201;
$collegeId = 900201;
$candidateEmail = 'phase3-candidate@example.invalid';
$adminEmail = 'phase3-admin@example.invalid';
$collegeUid = 'phase3_college';
$legacyPassword = 'phase3-password';
$legacyHash = md5($legacyPassword);

$cleanup = function () use ($rank, $collegeId, $candidateEmail, $adminEmail) {
    securityQuery('DELETE FROM auth_attempts WHERE identity_hash IN (?,?,?,?)', array(
        auth_attempt_key('candidate', $candidateEmail),
        auth_attempt_key('admin', $adminEmail),
        auth_attempt_key('college', 'phase3_college'),
        auth_attempt_key('candidate', 'phase3-throttle@example.invalid'),
    ));
    securityQuery('DELETE FROM candidate_reg_log_check WHERE email=?', array($candidateEmail));
    securityQuery('DELETE FROM candidate_details WHERE rank=?', array($rank));
    securityQuery('DELETE FROM admin_login WHERE email=?', array($adminEmail));
    securityQuery('DELETE FROM college_login WHERE college_id=?', array($collegeId));
    securityQuery('DELETE FROM college_details WHERE college_cuid=?', array($collegeId));
    securityQuery('DELETE FROM rank_details WHERE rank=?', array($rank));
};

$cleanup();

try {
    securityQuery("INSERT INTO rank_details VALUES ($rank,'PHASE3','Phase Three','2000-01-01')");
    securityQuery("INSERT INTO candidate_details VALUES (NULL,900201,'Phase Three',$rank,?,'$legacyHash','','','')", array($candidateEmail));
    securityQuery("INSERT INTO candidate_reg_log_check VALUES (?,'$legacyHash','',1)", array($candidateEmail));
    securityQuery("INSERT INTO admin_login VALUES (NULL,?,'Phase Three Admin','$legacyHash','')", array($adminEmail));
    securityQuery("INSERT INTO college_details VALUES ($collegeId,'Phase Three College','test','Test','Test',1,1,1,'','','',?)", array('phase3-college@example.invalid'));
    securityQuery("INSERT INTO college_login VALUES ($collegeId,?,?,'$legacyHash','')", array($collegeUid, 'phase3-college@example.invalid'));

    foreach (array(
        'candidate' => $candidateEmail,
        'admin' => $adminEmail,
        'college' => $collegeUid,
    ) as $role => $identifier) {
        $user = auth_authenticate($role, $identifier, $legacyPassword);
        if (!$user || strlen($user['password']) === 32 || !password_verify($legacyPassword, $user['password'])) {
            throw new RuntimeException("$role legacy password migration failed.");
        }
    }

    if (auth_authenticate('candidate', $candidateEmail, 'wrong-password') !== false) {
        throw new RuntimeException('Invalid candidate password was accepted.');
    }

    $throttleIdentity = 'phase3-throttle@example.invalid';
    for ($attempt = 0; $attempt < 5; $attempt++) {
        auth_authenticate('candidate', $throttleIdentity, 'wrong-password');
    }
    if (!auth_is_throttled('candidate', $throttleIdentity)) {
        throw new RuntimeException('Login throttling did not activate.');
    }

    auth_begin_session('candidate', auth_authenticate('candidate', $candidateEmail, $legacyPassword));
    if (!auth_has_role('candidate') || auth_has_role('admin') || auth_has_role('college')) {
        throw new RuntimeException('Role isolation failed.');
    }
    $token = auth_csrf_token();
    if (!auth_verify_csrf($token) || auth_verify_csrf('invalid-token')) {
        throw new RuntimeException('CSRF verification failed.');
    }
    session_destroy();
} finally {
    $cleanup();
}

echo "Phase 3 authentication security tests passed.\n";
