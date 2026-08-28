<?php
if(!empty($_POST['clg']))
{
	$r=(int) $_POST['clg'];
}
else
{
	$r='';
}
?>
<?php
	
	require 'connect.inc.php';
	$sql="delete from college_details where college_cuid='$r'";
	$rs=mysql_query($sql);
	//echo $sql." ".$rs;
	header('Location: index.php');
	exit;

?>
