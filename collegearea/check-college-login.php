<?php
require "connect.inc.php";
include 'session.php';
$logid=$_POST['login_id'];
$password=$_POST['password'];
$pass=md5($password);

$sql_college_login = "select * from `college_login` where clg_uid='$logid' and password='$pass'";
//echo $sql_college_login;
$result_college_login = mysql_query($sql_college_login);
$count_college_login = mysql_num_rows($result_college_login);
$row_college_login=mysql_fetch_array($result_college_login);

$college_name="select * from `college_details` where email='$row_college_login[2]'";
$college_name_run=mysql_query($college_name);
$college_name_arr=mysql_fetch_array($college_name_run);
$name=$college_name_arr['college_name'];
$college_id=$college_name_arr['college_cuid'];
echo $college_id;
if($count_college_login == 1 )
{
	$date = date_default_timezone_set('Asia/Kolkata');
	$today = date("F j, Y, g:i a T");
	$_SESSION['college_cuid']=$college_id;
	$_SESSION['mail']=$row_college_login[2];
	$_SESSION['name'] = $name;
	$_SESSION['currentloggedtime']=$today;
	$_SESSION['lastloggedtime']=$row_college_login['last_login'];
	$sql1="update college_login set last_login='$today' where email='$row_college_login[2]'";
	mysql_query($sql1);
	header("location: college_home.php");
}
else
{
	header("Location: index.php?error=invalid login");	
}
?>