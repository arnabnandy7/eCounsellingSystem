<?php
	if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
		http_response_code(405);
		header('Allow: POST');
		exit('Method Not Allowed');
	}

	$r= (int) $_POST['id'] ;
	require 'connect.inc.php';
	$sql="delete from notice where id=$r";
	$rs=mysql_query($sql);
	header('Location:index.php');
	exit;
?>
