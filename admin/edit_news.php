<?php
if(!empty($_GET))
{
	$id=$_GET['id'];
require "connect.inc.php";   
$query1 = "SELECT * FROM counselling_date where id='$id'";
$result1 = mysql_query($query1);
$row=mysql_fetch_array($result1);
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
<div class="center_content">  
            <h2>Update News</h2> 
	
	<br>
	<form action="edit_news_process.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
		<table width="394" height="154" id="upload" align="center">
			<tr>
            	<td width="77">
		<label for="file">Event   : 	</label></td>
		<td width="305"><input type="text" name="text1" id="text1" style="width: 300px;" required value="<?php echo $row[1]; ?>"/></td>
		 </tr>
        	<tr>
            	<td>
		<label for="file">Date   : 	</label></td>
		<td><input type="text" name="text2" id="text2" style="width: 300px;" required value="<?php echo $row[2]; ?>"/></td>
			</tr>
		<tr>
		<td align="center" colspan="2"><input type="submit" name="editnews" value="Done" class="loginform_add" style="background:#06F; color:#FFF; font-size:16px"></td></tr>
		</table>
</form>
</div>
</body>
</html>