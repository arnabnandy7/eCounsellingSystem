<?php
if(isset($_POST['update']))
{
	require "connect.inc.php";
	$id=$_POST['cid'];
	$uname=$_POST['uname'];
	$int=$_POST['int'];
	//echo $uname." ".$int."<br>";
	$sql2="update college_details set university_name='$uname', intake='$int', location_address='$_POST[loc]', phone1='$_POST[ph1]', phone2='$_POST[ph2]', website='$_POST[wb]', email='$_POST[mailid]' where college_cuid='$id'";
	//echo $sql2;
	mysql_query($sql2);
	header('location:index.php');
}
?>