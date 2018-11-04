<?php
	$id= $_GET['id'] ;
	require 'connect.inc.php';
	$sql="delete from counselling_date where id=$id";
	$rs=mysql_query($sql);
	header('Location:index.php');
?>