<?php
if(isset($_POST['addnews']))
{
	require "connect.inc.php";
	$event=$_POST['text1'];
	$date=$_POST['text2'];
	$sql1="insert into counselling_date values('','$event','$date')";
	mysql_query($sql1);
	header('location:index.php');
}
?>