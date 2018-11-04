<?php
require 'connect.inc.php';
if(isset($_POST['addclg']))
{
	$clg_id=$_POST['cid'];
	$clg_name=$_POST['cname'];
	$uni_name=$_POST['s1'];
	$clg_type=$_POST['s2'];
	$loc=$_POST['loc'];
	$intake=$_POST['int'];
	$phone1=$_POST['ph1'];
	$phone2=$_POST['ph2'];
	$website=$_POST['wb'];
	$emailid=$_POST['mailid'];
	
	
	$sql_clg_insert="insert into college_details values('$clg_id','$clg_name','$clg_type','$uni_name','$loc','$intake','$intake','$intake','$phone1','$phone2','$website','$emailid')";
	mysql_query($sql_clg_insert);
	
	$words = explode(" ", $clg_name);
	$login_id = "";

	foreach ($words as $w) 
	{
  		$login_id .= $w[0];
	}
	$login_uid=strtolower($login_id)."_".$clg_id;
	
	$sql_clg_login_insert="insert into college_login values('$clg_id','$login_uid','$emailid','827ccb0eea8a706c4c34a16891f84e7b','')";
	mysql_query($sql_clg_login_insert);
	header('Location: index.php');
}
else
{
	header('Location: index.php?error=cannot add college');
}
?>