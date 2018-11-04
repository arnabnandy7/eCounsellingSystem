<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />	
<script src="js/valid_college_entry.js" type="text/javascript"></script>
</head>
<body>
<div class="center_content">  
            <h2>College Entry</h2> 
	<?php
	
	require 'connect.inc.php';
	$sql="select max(college_cuid) as cid from college_details";
	$rs=mysql_query($sql);
	$row=mysql_fetch_row($rs);
	$max_cid=$row[0];
	$new_cid=$max_cid+1;
	
	 ?>
	<br>
	<form action="entryclg.php" method="post" name="frm2" id="frm2"> 
			<!--<form action="#" method="post" name="frm2" id="frm2">-->
				<table width="458" height="288" id="registertable" align="center">
			<tr>
            	<td>
				<label>College ID:</label> </td>
                <td> <input type="text" id="cid" name="cid" value="<?php echo $new_cid; ?>" style="width: 300px;" maxlength="5" required readonly/>
        		</td>
            </tr>
        	<tr>
            	<td>
				<label>College Name:</label> </td>
                <td> <input type="text" id="cname" name="cname" style="width: 300px;" />
        		</td>
            </tr>
            <tr>
            	<td>
				<label>University Name:</label></td>
                <td><select id="s1" name="s1" style="width: 300px">
                <option value="" selected></option>
                <option value="West Bengal University of Technology">West Bengal University of Technology</option>
                <option value="Jadavpur University">Jadavpur University</option>
                <option value="Calcutta University">Calcutta University</option>
                <option value="University of Burdwan">University of Burdwan</option>
                </select>
	              </td>
            </tr>
            <tr>
            	<td> 
				<label>Type:</label> </td>
                <td><select id="s2" name="s2" style="width: 150px">
                <option value="" selected></option>
                <option value="Self Finanaced">Self Finanaced</option>
                <option value="Semi Govt.">Semi Govt.</option>
                <option value="Govt.">Govt.</option>
                </select>
                </td>
            </tr>
            <tr>
            	<td> 
				<label>Location:</label> </td>
                <td><input type="text" id="loc" name="loc" style="width: 300px;" />
                    </td>
            </tr>
            <tr>
            	<td>          
			    <label>Intake:</label>  </td>
                <td><div id="d"><input type="text" name="int" id="int" style="width: 300px;" maxlength="3" /></div></td>
            </tr>
            <tr>
            	<td>  
	        
                <label>Phone Number 1:</label> </td>
                <td><div id="d"><input type="text" name="ph1" id="ph1" style="width: 300px;" maxlength="11" /></div></td>
            </tr>
            <tr>
            	<td>  
            
                <label>Phone Number 2:</label> </td>
                <td><div id="d"><input type="text" name="ph2" id="ph2" style="width: 300px;"  maxlength="11"/></div> </td>
            </tr>
            <tr>
            	<td>               
				
                <label>Website:</label> </td>
                <td><input type="text" name="wb" id="wb" style="width: 300px;" maxlength="80" /></td>
            </tr>
            <tr>
            	<td>                
                <label>E - Mail ID:</label> </td>
                <td><input type="text" name="mailid" id="mailid" style="width: 300px;" /> </td>
            </tr>
            <tr>
			<td id="td_error_msg" colspan="2" style="color:red; font-weight:bold" align="center" ></td>
		</tr>
<tr align="center">
<td colspan="2"><input type="submit" value="ADD" id="addclg" name="addclg" class="loginform_add" style="background:#06F; color:#FFF; font-size:16px" onClick="return valid_college_entry();"/>&nbsp;&nbsp;&nbsp;
				<input type="reset" value="Reset" id="reset" name="reset" class="loginform_add" style="background:#06F; color:#FFF; font-size:16px"/></td>
                </tr>
                         </table>
	</form>
</div>
</body>
</html>