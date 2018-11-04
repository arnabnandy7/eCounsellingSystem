<?php
session_start();
if ($_SESSION['userlogged']!="1")
{
	header("location: login.php");
}
else
{
	$id=$_SESSION['admin_id'];
}
?>
<?php
if(isset($_POST['quickcontact']))
{
	require "connect.inc.php";
	$too=$_POST['s1'];
	$sub=$_POST['sub'];
	$msg=$_POST['msg'];
	$sql1="select * from candidate_details";
	$result1=mysql_query($sql1);
	while($row1=mysql_fetch_array($result1))
	{
		$to=$row1['email'];
		$header = "From:admin@ecounselling.tk \r\n";
		mail($to,$sub,$msg,$header);
		
	}
	header('location:index.php');
}
?>