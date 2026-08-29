<?php
	if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
		http_response_code(405);
		header('Allow: POST');
		exit('Method Not Allowed');
	}

	$r= (int) $_POST['rank'] ;
	require 'connect.inc.php';
	$sql="delete from rank_details where rank=$r";
	$rs=mysql_query($sql);
	header('Location:index.php');
	exit;
?>
