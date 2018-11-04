<?php
require 'connect.inc.php';

	$enrolment_no = $_GET['e'];
	$rank = $_GET['r'];
	$date = $_GET['d'];
	
	$query = "select `enrolment_no`, `candidate_name`, `rank`, `dob` from `rank_details` where `enrolment_no` = '$enrolment_no' and `rank` = '$rank' and `dob` = '$date'";
	$query_run = mysql_query($query);
		if(mysql_num_rows($query_run) == 1) {
			$name = mysql_result($query_run, 0, 'candidate_name');
			$r = mysql_result($query_run, 0, 'rank');
	
	$join_one_query = "SELECT candidate_details.email FROM candidate_details JOIN rank_details ON candidate_details.rank = rank_details.rank AND candidate_details.rank = $rank";
	if($join_one_query_run = mysql_query($join_one_query)) {
		if(mysql_num_rows($join_one_query_run) == 1) {
			$email = mysql_result($join_one_query_run, 0, 'email');
				$join_two_query = "SELECT candidate_reg_log_check.chk_flg FROM candidate_reg_log_check
									JOIN candidate_details ON candidate_details.email = candidate_reg_log_check.email
										AND candidate_reg_log_check.email =  '$email'";
					if($join_two_query_run = mysql_query($join_two_query)) {
						if(mysql_num_rows($join_two_query_run) == 1) {
							$flag = mysql_result($join_two_query_run, 0, 'chk_flg');
								if($flag == 0) {
									echo "<script >window.location.assign('candidate registration 1.php?error=not_activated');</script>";
									//header('Location: candidate registration 1.php');
								} else if($flag == 1) {
									echo ("<script>window.location.assign('candidate registration 1.php?error=already_registered');
									</script>");
								} else {
									//$query = "select `enrolment_no`, `candidate_name`, `rank`, `dob` from `rank_details` where `enrolment_no` = '$enrolment_no' and `rank` = '$rank' and `dob` = '$date'";
										//$query_run = mysql_query($query);
											//if(mysql_num_rows($query_run) == 1) {
												//$name = mysql_result($query_run, 0, 'candidate_name');
												//$r = mysql_result($query_run, 0, 'rank');
												
												header("Location: registration1.php?rank=".$r."&name=".$name);
												
											//} else {
													//header('Location: candidate registration 1.php');
											//}
								}
						} else {
							echo 'Flag not ok';
						}
					} else {
						echo 'hijibiji';
					}
			
		} else {
			header("Location: registration1.php?rank=".$r."&name=".$name);
			
		}
	} else {
		echo 'Not Ok.';
	}
	
 } else {
	echo ("<script>
window.location.assign('candidate registration 1.php?error=wronginformation');
</script>");
}
?>