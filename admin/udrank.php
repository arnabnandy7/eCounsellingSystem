<?php
require 'connect.inc.php';

$rank = isset($_POST['rank']) ? (int) $_POST['rank'] : 0;
$enrolmentNo = isset($_POST['eno']) ? trim($_POST['eno']) : '';
$candidateName = isset($_POST['name']) ? trim($_POST['name']) : '';
$dob = isset($_POST['dob']) ? trim($_POST['dob']) : '';

if ($rank <= 0 || $enrolmentNo === '' || $candidateName === '' || $dob === '') {
    header('Location: index.php?error=invalid rank details');
    exit;
}

turso_query(
    'UPDATE rank_details SET enrolment_no=?, candidate_name=?, dob=? WHERE rank=?',
    array($enrolmentNo, $candidateName, $dob, $rank)
);

header('Location: index.php');
exit;
