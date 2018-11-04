<?php
function send_conf_mail($recepient)
{
require "connect.inc.php";
$sql="select * from candidate_details where email='$recepient'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$ky=$row["candidate_id"];
$name=$row["candidate_name"];
$sub="Welcome to ecounselling";
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= "From: no-reply@ecounselling.tk\r\n";
$msg='
<html>
<body>
<div align="center" style="width:600px; background-color:#0E5CAF; color:#F8F8F8; height:45">
<div align="right"><img src="http://ecounselling.tk/mailimg/maillogo.png" width="114" height="33" style="margin-top:4px">&nbsp;&nbsp;</div>
</div>
<div style=" color:#000000; font-size:18px;width:600px">
'.$name.', You have registered with Online Counselling.<br>
Your Registration has been sucessfully processed. Lots of thing to do, <br>
we suggest you to kindly login and view Counselling Process Video. 
</div>
<br><br><br><br><br><br>
<div style="width:600px; background-color:#0E5CAF; color:#F8F8F8; height:35"> If you are not a reciepient please ignore it.
</div>
</body>
</html>';
mail($recepient,$sub,$msg,$headers);
}