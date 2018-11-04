<?php
if(empty($_POST))
{
	header("location:forgot_password.php");
}
else
{
	$pass=$_POST['pass1'];
	$password=md5($pass);
	$email=$_POST['email'];
	
	require "connect.inc.php";
	$sql="update candidate_reg_log_check set password='$password' where email='$email'";
//	echo $sql;
	mysql_query($sql);
	header("location: candidate_set_password.php?err=sucess");
}
?>