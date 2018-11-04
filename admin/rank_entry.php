<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" href="js/jquery-ui.css" type="text/css" />	
<script src="js/valid_rank_entry.js" type="text/javascript"></script>

</head>
<body>
<div class="center_content">  
            <h2>Rank Entry</h2> 
	
	<br>
	<form action="entryrank.php" method="post" name="frm1" id="frm1" >   
    <!--<form action="entryrank.php" method="post" name="frm1" id="frm1" >  -->
    <?php
	
	require 'connect.inc.php';
	$sql="select max(rank) as rank from rank_details";
	$rs=mysql_query($sql);
	$row=mysql_fetch_row($rs);
	$max_rank=$row[0];
	$new_rank=$max_rank+1;
	//echo "<label><strong><center><font color='red'>".$row[0]." is last rank entered into database.</font></center></strong></label>";
	 ?>
	<table width="408" height="223" id = "registertable" align="center">
		<tr>
	 		<td>Rank:</td>
	 		<td>
	 		<div id="d"><input type="text" id="rank" name="rank" value="<?php echo $new_rank; ?>"  required readonly/></div>
	 		</td>
        </tr>
		<tr>
			<td>Enrolment NO:</td>
			<td><div id="d"><input type="numeric" name="eno" id="eno"  maxlength = "8" required/></div></td>
		</tr>
        
		<tr>
			<td>Candidate Name:</td>
			<td><input type="text" name="name" id="name"  required/></td>
		</tr>
        
		<tr>
			<td>Date Of Birth:</td>
			<td><input type="date" name="dob" id="date" required/></td>
		</tr>
           <tr>
			<td id="td_error_msg" colspan="2" style="color:red; font-weight:bold" align="center" ></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
			<input type="submit" name = "addrank" class="loginform_add" id = "registerbutton" value="ADD"  style="background:#06F; color:#FFF; font-size:16px" onClick="return valid_rank_entry();"/>
			</td>
		</tr>
	</table>
	</form>
</div>
</body>
</html>