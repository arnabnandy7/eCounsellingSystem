<?php
require 'connect.inc.php';
include 'session.php';
if(isset($_GET['username']) && !empty($_GET['username']) && isset($_GET['password']) && !empty($_GET['password'])) 
{
	$email = $_GET['username'];
	$password = $_GET['password'];
	$hashpass = md5($password);
	
	$query = "select `email`, `password` from `candidate_reg_log_check` where `email` = '$email' and `password` = '$hashpass'";
		if($query_run = mysql_query($query)) 
		{
			$query_chk_flg = "select `chk_flg` from `candidate_reg_log_check` where `email` = '$email' and `password` = '$hashpass'";
			
				if($query_chk_flg_run = mysql_query($query_chk_flg)) 
				{
					if(mysql_num_rows($query_chk_flg_run) == 1) 
					{
						$flag = mysql_result($query_chk_flg_run, 0, 'chk_flg');
						
							if($flag == 1) 
							{
								$session_query = "select * from `candidate_details` where `email` = '$email'";
								
									if($session_query_run = mysql_query($session_query)) 
									{
										if(mysql_num_rows($session_query_run) == 1) 
										{
											    $row=mysql_fetch_array($session_query_run);
												$name = $row['candidate_name'];
												$_SESSION['name'] = $name;
												$_SESSION['email']= $email;
												$date = date_default_timezone_set('Asia/Kolkata');
												$today = date("F j, Y, g:i A");
												
												$_SESSION['last_login_time']= $row["last_login"];
												
												//echo $row['last_login'];
												
												$sql_update_time="update candidate_details set last_login='$today' where email='$email'";
												mysql_query($sql_update_time);

												header("Location: candidate_home.php");
										}
									}	
							}
						else
						{
							echo "invalid login";
								//header("Location:index.php?error=invalidlogin");
						}
				    }
					else
						{
							echo "invalid login";
							//	header("Location:index.php?error=invalidlogin");
						}
				}
		}
		
}

//header("Location: index.php");
?>