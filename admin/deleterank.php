
<?php
	$r= (int) $_POST['rank'] ;
	require 'connect.inc.php';
	$sql="delete from rank_details where rank=$r";
	$rs=mysql_query($sql);
	header('Location:index.php');
	exit;
?>
