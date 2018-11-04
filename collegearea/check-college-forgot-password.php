<?php
require "connect.inc.php";
$id=$_POST['login_id'];
$retype_id=$_POST['confirm_login_id'];

$sql_college_login = "select * from college_login where email='$id' ";
$result_college_login = mysql_query($sql_college_login);
$count_college_login = mysql_num_rows($result_college_login);
$row_college_login = mysql_fetch_array($result_college_login);
$college_name = $row_college_login['name'];

if($count_college_login == 1 )
{
	$passcode = mt_rand();
//	$pass=md5($passcode);
	
	$sql_set_pass="update admin_login set password ='$passcode' where email='$id';";
	mysql_query($sql_set_pass);
		
	$to = $id;
	$subject = "e-Counselling college Password";
	$body = " You Have Request for new Password. Auto generated new password has been send. Please change your password on next login.
		         Your password is  ".$passcode;
	$header = "From:noreply@admin.ecounselling.tk \r\n";
    mail($to, $subject, $body, $header);				 
	echo '<SCRIPT>alert("Your New Password has been send to Your mail"); </script>';	
	header("Location:index.php");
}
else
{
	header("Location:college-forgot-password.php?error=202");	
}
?>