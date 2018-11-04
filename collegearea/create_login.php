<?php
require "connect.inc.php";
$sql_college="select * from college_details";
$result_college=mysql_query($sql_college);
while($row_college=mysql_fetch_array($result_college))
{
	$college_id=$row_college[0];
	$college_name=$row_college[1];
	$college_email=$row_college[11];
	
	$words = explode(" ", $college_name);
	$login_id = "";

	foreach ($words as $w) 
	{
  		$login_id .= $w[0];
	}
	$login_uid=strtolower($login_id)."_".$college_id;
	
	$sql_clg_login_insert="insert into college_login values('$college_id','$login_uid','$college_email','827ccb0eea8a706c4c34a16891f84e7b','')";
	mysql_query($sql_clg_login_insert);
}
?>