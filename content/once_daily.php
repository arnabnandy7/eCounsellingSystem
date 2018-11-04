<?php
require_once("connect.inc.php");
$sql="select `email` from `candidate_reg_log_check` where `chk_flg`=0";
if($query_run=mysql_query($sql)){
	if(mysql_num_rows($query_run) == 1) {
		$code = mysql_result($query_run, 0, 'email');
		$sql1="delete from `candidate_reg_log_check` where `chk_flg`=0 ";
		$query1_run=mysql_query($sql1);
		$sql2="delete from `candidate_details` where `email`='$code' ";
		$query2_run=mysql_query($sql2);
				
	}
}

?>