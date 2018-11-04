<?php
	$r= $_GET['id'] ;
	require 'connect.inc.php';
	$sql="delete from notice where id=$r";
	$rs=mysql_query($sql);
	header('Location:index.php');
?>