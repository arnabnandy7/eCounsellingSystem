<?php
function send_activation($recepient,$code)
{
$sql="select * from candidate_details where email='$recepient'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$ky=$row["candidate_id"];
$name=$row["candidate_name"];
$sub="ecounselling Account Activation";
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= "From: noreply@ecounselling.tk\r\n";
$msg='
<html>
<body>
<div align="center" style="width:600px; background-color:#0E5CAF; color:#F8F8F8; height:45">
<div align="right"><img src="http://ecounselling.tk/mailimg/maillogo.png" width="114" height="33" style="margin-top:4px">&nbsp;&nbsp;</div>
</div>
<div style=" color:#000000; font-size:18px;width:600px">
'.$name.', You have registered with Online Counselling.<br>Your activation code is <a style="font-size:16px; color:#0E64C0">'.$code.'</a>. You need to put this code for activating your account. <br>
If You Close your browser or didnot get this email with in 10 minutes of the registration, 
we suggest you to kindly proceed with <a>trouble signin</a>
</div>
<br><br><br><br><br><br>
<div style="width:600px; background-color:#0E5CAF; color:#F8F8F8; height:35"> If you are not a reciepient please ignore it.
</div>
</body>
</html>';
mail($recepient,$sub,$msg,$headers);
}