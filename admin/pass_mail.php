<?php
function send_forgot_pass($recepient,$pa)
{
$sub="ecounselling Forgot Password";
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= "From: noreply@ecounselling.tk\r\n";
$msg='
<html>
<body>
<div align="center" style="width:600px; background-color:#0E5CAF; color:#F8F8F8; height:45">
<div align="right"><img src="http://i60.tinypic.com/30d9ooi.jpg" width="114" height="33" style="margin-top:4px">&nbsp;&nbsp;</div>
</div>
<div style=" color:#000000; font-size:18px;width:600px">
You have request for new password.<br> Your Password is:  '.$pa.'<br>Please Change on next login.
</div>
<br><br><br><br><br><br>
<div style="width:600px; background-color:#0E5CAF; color:#F8F8F8; height:35"> If you are not a reciepient please ignore it.
</div>
</body>
</html>';
mail($recepient,$sub,$msg,$headers);
}