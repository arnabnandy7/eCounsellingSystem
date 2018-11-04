<?php require 'session.php';
		include 'connect.inc.php';

						if(loggedin()) {
							$name =  $_SESSION['name'];
							$mail=$_SESSION['email'] ;
							$lastlogin=$_SESSION['last_login_time'];
							$query="select * from `candidate_details` where `email`='$mail'";
							$query_run=mysql_query($query);
							$query_arr=mysql_fetch_array($query_run);
							$rank=$query_arr['rank'];
							
						} else {
							header("Location: candidate_home.php");
						}
?>
<?php 
	require "connect.inc.php";
$sql_fetch_clg="select * from college_details";
$result_fetch_clg=mysql_query($sql_fetch_clg);
$count_fetch_clg=mysql_num_rows($result_fetch_clg);
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>e-counselling | Candidate Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<link rel="stylesheet" href="styles/mycss.css" type="text/css" />
<script type="text/javascript" src="scripts/jquery-1.8.2.min.js"></script>
<link rel="stylesheet" href="styles/mycss.css" type="text/css" />
<link rel="stylesheet" href="styles/college_textbox.css" type="text/css" />
<style type="text/css">
#allot{
	width:auto;
	height:auto;
	margin:25px 0 0 0;
}
#registertable td
{
	width:-20px;
}
#registertable{
border:1px red;
border-top:1px red;
border-bottom:1px red;
}
#data{
	margin:0 0 0 50px;
}
</style>
<script type="text/javascript">
$(document).ready(function(e) {
    $('#panel').hide();
	$('#show_panel').click(function(e) {
        $('#panel').toggle('slow');
    });
	/*$('#show_panel').mouseover(function(e) {
        $('#panel').toggle('slow');
    });*/
});
</script>
<script type="text/javascript">
   window.location.hash="no-back-button";
window.location.hash="Again-No-back-button";//again because google chrome don't insert first hash into history
window.onhashchange=function(){window.location.hash="no-back-button";}
</script>
</head>

<body id="top">

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
      <li class="active"><a href="candidate_home.php">Homepage</a></li>
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
      <li><a href="#" onclick="javascript:void window.open('counselling_schedule.php','1389728149356',
'width=1480,height=1020,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0'
);return false;">Counselling Schedules</a></li>
      <li class="last"><a href="gallery.php">Demo Counselling</a></li>
    </ul>
    <div  class="clear"></div>
  </div>
</div>

<!-- ####################################################################################################### -->
<div class="wrapper row4">
  <div id="container" class="clear">
    <!-- ####################################################################################################### -->
    
    
    
    <div id='content'>
     <h2 align='left' style='color:#27408B;'>Current College Wise Seat Status</h2>
     <div class="myline">
      </div>
     
      <br />
     <table width="100%" height="51" align="left">
     <thead >
     <tr align="center">
	<th >College</th>
	<th >Intake</th>
	<th >Avialable</th>
	</tr>
     </thead>
     <tbody>
<?php
if($count_fetch_clg >=1)
{
	while($row=mysql_fetch_array($result_fetch_clg))
	{
		echo "<tr>
<td  align='left'>$row[college_name]</td>
<td align='center'>$row[intake]</td>
<td align='center'>$row[seat2]</td>
</tr>";
	}
}
else
{
echo "<tr>
<td colspan='3' align='center'>No Record Found.</td>
</tr>";
}
?>
</tbody>

     </table>
	  
   

    </div>
	
    
    
    <div id="column">
      <div class="subnav">
        <h2>Candidates Panel</h2>
       <div style="color:#0E64C0">Welcome,&nbsp;&nbsp;<?php echo $name; ?></div><a  href="logout.php" align="right" id="log_out" name="log_out" >logout</a><br />
        <label id="logintime" style="color:#0E64C0">last login &nbsp;&nbsp;&nbsp;<?php echo $lastlogin;?></label>
        <li style="list-style:none;"><br /></li>
        <ul>
          	
              <li style="color:#0E64C0">My Account&nbsp;&nbsp;&nbsp;<img id="show_panel" src="images/plus.gif" /></li>
                <ul id="panel">
               	 <li>
				<a href="change_candidate_password.php" id="" class="pass_change">Change password</a>
				<a href="change_candidate_contact.php" class="contact_change">Change contact </a>
                  <a href="report_candidate_problem.php" class="contact_change">Report problem </a>
                  
                  </ul>
                
              </li>
        
      </div>
      <div class="subnav">
        <h2>Counselling Panel</h2>
        <li style="list-style:none;"><a href="#" onclick="javascript:void window.open('static/counselling_rules.html','1389728149356',
'width=1480,height=1020,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0'
);return false;"> Counselling Rules</a></li>
          <li style="list-style:none;"><a href="#" onclick="javascript:void window.open('static/counselling_instruction.php','1389728149356',
'width=1480,height=1020,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0'
);return false;"> Counselling Instructions</a></li>
           <li style="list-style:none;"><a href="static/download_pdf/JECA 2010 Opening and Closing Rank.pdf" target="new"> Previous Year Statistics</a> </li>
        </ul>
      </div>
      <div id="subnav" >
        <ul>
        
            <h2 style="list-style:none;">Counselling System</h2>
            <li>
			<a  class="button">prefences</a></li>
			<li style="list-style:none;"></br></li>
			<li><a href="candidate_allotment.php"> My Allotments</a></li>
			<li style="list-style:none;"></br></li>
            <li><a href="seat_status.php">Current Seat Status</a></li>
          </li>
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
        <li><a href="#">Login</a></li>
        <li><a href="#">Freedom of Information</a></li>
        <li><a href="#">Website Privacy</a></li>
        <li><a href="#">Press Release Information</a></li>

        <li><a href="#">Job Vacancies</a></li>
     
      </ul>
    </div>
    <div class="footbox">
      <h2>Institute Area</h2>
      <ul>
        <li><a href="#">Universities and Colleges</a></li>
        
        <li><a href="#">Institute Login</a></li>
        <li><a href="#">Counselling Activities</a></li>
        <li><a href="#">Student Development</a></li>
        <li><a href="#">Student Financial Services</a></li>
        <li class="last"><a href="#">Counsil Area</a></li>
      </ul>
    </div>
  <!-- ####################################################################################################### -->
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Design and Devoloped By<a href="#" title="Free Website Templates">&nbsp; &nbsp;Arnab Nilotpol Subhrajyoti and Suman</a></p>
  </div>
</div>

</body>
</html>