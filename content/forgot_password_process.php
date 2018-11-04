<?php
if(empty($_POST))
{
	header("location:forgot_password.php");
}
else
{
	$emailid=$_POST['eno'];
	$rank=$_POST['rank'];
	
	require "connect.inc.php";
	include "reg_mail.php";
	$sql1="select * from candidate_details where rank='$rank' and email='$emailid'";
	$result1=mysql_query($sql1);
	$count1=mysql_num_rows($result1);
	if($count1==1)
	{
			$sql2="select * from candidate_reg_log_check where email='$emailid'";
			$result2=mysql_query($sql2);
			$count2=mysql_num_rows($result2);
			$row2=mysql_fetch_array($result2);
			if($row2["chk_flg"]=="0")
			{
				header("location:forgot_password.php?msg=notactivate");		
			}
			else
			{
				send_forgot_pass($emailid);
				header("location:forgot_password.php?msg=mailsend");		
			}
	}
	else
	{
		header("location:forgot_password.php?msg=notmatch");
	}
}
?>