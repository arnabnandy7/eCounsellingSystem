<?php
if (isset($_POST['update']))
{
	require "connect.inc.php";
	$id = isset($_POST['cid']) ? (int) $_POST['cid'] : 0;
	$university = isset($_POST['uname']) ? trim($_POST['uname']) : '';
	$intake = isset($_POST['int']) ? (int) $_POST['int'] : 0;
	$location = isset($_POST['loc']) ? trim($_POST['loc']) : '';
	$phone1 = isset($_POST['ph1']) ? trim($_POST['ph1']) : '';
	$phone2 = isset($_POST['ph2']) ? trim($_POST['ph2']) : '';
	$website = isset($_POST['wb']) ? trim($_POST['wb']) : '';
	$email = isset($_POST['mailid']) ? trim($_POST['mailid']) : '';

	if ($id <= 0 || $university === '' || $intake < 0 || $location === '' || $email === '') {
		header('Location: index.php?error=invalid college details');
		exit;
	}

	turso_query(
		'UPDATE college_details SET university_name=?, intake=?, location_address=?, phone1=?, phone2=?, website=?, email=? WHERE college_cuid=?',
		array($university, $intake, $location, $phone1, $phone2, $website, $email, $id)
	);
	header('location:index.php');
	exit;
}

header('Location: index.php?error=invalid request');
exit;
