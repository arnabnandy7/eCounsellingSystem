<?php require 'session.php';

						if(loggedin() && !empty($_SESSION['email'])) {
							$name=$_SESSION['name'];
							$email=$_SESSION['email'];
						} else {
							header("Location: index.php");
						}
?>
<?php
require "connect.inc.php";
$safe_email=str_replace("'", "''", $email);
$candidate_result=mysql_query("select rank from candidate_details where email='$safe_email'");
$candidate=mysql_fetch_array($candidate_result);

if($candidate)
{
	$rank=$candidate['rank'];
	mysql_query("update seat_allotments set upgrd_sts='Y' where rank='$rank'");
	header("Location:candidate_allotment.php?status=upgrade");
	exit;
}

header("Location:candidate_allotment.php?status=error");
exit;
?>
