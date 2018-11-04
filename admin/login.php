<?php
session_start();
if (!empty($_SESSION['userlogged'])==1)
{
	header("location:index.php");
}
else
{
	
}
?>
<?php
if(!empty($_GET["error"]))
{
	$msg='Invalid Login';
}
else
{
	$msg='';
}
?>
<?php
if(!empty($_GET["sucess"]))
{
	$msg='passwordchanged';
}
else
{
	$msg='';
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin | ecounselling</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link href='http://fonts.googleapis.com/css?family=Belgrano' rel='stylesheet' type='text/css'>
<style>
#register-form label.error {
    color: #FB3A3A;
    display: inline-block;
    margin: 4px 0 5px 125px;
    padding: 0;
    text-align: center;
    width: 220px;
}
</style>
<script src="js/jquery-1.9.1.js"></script>
<script src="js/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(e) {
    $('#msg1').fadeIn(3000).delay(3000).fadeOut(3000);
	$('#msg1').fadeIn(2000).delay(8000).fadeOut(5000);
	$("#log2").hide();
	$("#tl2").hide();
	
	$("#frgt1").click(function(){
	$("#log1").hide();
	$("#log2").show();
	$("#tl2").show();
	});
	$("#frgt2").click(function(){
	$("#log1").show();
	$("#log2").hide();
	$("#tl2").hide();
	});
});
</script>

<script type="text/javascript" src="../script.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript">
(function($,W,D)
{
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            //form validation rules
            $("#register-form").validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    pass: {
                        required: true,
                    },
                },
                messages: {
                    
                    pass: {
                        required: "Please provide a password",
                    
                    },
                    email: "Please enter a valid email address",
                    
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        }
    }

    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });

})(jQuery, window, document);
</script>

<script type="text/javascript" language="javascript">
 
     $(function() {
 
            $(this).bind("contextmenu", function(e) {
 
                e.preventDefault();
 
            });
 
        }); 
</script>

</head>
<body>
<div id="loginpanelwrap">
  	
	<div class="loginheader">
    <div class="logintitle" align="center" style="font-size:18px; color:#06F"><img src="images/logo.jpg" width="188" height="55"/><br /><u>Admin Context</u></div>
    
    <br />
<div id='tl2' align='center' style='color:#C91215; font-size:18px; font-family:Times New Roman'><u>Retrieve Password</u></div>
<?php
if(isset($_POST['generate']))
{
	require "connect.inc.php";
	$id=$_POST["emailid"];
	$pass1=substr(mt_rand(),0,4);
	$pass2 = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ"),0,4);
	$pass3=substr(mt_rand(),0,2);
	
	$newpass=$pass1.$pass2.$pass3;
	$newpassword=md5($newpass);
	
	$sql_c="update admin_login set password='$newpassword' where email='$id'";
	if(mysql_query($sql_c))
	{
		include "pass_mail.php";
		send_forgot_pass($id,$newpass);
	echo " <div id='msg2' align='center' style='color:#06F; font-size:18px; font-family:Times New Roman'>Your New Password has been email to you. Please Change on next login.</div>";
	}
}
?>
<?php
if($msg=='Invalid Login')
{
	echo " <div id='msg1' align='center' style='color:#C91215; font-size:18px; font-family:Times New Roman'>Invalid Credentials</div>";
}
else
{
	
}
?>
<?php
if($msg=='passwordchanged')
{
	echo "<div id='msg2' align='center' style='color:#C91215; font-size:18px; font-family:Times New Roman'>Password Changed Sucessfully</div>";
}
else
{
	
}
?>
     
    <div class="loginform" id="log1">
        <form id="register-form" name="f1" action="check-admin-login.php" method="post">
        <div class="loginform_row">
        <label>Username:</label>
        <input type="text" name="email" class="loginform_input"/>
        </div>
        <div class="loginform_row">
        <label>Password:</label>
        <input type="password" class="loginform_input" name="pass" />
        </div>
        <div class="loginform_row">
        <a href="#" id="frgt1" align='center' style='font-size:16px'><u>Forgot Password</u></a>
        <input type="submit" class="loginform_submit" value="Login" name="login" style="background:#06F; color:#FFF; font-size:16px"/>
        </div> 
        <div class="clear"></div>
        </form>
    </div>
   
 <div class="loginform" id="log2">

        <form id="register-form" name="f2" action="#" method="post">
        
        
        <div class="loginform_row">
        <label>Username:</label>
        <input type="email" name="emailid" class="loginform_input" id="t1" required/>
        </div>
        
        <div class="loginform_row">
        <a href="#" id="frgt2" align='center' style='font-size:16px'><u>Login</u></a>
        <input type="submit" class="loginform_submit" value="Generate" name="generate" style="background:#06F; color:#FFF; font-size:16px"/>
        </div> 
        <div class="clear"></div>
        </form>
    </div>

</div>

    	
</body>
</html>