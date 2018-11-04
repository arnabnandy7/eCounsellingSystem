<?php
function send_activation($recepient,$code)
{
$sql="select * from candidate_details where email='$recepient'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$ky=$row["candidate_id"];
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
You have registered with Online Counselling.<br>Your activation code is <a style="font-size:16px; color:#0E64C0">'.$code.'</a>. You need to activate your account by <a href='.'www.ecounselling.tk/content/trouble_signin_retreive_acc.php?key='.$ky.' >Click Here</a><br>or paste the following link in your browser<br>
www.ecounselling.tk/content/trouble_signin_retreive_acc.php?key='.$ky.'
</div>
<br><br><br><br><br><br>
<div style="width:600px; background-color:#0E5CAF; color:#F8F8F8; height:35"> If you are not a reciepient please ignore it.
</div>
</body>
</html>';
mail($recepient,$sub,$msg,$headers);
}