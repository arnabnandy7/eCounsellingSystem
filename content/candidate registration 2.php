<?php
if(isset($_POST['reg_step1']))
{
	$enrolment_no=$_POST['eno'];
	$rank=$_POST['rank'];
	$dob=$_POST['birth'];
	$er='';
	require "connect.inc.php";
	$sql_valid1="select * from candidate_details where rank='$rank'";
	$result_valid1=mysql_query($sql_valid1);
	$count_valid1=mysql_num_rows($result_valid1);
	
	if($count_valid1 == 0)
	{
		require "connect.inc.php";
		$sql_valid2="select * from rank_details where rank='$rank' and enrolment_no='$enrolment_no' and dob='$dob'";
	$result_valid2=mysql_query($sql_valid2);
	$count_valid2=mysql_num_rows($result_valid2);
		if($count_valid2 == 0)
		{
			header("location: candidate registration 1.php?error=wronginformation");
		}
	}
	else
	{
		header("location: candidate registration 1.php?error=already_registered");
	}
}

elseif( !empty($_GET['rank']) && !empty($_GET['email']) && !empty($_GET['status']) )
{
//	echo "hello";
	/*echo "<script>alert('HELLO2');</script>";*/
	$rank=$_GET['rank'];
	$false_email=$_GET['email'];
	if($_GET['status']=='DOMAIN NOT VALID')
	{
		$er='emailnotvalid';
	}
	if($_GET['status']=='alreadyused')
	{
		$er='emailused';
	}
	else{}
}
else
{
	header("location: candidate registration 1.php");
}
?>
<?php

	require "connect.inc.php";
	$sql_fetch1="select * from rank_details where rank='$rank'";
	$result_fetch1=mysql_query($sql_fetch1);
	$count_fetch1=mysql_num_rows($result_fetch1);
	$row_fetch=mysql_fetch_array($result_fetch1);
	$cand_name=$row_fetch['candidate_name'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>MCA Online Counselling</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<link rel="stylesheet" href="styles/mycss.css" type="text/css" />
<link rel="stylesheet" href="styles/mybuttons.css" type="text/css" />
<link rel="stylesheet" href="styles/style.css" type="text/css" />
<script type="text/javascript" src="scripts/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="scrolleffect_home.js"></script>
<script type="text/javascript" src="scripts/jquery.leanModal.min.js"></script>
<!--<script type="text/javascript" src="scripts/ajaxpageload.js"></script>-->

<script type="text/javascript" src="scripts/candidate_registration2.js"></script>

 <script type="text/javascript">
      $(function () {
          $('#loginform').submit(function (e) {
              return false;
          });

          $('#modaltrigger').leanModal({ top: 110, overlay: 0.45, closeButton: ".hidemodal" });
		  
		 
      });
</script>
<!-- liteAccordion is Homepage Only -->
<link rel="stylesheet" href="scripts/liteaccordion-v2.2/css/liteaccordion.css" type="text/css" />

<script type="text/javascript">
   window.location.hash="no-back-button";
window.location.hash="Again-No-back-button";//again because google chrome don't insert first hash into history
window.onhashchange=function(){window.location.hash="no-back-button";}
</script>
<script type="text/javascript" language="javascript">
 
     $(function() {
 
            $(this).bind("contextmenu", function(e) {
 
                e.preventDefault();
 
            });
 
        }); 
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






<!-- ########################################     slide areaa      ############################################################### -->







<!-- ####################################################################################################### -->
<div class="wrapper row4">
  <div id="container" class="clear">
    <!-- ####################################################################################################### -->
    <div id="homepage" class="clear">
      <div class="fl_left">
        <h2 class="title">Quick Links</h2>
        <div id="hpage_quicklinks">
          <ul class="clear">
            <li><a href="#" onclick="javascript:void window.open('static/counselling_process.php','1389728149356',
'width=1480,height=1020,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0'
);return false;">Counselling Process</a></li>
            <li><a href="#" onclick="javascript:void window.open('static/eligibility_criteria.php','1389728149356',
'width=1480,height=1020,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0'
);return false;">Eligibility Criteria</a></li>
            <li><a href="#" onclick="javascript:void window.open('static/fees_payment.php','1389728149356',
'width=1480,height=1020,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0'
);return false;">Fees &amp; Payments</a></li>
            <li><a href="#" onclick="javascript:void window.open('static/document_required.php','1389728149356',
'width=1480,height=1020,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0'
);return false;">Document Information</a></li>
            <li><a href="#" onclick="javascript:void window.open('static/allotment_process.php','1389728149356',
'width=1480,height=1020,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0'
);return false;">Allotment Process</a></li>
            <li><a href="#" onclick="javascript:void window.open('static/faq.php','1389728149356',
'width=1480,height=1020,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0'
);return false;">Frequently Asked Questions</a></li>
          </ul>
        </div>
        <h2 class="title">Latest News</h2>
        <div id="hpage_gallery">
          <ul class="clear">
		  <marquee id="mark" scrollamount="5" direction="up">
                    <?php
		  include "connect.inc.php";
		  //include "dbcon.php";
		  $sql_news="SELECT * FROM notice order by id DESC";
		  $result=mysql_query($sql_news);
		  while($row=mysql_fetch_array($result))
		  {
		  echo "<p><a href='$row[6]'>$row[1]<img src='images/new.gif'></a></p>";
		  }

		  ?>
		   </marquee>
          </ul>
        </div>
       <div class="myline">
       </div>
      </div>
      <!-- ############### -->
     
      <div class="fl_right">
        <h2 class="title">Candidate Registration</h2>
		<form action = "registration2.php" method = "POST">
        <div id="outerregisteration" align="center" >
        <?php
		if($er=='emailnotvalid')
		{
       echo "<div id='errmsg' align='center' style='font-size:14px; color:#D90E11'>You have entered an emailid- <a href='#' style='color:#0E5CAF'>".$false_email."</a> whoose domain is not registered or not valid. Enter a Valid Email id.</div>";
		}
		elseif($er=='emailused')
		{
       echo "<div id='errmsg' align='center' style='font-size:14px; color:#D90E11'>You have entered an emailid- <a href='#' style='color:#0E5CAF'>".$false_email."</a> is already in use. Enter a different Valid Email id.</div>";
		}
		else{}
	   ?>
        <table id="registertable">
        	<tr>
            	<td>
                	 <h3 class="registerationh2"><label for="username"> Name:</label></h3><br />
                </td>
                <td>
                	<input type="text" class="textbox" id="name" name="name"  value="<?php echo $cand_name; ?>" align="right" required/>
                    <input type="hidden" id="rank" name="rank" value="<?php  echo @$rank; ?>" />
                </td>
                <td>
                	 <img src="images/tick.png" />
                </td>
                
            </tr>
            <tr>
            	<td>
                	 <h3 class="registerationh2"><label for="username"> Email Id:</label></h3>
                </td>
                <td>
                	<input type="text"  id="email" name="email" class="textbox" required autocomplete="off"/><br />
                    <label id = "label_email"></label>	
                </td>
                <td>
                <label id="label_img1"></label>
                </td>
            </tr>
            <tr>
            	<td>
                	 <h3 class="registerationh2"><label for="username">Password:</label></h3>
                </td>
                <td>
                	 <input type="password" id="pass" name="pass"  class="textbox"  required autocomplete="off"/><br />
                     <label id = "label_pass"></label>
                </td>
                <td>
                <label id="label_img2"></label>
                </td>
             </tr>
             <tr>
                <td>
                	 <h3 class="registerationh2"><label for="username">Retype Password:</label></h3>
                </td>
                <td>
                	 <input type="password" class="textbox" id="repass" name = "repass" required/><br />
					 <label id="label_repass"></label>
			    </td>
                <td>
                <label id="label_img3"></label>
                </td>
                
            </tr>
            
            <tr>
            	<td>
                	 <h3 class="registerationh2"><label for="username"> Address:</label></h3>
                </td>
                <td>
                	<textarea rows="4" cols="50" id="address" name="address" class="textbox" required></textarea><br />
                    <label id = "label_address"></label>
                	
                </td>
                <td>
                <label id="label_img4"></label>
                </td>
            
            </tr>
            <tr>
            	<td>
                	<h3 class="registerationh2"><label for="username">Contact:</label></h3>
                </td>
        
                <td>
                	<input type="text" size="3" value="+91" id="std" />
                	 <input type="text" class="dob" id="phone" name="phone" maxlength = "10" required/><br />
                     <label id = "label_phone"></label>
                </td>
                <td>
                <label id="label_img5"></label>
                </td>
            </tr>
            
         </table>
        
          
        
        </div> 
        <!-- <a href="candidate registration 3.html" class="registerlink" style="color: #ffffff">Next</a> -->
      		<!--<div id="hoverdiv"></div>-->
            <div id="hoverdiv"></div>
         <input type="submit" class="registerbutton" id="reg_step2" name="reg_step2"  value="Next" hovertext="FILL ALL FEILD TO PROCEED"/>
         
		 </form>
          
     
      </div>
    </div>
   
    <!-- ####################################################################################################### -->
    
   <div id ="extream_right">
     <ul >
            
            
            <li class="last" style="list-style: none;">
              <h2 class="title">Important Dates with Timing</h2>
              <div class="box">
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
              
            </li>
            <li style="list-style: none;">
             <div class="myline">
				</div>
            </li>
          </ul>
      <!-- ####################################################################################################### -->
    </div>
   
	<div id="hpage_specials" class="clear">
          
        </div>
      <!-- ####################################################################################################### -->
      
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
<!-- liteAccordion is Homepage Only -->
<script type="text/javascript" src="scripts/liteaccordion-v2.2/js/liteaccordion.jquery.min.js"></script>
<script type="text/javascript">
$("#featured_slide").liteAccordion({
    theme: "os-tpl",
	
    containerWidth: 960, // fixed (px)
    containerHeight: 360, // fixed (px) - overall height of the slider
    headerWidth: 48, // fixed (px) - slide spine title

    firstSlide: 1, // displays slide (n) on page load
	activateOn: "click", // click or mouseover
    autoPlay: false, // automatically cycle through slides
    pauseOnHover: true, // pause slides on hover
    rounded: false, // square or rounded corners
    enumerateSlides: true, // put numbers on slides

    slideSpeed: 800, // slide animation speed
    cycleSpeed: 6000, // time between slide cycles
});
</script>
</body>
</html>