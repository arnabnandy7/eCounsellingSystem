<?php
	if(!empty($_GET))
	{
		$rank=$_GET['rank'];
	require 'connect.inc.php';
	$sql="select * from rank_details where rank='$rank'";
	$rs=mysql_query($sql);
	$row=mysql_fetch_row($rs);
	}
	 ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
<script src="required/js/val.js" type="text/javascript"></script>
</head>
<body>
<div id="box1" title="Update Rank">
            <h2>Rank Update</h2> 
	
	<br>
	<form action="udrank.php" method="post" name="frm1" id="frm1" onSubmit="return validate1();">
    
	<table width="408" height="223" id = "registertable" align="center">
		<tr>
	 		<td>Rank:</td>
	 		<td>
	 		<div id="d"><input type="numeric" id="rank" name="rank" maxlength="5" required readonly value="<?php echo $row[0];?>"/></div>
	 		</td>
        </tr>
		<tr>
			<td>Enrolment NO:</td>
			<td><div id="d"><input type="numeric" name="eno" id="eno" value="<?php echo $row[1];?>"/></div></td>
		</tr>
        
		<tr>
			<td>Candidate Name:</td>
			<td><input type="text" name="name" id="name" value="<?php echo $row[2];?>"/></td>
		</tr>
        
		<tr>
			<td>Date Of Birth:</td>
			<td><input type="date" name="dob" id="dob" value="<?php echo $row[3];?>"/></td>
		</tr>
           
		<tr>
			<td colspan="2" align="center">
			<input type="submit" name = "submit" class="loginform_add"id = "registerbutton" value="Update"  style="background:#06F; color:#FFF; font-size:16px"/>
			</td>
		</tr>
	</table>
	</form>
</div>
</body>
</html>