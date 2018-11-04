<?php
if(isset($_POST['addrank']))
{
 require 'connect.inc.php';
$query = "select * from `rank_details` where enrolment_no='$_POST[eno]'";
$query_run = mysql_query($query);
echo "aaaaa";
//echo $query." ".$query_run;

	if(mysql_num_rows($query_run) == 0)
	{
		$sql="insert into rank_details (rank,enrolment_no,candidate_name,dob) values ('$_POST[rank]','$_POST[eno]','$_POST[name]','$_POST[dob]')";

      //echo $sql;

		$rs=mysql_query($sql);

	header('Location: index.php');
	}
}
else
{
	header('Location: index.php?error=cannot add rank');
}
?>