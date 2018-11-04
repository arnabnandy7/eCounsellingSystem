<?php
if(!empty($_GET))
{
	$id=$_GET['clgid'];
	require "connect.inc.php";
	$sql1="select * from college_details where college_cuid='$id'";
	$result1=mysql_query($sql1);
	$row1=mysql_fetch_array($result1);
}
?>
<html>
<head>
<script src="required/js/val.js" type="text/javascript"></script>
</head>
<body>
<div id="box1" title="Update College">
<h2>Update College Details</h2>
    <form action="update_clg_process.php" method="post" name="frm1" id="frm1" onSubmit="return validate1();">
			
				<table width="458" height="288" id="registertable" align="center">
			<tr>
            	<td>
				<label>College ID:</label> </td>
                <td> <input type="text" id="cid" name="cid" style="width: 300px;" value="<?php echo $row1['college_cuid']; ?>" maxlength="5" required readonly/>
        		</td>
            </tr>
        	<tr>
            	<td>
				<label>College Name:</label> </td>
                <td> <input type="text" id="cname" name="cname" style="width: 300px;" required value="<?php echo $row1['college_name']; ?>" readonly/>
        		</td>
            </tr>
            <tr>
            	<td>
				<label>University Name:</label></td>
                <td><input type="text" name="uname" id="uname" value="West Bengal University of Technology" style="width: 300px;"/>
	              </td>
            </tr>
            <tr>
            	<td> 
				<label>Location:</label> </td>
                <td><input type="text" id="loc" name="loc" style="width: 300px;" required value="<?php echo $row1['location_address']; ?>"/>
                    </td>
            </tr>
            <tr>
            	<td>          
			    <label>Intake:</label>  </td>
                <td><div id="d"><input type="numeric" name="int" id="int" style="width: 300px;" required value="<?php echo $row1['intake']; ?>"/></div></td>
            </tr>
            <tr>
            	<td>  
	        
                <label>Phone Number 1:</label> </td>
                <td><div id="d"><input type="numeric" name="ph1" id="ph1" style="width: 300px;" maxlength="10" required value="<?php echo $row1['phone1']; ?>"/></div></td>
            </tr>
            <tr>
            	<td>  
            
                <label>Phone Number 2:</label> </td>
                <td><div id="d"><input type="numeric" name="ph2" id="ph2" style="width: 300px;"  maxlength="10" value="<?php echo $row1['phone2']; ?>"/></div> </td>
            </tr>
            <tr>
            	<td>               
				
                <label>Website:</label> </td>
                <td><input type="text" name="wb" id="wb" style="width: 300px;" maxlength="100" value="<?php echo $row1['website']; ?>"/></td>
            </tr>
            <tr>
            	<td>                
                <label>E - Mail ID:</label> </td>
                <td><input type="text" name="mailid" id="mailid" style="width: 300px;" required value="<?php echo $row1['email']; ?>"/> </td>
            </tr>
<tr align="center">
<td colspan="2"><input type="submit" value="Update" id="update" name="update" class="loginform_add" style="background:#06F; color:#FFF; font-size:16px"/></td>
                </tr>
                         </table>
	</form>
    </div>
</body>
</html>
    