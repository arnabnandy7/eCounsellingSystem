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
	include "connect.inc.php";
	
	if(isset($_POST['change_pass'])){
		$pass1=$_POST['old_pass'];
		$pass2=$_POST['new_pass'];
		$opass=md5($pass1);
		$npass=md5($pass2);
		
		$query="select * from `college_login` where `email`='$mail' and `password`='$opass'";
		$query_run=mysql_query($query);
		$row_count=mysql_num_rows($query_run);
		if($row_count==1){
			$update_pass="update `college_login` set `password`='$npass' where `email`='$mail'";
			mysql_query($update_pass);
		}else{
			echo "<script>alert('Incorrect pass')</script>";
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
<link rel="stylesheet" href="styles/mycss.css" type="text/css" />
<link rel="stylesheet" href="styles/college_textbox.css" type="text/css" />
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
	window.history.forward(1);
	function noBack()
  { 
  window.history.forward(); 
  }
</script>
</head>

<body id="top" onload="noBack();" onpageshow="if (event.persisted) noBack();" onunload="">

<div class="wrapper row1">
  <div id="header" class="clear">
    <div class="fl_left">
      <h1><a href="index.php">e-Counselling System</a></h1>
      <p></p>
    </div>
   
  </div>

</div>

<!-- ####################################################################################################### -->
<div class="wrapper row2">
 
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
    <!-- ####################################################################################################### -->
    
    
    
    <div id='content'>
    
    <div id='allot' >
     <h2 align='center' style='color:#27408B;'>CHANGE YOUR PASSWORD</h2>
    
      </div>
	  <br>
      
      <div id='data'>
	  <form action="change_password.php" method="POST">
	  <div class="myline">
       </div>
	   <form action="" method="POST">
      <table style='margin:30px 0 0 0;'>
      	<tr>
        	<td style='width:200px;'><h3>OLD PASSWORD</h3></td>
            <td> <input class="textbox" type="password" name="old_pass" id="" placeholder="old password" /> </td>
        </tr>
        <tr>
        	<td ><h3>NEW PASSWORD</h3></td>
            <td><input class="textbox" type="password" name="new_pass" id="" placeholder="new password" /></td>
        </tr>
        <tr>
        	<td></td>
            <td> <input type="submit" name="change_pass" value="submit" /></td>
        </tr>
        
		
      </table>
	  </form>
	  </br></br>
	  <div class="myline">
       </div>
	  </form>
      </div>
	  <div>
	
	  </div>
    
    <div id="mydiv">
   
	
    </div>
    </div>
	
    
    
    <div id="column">
      <div class="subnav">
        <h2>College Panel</h2>
        Welcome,<br /><?php echo $name; ?><br />&nbsp;<a  href="logout.php" align="right" id="log_out" name="log_out" >logout</a><br />
        <label id="logintime">last login&nbsp;<?php echo  $current_login;?></label>
        
        
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
           <li><a href="college_status.php"> College status</a> </li>
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
<div class="wrapper">
  <div id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="#">E-Counselling</a></p>
    <p class="fl_right">Design and Devoloped By<a href="#" title="Free Website Templates">&nbsp; &nbsp;Arnab Nilotpol Subhrajyoti and Suman</a></p>
  </div>
</div>

</body>
</html>