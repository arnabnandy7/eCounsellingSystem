<?php
require 'connect.inc.php';
include 'session.php';

$candemail=$_POST['candemail'];
$code=$_POST['code'];

$sql_check="select * from candidate_reg_log_check where email='$candemail' and activation_code='$code' and chk_flg=0";
$result_check=mysql_query($sql_check);
$count_check=mysql_num_rows($result_check);

if($count_check==1)
{
	echo 'true';
	$update_check="update `candidate_reg_log_check` set `chk_flg`=1 where `email`='$candemail'";
	mysql_query($update_check);
}
else
{
	echo 'false';
}
?>