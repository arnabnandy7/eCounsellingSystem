<?php
if(!empty($_GET['error']))
{
	$error="invalidlogin";
}
else
{
	$error='';
}
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
<script type="text/javascript" src="scripts/ajaxpageload.js"></script>
<script type="text/javascript" src="scripts/loginajax.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#add_err").css('display', 'none', 'important');
	$("#add_succ").css('display', 'none', 'important');
	 $("#loginbtn").click(function(){	
		  username=$("#username").val();
		  password=$("#password").val();
		  $.ajax({
		   type: "POST",
		   url: "check_login.php",
			data: "email="+username+"&pwd="+password,
		   success: function(html){    
			if(html=='true')    {
			 //$("#add_err").html("right username or password");
			 window.location="candidate_home.php";
			}
			else    {
				$("#add_succ").hide();
			 $("#add_err").css('display', 'inline', 'important');
			 $("#add_err").html("<img src='images/xxmarks.jpg' align='center'/>Wrong username or password");
			 $("#add_succ").hide();
			}
		   },
		   beforeSend:function()
		   {
			$("#add_err").hide();
			$("#add_succ").delay(15000); 
			$("#add_succ").css('display', 'inline', 'important', 'delay:25s');
			$("#add_succ").html("<img src='images/loading.gif' /> Validating...");
			
		   }
		  });
		return false;
	});
});
</script>
<script type="text/javascript">
$(document).ready(function(e) {
    $('#msg').fadeIn(3000).delay(3000).fadeOut(3000);
	var name = GetParameterValues('name');
	if(name !=""){
		$('#modaltrigger').leanModal({ top: 110, overlay: 0.45, closeButton: ".hidemodal" });
		}
});
</script>
 <script type="text/javascript">
      $(function () {
          $('#loginform').submit(function (e) {
              return false;
          });

          $('#modaltrigger').leanModal({ top: 110, overlay: 0.45, closeButton: ".hidemodal" });
      });  
	  
	  
	  function GetParameterValues(param) {
var url = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
for (var i = 0; i < url.length; i++) {
var urlparam = url[i].split('=');
if (urlparam[0] == param) {
return urlparam[1];
}
}
}

function openInfoPage(url) {
    var width = Math.min(1480, window.screen.availWidth || 1480);
    var height = Math.min(1020, window.screen.availHeight || 1020);
    var popup = window.open(
        url,
        '_blank',
        'width=' + width + ',height=' + height + ',toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0'
    );

    if (popup) {
        popup.focus();
        return false;
    }

    return true;
}
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
      <li class="active"><a href="index.php">Homepage</a></li>
      <li><a href="static/counselling_overview.html" target="_blank" onclick="return openInfoPage(this.href);">Over View</a></li>
      <li><a href="static/counselling_rules.html" target="_blank" onclick="return openInfoPage(this.href);">Counselling Rules</a></li>
      <li><a href="#">Participating Institutions</a>
        <ul>
          <li><a href="static/govt_college.php" target="_blank" onclick="return openInfoPage(this.href);">Goverment Institutions</a></li>
          <li><a href="static/semi_govt_college.php" target="_blank" onclick="return openInfoPage(this.href);">Semi Goverment Institutions</a></li>
          <li><a href="static/self_finance_college.php" target="_blank" onclick="return openInfoPage(this.href);">Self-Financed Institutions</a></li>
        </ul>
      </li>
      <li><a href="counselling_schedule.php" target="_blank" onclick="return openInfoPage(this.href);">Counselling Schedules</a></li>
      <li class="last"><a href="gallery.php">Demo Counselling</a></li>
    </ul>
    <div  class="clear"></div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div id="featured_slide">
    <!-- ####################################################################################################### -->
    <ol>
      <li>
        <h2><span>Welcome</span></h2>
        <div><img src="images/demo/featured-slide/00.jpg" alt="" /></div>
      </li>
      <li>
        <h2><span>Upcomming Counsellings</span></h2>
        <div><img src="images/demo/featured-slide/11.jpg" alt="" /></div>
      </li>
      <li>
        <h2><span>Admission</span></h2>
        <div><img src="images/demo/featured-slide/12.jpg" alt="" /></div>
      </li>
      <li>
        <h2><span>Completely Reliable</span></h2>
        <div><img src="images/demo/featured-slide/14.jpg" alt="" /></div>
      </li>
      <li>
        <h2><span>Your Preference</span></h2>
        <div><img src="images/demo/featured-slide/15.jpg" alt="" /></div>
      </li>
    </ol>
    <button type="button" class="carousel_control carousel_previous" aria-label="Previous slide">&#10094;</button>
    <button type="button" class="carousel_control carousel_next" aria-label="Next slide">&#10095;</button>
    <!-- ####################################################################################################### -->
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row4">
  <div id="container" class="clear">
  <?php 
 if($error=="invalidlogin")
  {
	echo "<div id='msg' align='center' style='color:#C00; font-size:18px'>! Sorry Login Invalid !</div>";  
  }
  ?>
    <!-- ####################################################################################################### -->
    <div id="homepage" class="clear">
      <div class="fl_left">
        <h2 class="title">Quick Links</h2>
        <div id="hpage_quicklinks">
          <ul class="clear">
            <li><a href="static/counselling_process.php" target="_blank" onclick="return openInfoPage(this.href);">Counselling Process</a></li>
            <li><a href="static/eligibility_criteria.php" target="_blank" onclick="return openInfoPage(this.href);">Eligibility Criteria</a></li>
            <li><a href="static/fees_payment.php" target="_blank" onclick="return openInfoPage(this.href);">Fees &amp; Payments</a></li>
            <li><a href="static/document_required.php" target="_blank" onclick="return openInfoPage(this.href);">Document Information</a></li>
            <li><a href="static/allotment_process.php" target="_blank" onclick="return openInfoPage(this.href);">Allotment Process</a></li>
            <li><a href="static/faq.php" target="_blank" onclick="return openInfoPage(this.href);">Frequently Asked Questions</a></li>
          </ul>
        </div>
        <h2 class="title">Latest News</h2>
        <div id="hpage_gallery">
          <ul class="clear">
		  <marquee id="mark" scrollamount="2" direction="up">
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
	  
        <h2 class="title">ABOUT E-COUNSELLING SYSTEM </h2>
        
          <p align="justify">The West Bengal Joint Entrance Examinations Board was formed in the year 1962 for the purpose of holding Common Entrance Examinations for the Undergraduate Level Engineering Courses in the State of West Bengal . This year, the Board has stepped into its Golden Jubilee year. Since last year, the endeavour of the Board has been to enhance the standard of transparency in conducting Common Entrance Examinations for various professional Undergraduate and Postgraduate level courses in the State through effective state-of-the-art technology. Admission through e-Counselling was successfully implemented to admit candidates in the undergraduate level courses in the Engineering & Technological Institutes of the State for the academic year 2012 - 2013.
For the 2013 - 2014 academic session, the Board will conduct the Common Entrance Examination along with counselling for admission to Undergraduate Courses in Engineering & Technology, Pharmacy and Architecture in Universities, Govt. Colleges and Self-Financed Institutes in the State.
The Office of the Board functions from AQ-13/1, Sector-V, Salt Lake City, Kolkata-700 091.More Information..</p>
        
        
      </div>
    </div>
    <!-- ####################################################################################################### -->
    <div id ="extream_right">
     <h2 class="title">Login Section</h2>
    <div id="logins">
    <a href="candidate registration 1.php" class="loginbutton" style="color: #ffffff">New User Register Here</a>
     <div id="modalbutton">
    <a href="#loginmodal" class="loginbutton" id="modaltrigger" style="color: #ffffff">Sign In</a>
    
    </div>
    </div>
  		<div align="center"><label ><a href="forgot_password.php">Forgot password?</a></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label><a href="trouble_signin.php">Trouble Sign Isn?</a></label></div>
        
     
      <!-- ########################################### LOGIN POP UP ################################################# -->
    <div id="loginmodal" style="display:none;">
    <h1>Candidate Login</h1>
    <div id="add_err" align="center" style="font-size:16px; color:#D90E11; margin:0 0 0 80px"></div>
     <div id="add_succ" align="center" style="font-size:16px; color:#1C64AF; margin:0 0 0 125px"></div>
       <form  method="post" action="" >
      <h3><label for="username">E-mail ID:</label></h3>
       <input type="email" name="username" id="username" class="txtfield" tabindex="1"  />
     <h3><label for="lname">Password:</label></h3>
    <input type="password" id="password" name="password" class="txtfield"  tabindex="2" />
    <div class="center"> <input type="submit"  name="loginbtn" id="loginbtn" 
              class="flatbtn-blu" value="Sign In" tabindex="3" /></div>
    </form>
  </div>
      <!-- ####################################################################################################### -->
    </div>
   
	<div id="hpage_specials" class="clear">
          <ul>
            
            
            <li class="last">
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
            <li>
             <div class="myline">
       </div>
            </li>
          </ul>
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
        <li><a href="/admin/login.php" target="new">Login</a></li>
        <li><a href="#">Freedom of Information</a></li>
        <li><a href="#">Website Privacy</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Institute Area</h2>
      <ul>
        <li><a href="/collegearea/" target="new">Universities and Colleges</a></li>
        <li><a href="/collegearea/" target="new">Institute Login</a></li>
        <li><a href="#">Counselling Activities</a></li>
        <li class="last"><a href="/admin/login.php" target="new">Counsil Area</a></li>
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
<script type="text/javascript">
(function () {
    var carousel = document.getElementById('featured_slide');
    var slides = carousel ? carousel.querySelectorAll('ol > li') : [];
    var current = 0;
    var timer;

    if (!slides.length) {
        return;
    }

    carousel.className += ' carousel_ready';

    function showSlide(index) {
        for (var i = 0; i < slides.length; i++) {
            slides[i].className = i === index ? 'active' : '';
            slides[i].setAttribute('aria-hidden', i === index ? 'false' : 'true');
        }
        current = index;
    }

    function restart() {
        window.clearInterval(timer);
        timer = window.setInterval(function () {
            showSlide((current + 1) % slides.length);
        }, 6000);
    }

    carousel.querySelector('.carousel_previous').onclick = function () {
        showSlide((current + slides.length - 1) % slides.length);
        restart();
    };
    carousel.querySelector('.carousel_next').onclick = function () {
        showSlide((current + 1) % slides.length);
        restart();
    };

    showSlide(0);
    restart();
}());
</script>
</body>
</html>
