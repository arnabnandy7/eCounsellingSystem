<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Counselling Schedule</title>
</head>

<body>
<?php
require "connect.inc.php";
$sql_fetch_date="select * from  counselling_date";
$result_fetch_date=mysql_query($sql_fetch_date);
?>
<div align="center">
<div  align="justify" style="padding-left:100px">
<img src="images/1logoo.jpg"></img><hr>
<div align="center">
  <h2 style="color:#36F"><u>Counselling Schedule</u></h2></div>

<div style="color:#333333; font:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; font-size:26px" align="center">
<?php
while($row_date=mysql_fetch_array($result_fetch_date))
{
	echo "<h5><u>".$row_date[1]."  ".$row_date[2]."</u></h5>";
}
?>
<br><br><br><br>
<center><INPUT TYPE='BUTTON' VALUE='Close' onClick='window.close()' style='background-color:#039; color:#FFF; font-size:18px'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center>
<hr>
<div align="center">
Generated @ e-counselling System
<br>
© <a href="http://www.ecounselling.tk/">www.ecounselling.tk</a>
<br><br>
</div>
</div>
</div>
</div>

</body>
</html>
