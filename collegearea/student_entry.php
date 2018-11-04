<?php require 'session.php';

						if(loggedin()) {
							$name =  $_SESSION['name'];
							$mail=$_SESSION['mail'] ;
							$college_id=$_SESSION['college_cuid'];
							$last_login=$_SESSION['lastloggedtime'];
							$current_login=$_SESSION['currentloggedtime'];
						
						} else {
							header("Location:index.php");
						}
?>
<?php
if(!empty($_GET))
{
	$error=$_GET['error'];
}
else
{
	$error="";
}
?>
<?php 
	include "connect.inc.php";
	if(isset($_POST['submit']))
	{
		$rank=$_POST['srank'];
		$eno=$_POST['seno'];
		$code=$_POST['scode'];
		$check="select * from `rank_details` where `rank`='$rank' and `enrolment_no`='$eno'";
		$check_result=mysql_query($check);
		$check_count=mysql_num_rows($check_result);
		if($check_count==1)
		{
			$check1="select * from `seat_allotments` where `rank`='$rank' and `seqnc_no`='$code' and `allot_clg_id`='$college_id' and `active`='Y'";
			$check1_result=mysql_query($check1);
			$check1_count=mysql_num_rows($check1_result);
			$count1_arr=mysql_fetch_array($check1_result);
			if($check1_count==1)
			{
				if($count1_arr['admited']=='')
				{
						$sql2="update seat_allotments set admited='Y' where rank='$rank'";
						mysql_query($sql2);
						$sql3="UPDATE `college_details` SET `seat2`= seat2 -1 where `college_cuid`='$count1_arr[allot_clg_id]'";
						mysql_query($sql3);
				}
				else
				{
					header('location:student_entry.php?error=invalidinput');
				}
			}
			else
			{
					header('location:student_entry.php?error=invalidinput');
			}
		}
		else
		{
					header('location:student_entry.php?error=invalidinput');
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>College |MCA Online Counselling</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<link rel="stylesheet" href="styles/mycss.css" type="text/css" />
<script type="text/javascript" src="scripts/jquery-1.8.2.min.js"></script>
<link rel="stylesheet" href="styles/college_textbox.css" type="text/css" />
<script type="text/javascript">
$(document).ready(function(e) {
    $('#panel').hide();
	$('#show_panel').click(function(e) {
        $('#panel').toggle('slow');
    });
	 $('#error').fadeOut(8000);
	/*$('#show_panel').mouseover(function(e) {
        $('#panel').toggle('slow');
    });*/
});
</script>
<script type="text/javascript">
	window.history.forward(1);
	function noBack()
  { 
  window.history.forward(); 
  }
</script>
</head>

<body id="top" onload="noBack();" onpageshow="if (event.persisted) noBack();" onunload="">

<div class="wrapper row1">
  <div id="header" class="clear" >
    <div class="fl_left" style="margin:-14px 0 0 0">
      <h1><a href="index.php"><img src="images/logo.png" /></a></h1>
    </div>
   
  </div>

</div>

<!-- ####################################################################################################### -->
<div class="wrapper row2" style="margin:-20px 0 0 0">
 
  <div id="topnav">
    <ul>
       <li class="active"><a href="college_home.php">Homepage</a></li>
      <li><a href="#" onclick="javascript:void window.open('static/counselling_overview.html','1389728149356',
'width=1480,height=1020,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0'
);return false;">Over View</a></li>
      <li><a href="#" onclick="javascript:void window.open('static/counselling_rules.html','1389728149356',
'width=1480,height=1020,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0'
);return false;">Counselling Rules</a></li>
      <li><a href="#">Participating Institutions</a>
        <ul>
          <li><a href="#" onclick="javascript:void window.open('static/govt_college.php','1389728149356',
'width=1480,height=1020,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0'
);return false;">Goverment Institutions</a></li>
          <li><a href="#" onclick="javascript:void window.open('static/semi_govt_college.php','1389728149356',
'width=1480,height=1020,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0'
);return false;">Semi Goverment Institutions</a></li>
          <li><a href="#" onclick="javascript:void window.open('static/self_finance_college.php','1389728149356',
'width=1480,height=1020,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0'
);return false;">Self-Financed Institutions</a></li>
        </ul>
      </li>
      <li><a href="#" onclick="javascript:void window.open('static/counselling_schedule.php','1389728149356',
'width=1480,height=1020,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0'
);return false;">Counselling Schedules</a></li>
      
    </ul>
    <div  class="clear"></div>
  </div>
</div>

<!-- ####################################################################################################### -->
<div class="wrapper row4">
  <div id="container" class="clear">
    <!-- ############################################COLLEGE AREA########################################################### -->
    <div id="content">
      <h1>Candidate Admission</h1>
       <div class="myline">
       </div>
       <?php
	   if($error=='invalidinput')
	   {
		   echo "<h2 align='center' style='color:red' id='error'>Invalid Combination</h2>";
	   }
	   ?>
     	<form action="" method="POST"> 
		<table style='margin:30px 0 0 0 ;'>
			<tr>
				<td>Enter Candidate Rank</td>
				<td><input class="textbox" type="text" name="srank" id="" placeholder="Enter Rank" /></td>
				
			</tr>
			<tr>
				<td>Enter Enrolment Number</td>
				<td><input class="textbox" type="text" name="seno" id="" placeholder="enter enrolment no" /></td>
				
			</tr>
			<tr>
				<td>Enter Secure Sequence</td>
				<td><input class="textbox" type="text" name="scode" id="" placeholder="enter code" /></td>
				
			</tr>
			<tr>
				
				<td></td>
				<td><input type="submit" name="submit" value="submit" /></td>
			</tr>
		</table>	
		</form>
     <br /><br />
     <div class="myline">
       </div>
      <div id="comments">
        
      </div>
      
    </div>
	<!--#################################################################################################### -->
    <div id="column">
      <div class="subnav">
        <h2>College Panel</h2>
        Welcome,<br /><?php echo $name; ?><br />&nbsp;<a  href="logout.php" align="right" id="log_out" name="log_out" >logout</a><br />
        <label id="logintime">last login&nbsp;<?php echo $current_login;?></label>
        
        
        <ul style='list-style:none;'>
          	
              <li >My Account&nbsp;&nbsp;&nbsp;<img id="show_panel" src="images/plus.gif" /></li>
                <ul id="panel">
               	 <li>
				<a href="change_password.php" id="" class="pass_change">Change password</a>
				<a href="change_contact.php" class="contact_change">Change contact </a>
                  
                  </ul>
                
              </li>
            
       
          
        
      </div>
      <div class="subnav">
        <h2>Admission Panel</h2>
        
        <li><a href="student_entry.php">Student Entry</a></li>
          <li><a href="report_problem.php">Report Problem</a></li>
           <li><a href="college_status.php">College status</a> </li>
           <li><a href="admited_student_list.php">List of Student Admited</a> </li>
        </ul>
      </div>
     
     
      <div class="subnav">
        <h2>Important Dates</h2>
         <marquee id="mark" scrollamount="2" direction="up">
                     <?php
		  include "connect.inc.php";
		 
		  $sql_event_time="SELECT * FROM counselling_date";
		  $result=mysql_query($sql_event_time);
		  while($row=mysql_fetch_row($result))
		  {
		  echo "<h3 style='font-size:14px'>  ".$row[1]." ".$row[2]." </h3>"."<br>";
		  }

		  ?>
		   </marquee>
       
      </div>
    </div>
    <!-- ####################################################################################################### -->
    <div class="clear"></div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row5">
  <div id="footer" class="clear">
    <!-- ####################################################################################################### -->
 <div class="foot_contact">
      <h2>e-Counselling System</h2>
      <address>
      Demo Website Under Major Project<br />
     On Basis of JECA RANK<br />
      Kolkata, West Bengal.<br />
      </address>
      <ul>
        <li><strong>Tel:</strong> 90909090909090</li>
        
        <li class="last"><strong>Email:</strong> <a href="#">info@ecounselling.tk</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Administration</h2>
      <ul>
        <li><a href="http://admin.ecounselling.tk" target="new">Login</a></li>
        <li><a href="#">Freedom of Information</a></li>
        <li><a href="#">Website Privacy</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Institute Area</h2>
      <ul>
        <li><a href="http://ecounselling.tk/collegearea" target="new">Universities and Colleges</a></li>
        <li><a href="http://ecounselling.tk/collegearea" target="new">Institute Login</a></li>
        <li><a href="#">Counselling Activities</a></li>
        <li class="last"><a href="http://admin.ecounselling.tk" target="new">Counsil Area</a></li>
      </ul>
    </div>
    <!-- ####################################################################################################### -->
  </div>
</div>   
 <!-- ####################################################################################################### -->
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="copyright" class="clear">
     <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="#">E-Counselling</a></p>
    <p class="fl_right">Design and Devoloped By<a href="#" title="Free Website Templates">&nbsp; &nbsp;Arnab Nilotpol Subhrajyoti and Suman</a></p>
  </div>
</div>



</body>
</html>