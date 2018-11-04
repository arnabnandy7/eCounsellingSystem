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
            <h2>Manual Start Counselling</h2> 
	
	<br>
	<form action="counselling.php" method="post" name="frm1" id="frm1">
			
				<table width="318" height="58" id="registertable" align="center">
			<tr>
            	<td width="74">
				<label style="font-size:14px">Round One</label> </td>
                <td width="84"><input type="submit" value="Start" id="button_start_counselling" name="button_start_counselling" class="loginform_add" style="background:#06F; color:#FFF; font-size:14px"/>
        		</td>
                <td width="113"><input type="submit" value="Restore" id="button_restore_seats" name="button_restore_seats" class="loginform_add" style="background:#06F; color:#FFF; font-size:14px"/>
        		</td>
            </tr>
        	</table>
  </form>
         <br>
         <br>
         	<form action="counselling_2nd.php" method="post" name="frm1" id="frm1">
			
				<table width="318" height="58" id="registertable" align="center">
			<tr>
            	<td width="74">
				<label style="font-size:14px">Round Two</label> </td>
                <td width="84"><input type="submit" value="Refresh" id="refresh" name="refresh" class="loginform_add" style="background:#06F; color:#FFF; font-size:14px"/>
        		</td>
                <td width="113"><input type="submit" value="Start" id="button_start_counselling" name="button_start_counselling" class="loginform_add" style="background:#06F; color:#FFF; font-size:14px"/>
        		</td>
            </tr>
        	</table>
  </form>
  <div align="center" style="color:#CC3300; font-size:16px">
  Recomendation:-<br>
  1. Start Round One.<br>
  2. Restore (If Needed)<br>
  3. Refresh For Round Two<br>
  4. Start for Round Two<br>
  </div>   
</div>
</body>
</html>