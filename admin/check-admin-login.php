<?php
require "connect.inc.php";
$id=$_POST['email'];
$pass=$_POST['pass'];
$passwd=md5($pass);

$sql_admin_login = "select * from admin_login where email='$id' and password='$passwd'";
$result_admin_login = mysql_query($sql_admin_login);
$count_admin_login = mysql_num_rows($result_admin_login);
$row=mysql_fetch_array($result_admin_login);
if($count_admin_login == 1 )
{
	$date = date_default_timezone_set('Asia/Kolkata');
$today = date("F j, Y, g:i a T");
	session_start();
	$_SESSION['admin_id']=$id;
	$_SESSION['userlogged']=1;
	$_SESSION['name']=$row['name'];
	$_SESSION['currentloggedtime']=$today;
	$_SESSION['lastloggedtime']=$row['last_login'];
		
	$sql1="update admin_login set last_login='$today' where email='$id'";
	mysql_query($sql1);
	header("location:index.php");
}
else
{
	header("Location:login.php?error=invalidcredential");	
}
?>