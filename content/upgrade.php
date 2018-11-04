<?php require 'session.php';

						if(loggedin()) {
							$name=$_SESSION['name'];
							$email=$_SESSION['email'];
						} else {
							header("Location: index.php");
						}
?>
<?php
if(!empty($_REQUEST))
{
	require "connect.inc.php";
	$rank=$_REQUEST['rank'];
	$sql_u="update seat_allotments set upgrd_sts='Y' where rank='$rank'";
	mysql_query($sql_u);
	header("Location:candidate_allotment.php?status=upgrade");	
}
else
{
	header("Location:error.php");
}
?>

