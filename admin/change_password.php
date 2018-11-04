<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />	
<script src="required/js/val.js" type="text/javascript"></script>

<script type="text/javascript" src="../script.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
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
                    text1: {
                        required: true,
                    },
                    text2: {
                        required: true,
						equalTo: "#text1"
                    },
                },
                messages: {
                    
                    text1: {
                        required: "Enter Password",
                    
                    },
                    text2: "Password Not Same",
                    
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

</head>
<body>
<div class="center_content">  
            <h2>Change Password</h2> 
	
	<br>
	<form  id="register-form" action="change_password_process.php" method="post">
		<table width="340" height="153" id="upload" align="center">
			<tr>
            	<td width="129">
		<label for="file">New Password</label></td>
		<td width="199"><input type="password" name="text1" id="text1" style="width: 190px;" required/></td>
		 </tr>
        	<tr>
            	<td height="45">
		<label for="file">Re Enter Password</label></td>
		<td><input type="password" name="text2" id="text2" style="width: 190px;" required/></td>
			</tr>
		<tr>
		<td align="center" colspan="2"><input type="submit" name="changepass" value="Proceed" class="loginform_add" style="background:#06F; color:#FFF; font-size:16px"></td></tr>
		</table>
</form>
</div>
</body>
</html>