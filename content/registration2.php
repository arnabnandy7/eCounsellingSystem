<?php
require 'connect.inc.php';

if(isset($_POST['reg_step2'])){
  //if(isset($_POST['name']) && !empty($_POST['name'])){// &&isset($_POST['rank']) && !empty($_POST['rank']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['repass']) && !empty($_POST['repass']) && isset($_POST['address']) && !empty($_POST['address']) && isset($_POST['phone']) && !empty($_POST['phone'])) {
	$name=$_POST['name'];
	$rank=$_POST['rank'];
	$email = $_POST['email'];
	$hashpass = md5($_POST['pass']);
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$error_code = 0;
	$std_phone='+91'.$phone;
	$dom= explode("@",$email);
	$domain=$dom[1];
	if($email != "" && $hashpass != "" && $phone != "" && $address != "") 
	{
		$email_query="select * from `candidate_details` where email='$email'";
			if($email_query_run=mysql_query($email_query))
			{
				if(mysql_num_rows($email_query_run) == 1) 
				{
					//echo 'Already registered.';
					header("Location: candidate registration 2.php?rank=".$rank."&email=".$email."&status=alreadyused");
				} 
				else
				{
					if(checkdnsrr($domain,"NS"))
					{
						$candidateid=rand(11140101,999999999);
						$query = "insert into `candidate_details` values('','$candidateid','$name','$rank','$email','$hashpass','$std_phone','$address','')";
						if($query_run = mysql_query($query))
						{
							$length = 5;
							$randomstring = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
							$flag=0;
					
							$activation_query = "insert into `candidate_reg_log_check` values('".$email."','".$hashpass."','".$randomstring."', '".$flag."')";	
							if($activation_query_run= mysql_query($activation_query))
							{
										$to = $email;
                                        include "regact_mail.php";
										send_activation($email,$randomstring);
										session_start();
										$_SESSION['candemail']=$to;
					                    header("Location: candidate registration 3.php");
							}
						}
					}
					else
					{
						//echo "wrong email";
							header("Location: candidate registration 2.php?rank=".$rank."&email=".$email."&status=DOMAIN NOT VALID");
					}
	
				}
			}
	}
	else
	{
		header("Location: candidate registration 2.php?error=error in submission");
	}
} 
else 
{
	$error_code += 1;
	header("Location: candidate registration 2.php?error=".$error_code."&name2=".$name);
}

?>