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
            <h2>Quick Contact</h2> 
	
	<br>
	<form action="quick_contact_process.php" method="post" enctype="multipart/form-data">
		<table width="394" height="154" id="upload" align="center">
			<tr>
            	<td width="77">
		<label for="file">To : 	</label></td>
		<td width="305">
        <select id="s1" name="s1" required style="width:180px">
        <option value="" selected></option>
        <option value="all">All Candidate</option>
        </select>
        </td>
		 </tr>
        	<tr>
            	<td>
		<label for="file">Subject : 	</label></td>
		<td><input type="text" name="sub" id="sub" style="width: 500px;" required/></td>
			</tr>
             <tr>
            	<td>
		<label for="file">Message : 	</label></td>
		<td><textarea required style="width:500px; height:180px" name="msg" id="msg"></textarea></td>
			</tr>
		<tr>
		<td align="center" colspan="2"><input type="submit" name="quickcontact" value="Send" class="loginform_add" style="background:#06F; color:#FFF; font-size:16px"></td></tr>
		</table>
</form>
</div>
</body>
</html>