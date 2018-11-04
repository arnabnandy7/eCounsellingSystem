<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>List of  GOVT. Institutions</title>
<link rel="stylesheet" href="styles/tables.css" type="text/css"/>
</head>

<body>
<?php
require "connect.inc.php";
$sql_fetch_clg="select * from college_details where clgtype='govt'";
$result_fetch_clg=mysql_query($sql_fetch_clg);
$count_fetch_clg=mysql_num_rows($result_fetch_clg);
?>
<div align="center">
<div  align="justify" style="">
<img src="images/1logoo.jpg"></img><hr>
<div align="center"><h2 style="color:#36F"><u>List of  GOVT. Institutions.</u></h2></div>

<div >
<table>
<thead >
<tr>
<th colspan='7' align='center' style="background-color:#F0F0F0 ;color:blue;" ><?php echo "Total ".$count_fetch_clg." College Found";?></th>
</tr>
<td></br></br></td>
<tr>
<th >Name</th>
<th >University</th>
<th >Location</th>
<th >Phone</th>
<th >Website</th>
<th >Email</th>
<th > Intake</th>
</tr>
</thead>
<tbody>
<?php
if($count_fetch_clg >=1)
{
	while($row=mysql_fetch_array($result_fetch_clg))
	{
		echo "<tr>
<td >$row[college_name]</td>
<td >$row[university_name]</td>
<td >$row[location_address]</td>
<td >$row[phone1]</td>
<td ><a href=''>$row[website]</a></td>
<td ><a href=''>$row[email]</a></td>
<td align='center'>$row[intake]</td>
</tr>";
	}
}
else
{
echo "<tr>
<td colspan='7' align='center'>No Record Found.</td>
</tr>";
}
?>
</tbody>
</table>
<br><br><br><br>
<center><INPUT TYPE='BUTTON' VALUE='Close' onClick='window.close()' style='background-color:#039; color:#FFF; font-size:18px'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="download_pdf/List of GOVT.pdf" target="_blank"><button style='background-color:#039; color:#FFF; font-size:18px'>Download</button></a></center>
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
