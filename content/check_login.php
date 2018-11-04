<?php
require 'connect.inc.php';

session_start();
$email = $_POST['email'];
$hashpass = md5($_POST['pwd']);
$qry = "select * from `candidate_reg_log_check` where `email` = '$email' and `password` = '$hashpass' and 	
chk_flg=1";
$res = mysql_query($qry);
$num_row = mysql_num_rows($res);
if( $num_row == 1 ) 
{
	echo 'true';
	$session_query = "select * from `candidate_details` where `email` = '$email'";
	$session_query_run = mysql_query($session_query);
	
	$row=mysql_fetch_array($session_query_run);
	$name = $row['candidate_name'];
	$_SESSION['name'] = $name;
	$_SESSION['email']= $email;
	$date = date_default_timezone_set('Asia/Kolkata');
	$today = date("F j, Y, g:i A");
												
	$_SESSION['last_login_time']= $row["last_login"];
												
	//echo $row['last_login'];
												
	$sql_update_time="update candidate_details set last_login='$today' where email='$email'";
	mysql_query($sql_update_time);
	
}
else {
	
	echo 'false';
     }

?>