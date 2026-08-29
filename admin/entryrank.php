<?php
if (isset($_POST['addrank']))
{
    require 'connect.inc.php';
    $rank = isset($_POST['rank']) ? (int) $_POST['rank'] : 0;
    $enrolmentNo = isset($_POST['eno']) ? trim($_POST['eno']) : '';
    $candidateName = isset($_POST['name']) ? trim($_POST['name']) : '';
    $dob = isset($_POST['dob']) ? trim($_POST['dob']) : '';

    if ($rank <= 0 || $enrolmentNo === '' || $candidateName === '' || $dob === '') {
        header('Location: index.php?error=invalid rank details');
        exit;
    }

    $query_run = turso_query(
        'SELECT enrolment_no FROM rank_details WHERE enrolment_no=?',
        array($enrolmentNo)
    );

	if(mysql_num_rows($query_run) == 0)
	{
		turso_query(
            'INSERT INTO rank_details (rank, enrolment_no, candidate_name, dob) VALUES (?,?,?,?)',
            array($rank, $enrolmentNo, $candidateName, $dob)
        );
	}

	header('Location: index.php');
	exit;
}
else
{
	header('Location: index.php?error=cannot add rank');
	exit;
}
