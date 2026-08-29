<?php
	if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
		http_response_code(405);
		header('Allow: POST');
		exit('Method Not Allowed');
	}

	$id= (int) $_POST['id'] ;
	require 'connect.inc.php';
	$sql="delete from counselling_date where id=$id";
	$rs=mysql_query($sql);
	header('Location:index.php');
	exit;
?>
