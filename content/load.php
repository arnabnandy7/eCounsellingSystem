<?php
include 'connect.inc.php';
sleep(5);
	if(isset($_POST['name_1']) && isset($_POST['name_2']) && isset($_POST['name_3'])) {
		$name_1 = htmlentities($_POST['name_1']);
		$name_2 = htmlentities($_POST['name_2']);
		$name_3 = htmlentities($_POST['name_3']);
		//if($name_1 != "sele")
		
		require 'session.php';
			if(loggedin()) {
				 $email=$_SESSION['email'];
				$query_rank="select * from `candidate_details` where `email`='$email'";
				$result_rank=mysql_query($query_rank);
				$row_rank= mysql_fetch_array($result_rank); 
				$rank=$row_rank['rank'];
				}
				
		
		
		$check_rank_query="select `rank` from `candidate_preferences` where `rank`='$rank'";
		if($check_rank_exist=mysql_query($check_rank_query)){
			if(mysql_num_rows($check_rank_exist)==1){
				//echo ("<script>alert('Preferences already selected');</script>");
					echo "preference alteady Selected";
			}else{
					$query = "insert into `candidate_preferences` values('".$rank."', '".$name_1."', '".$name_2."', '".$name_3."')";
					if($query_run = mysql_query($query)) {
						echo 'Preferrences have been saved...';
						} else {
							echo 'Some problem occurs';
					}
			}
		}
		
		
	} else {
		echo 'There is some selection error..';
	}
?>
