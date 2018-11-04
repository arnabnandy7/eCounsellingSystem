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
            <h2>Add New Notice</h2> 
	
	<br>
	<form action="upload_file.php" method="post" enctype="multipart/form-data">
		<table width="453" height="200" id="upload" align="center">
			<tr>
            	<td>
		<label for="file">Title   : 	</label></td>
		<td><input type="text" name="ttl" id="ttl" style="width: 300px;" required/></td>
		 </tr>
        	<tr>
            	<td>
		<label for="file">Subject : 	</label></td>
		<td><textarea  id="ta" name="ta" style="resize:none; width:300px; height:80px" required ></textarea></td>
			</tr>
			<tr>
				<td>
		<label for="file">Notice  : 	</label></td>
		<td><input type="file" name="file" id="file"></td></tr>
		<tr>
		<td align="center" colspan="2"><input type="submit" name="submit" value="Upload" class="loginform_add" style="background:#06F; color:#FFF; font-size:16px"></td></tr>
		</table>
</form>
</div>
</body>
</html>