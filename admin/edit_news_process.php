<?php
	$id=$_GET['id'];
	require "connect.inc.php";
	$event=$_POST['text1'];
	$date=$_POST['text2'];
	$sql1="update counselling_date set event='$event', event_date='$date' where id='$id'";
	//echo $sql1;
	//echo "<br>HELLO";
	mysql_query($sql1);
	header('location:index.php');
?>