<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<div align="center">
<br><br><br><br>
<form action="" method="post">
<table width="231" height="91">
<tr>
<td>Rank</td>
<td><input type="text" name="txtrank" required></td>
</tr>
<tr>
<td>Sequence</td>
<td><input type="text" name="txtseq" required></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="submit" value="SUBMIT"></td>
</tr>

</table>
</form>
</div>
<?php
if(isset($_POST['submit']))
{
	$rank=$_POST['txtrank'];
	$seq=$_POST['txtseq'];
	include "connect.inc.php";
	$sql1="select * from seat_allotments where rank='$rank' and seqnc_no='$seq'";
	$result1=mysql_query($sql1);
	$count1=mysql_num_rows($result1);
	$row1=mysql_fetch_array($result1);
	if($count1 ==1)
	{
		if($row1['admited']=='')
		{
			$sql2="update seat_allotments set admited='Y' where rank='$rank'";
			mysql_query($sql2);
			$sql3="UPDATE `college_details` SET `seat2`= seat2 -1 where `college_cuid`='$row1[allot_clg_id]'";
			mysql_query($sql3);
		}
		else
		{
			echo "error in inner ";
		}
	}
	else
	{
		echo "error in outer";
	}
}
?>
</body>
</html>