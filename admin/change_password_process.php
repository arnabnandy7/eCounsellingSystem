<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
	session_start();
}
if (empty($_SESSION['userlogged']))
{
	header("location: login.php");
}
else
{
	$id=$_SESSION['admin_id'];
}

if(isset($_POST['changepass']))
{
	$pass=$_POST['text1'];
	$repass=$_POST['text2'];
	$password=md5($pass);
	if($pass==$repass)
	{
		require "connect.inc.php";
		$sql1 = "update admin_login set password='$password' where email='$id'";
		if(mysql_query($sql1))
		{
			session_destroy();
			header("location: login.php?sucess=passwordchanged");
		}
		else
		{
			header("location:index.php?error=passwordnotchanged");	
		}
	}
	else
	{
		header("location:index.php?error=passwordnotchanged");
	}
}

?>
