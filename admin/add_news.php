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
            <h2>Add New News</h2> 
	
	<br>
	<form action="upload_news_process.php" method="post" enctype="multipart/form-data">
		<table width="394" height="154" id="upload" align="center">
			<tr>
            	<td width="77">
		<label for="file">Event   : 	</label></td>
		<td width="305"><input type="text" name="text1" id="text1" style="width: 300px;" required/></td>
		 </tr>
        	<tr>
            	<td>
		<label for="file">Date   : 	</label></td>
		<td><input type="text" name="text2" id="text2" style="width: 300px;" required/></td>
			</tr>
		<tr>
		<td align="center" colspan="2"><input type="submit" name="addnews" value="Save" class="loginform_add" style="background:#06F; color:#FFF; font-size:16px"></td></tr>
		</table>
</form>
</div>
</body>
</html>