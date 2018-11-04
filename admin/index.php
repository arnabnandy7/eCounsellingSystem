<?php
session_start();
if ($_SESSION['userlogged']!="1")
{
	header("location:login.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin | ecounselling</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link href='http://fonts.googleapis.com/css?family=Belgrano' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/jquery-ui-1.10.4.custom.css" type="text/css" />
<style>
.loader {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url('images/loadingAnimation.gif') 50% 50% no-repeat rgb(249,249,249);
}
.ui-dialog{
	background:#FFFFFF;
	color:#666666;
	font-size:14px;
}
.ui-dialog .ui-dialog-titlebar{
	background:#003366;
}

</style>
<!-- jQuery file -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.tabify.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="js/jquery-ui-1.10.4.custom.js"></script>

<script type="text/javascript">
var $ = jQuery.noConflict();
$(function() {
$('#tabsmenu').tabify();
$(".toggle_container").hide();
$(".trigger").click(function(){
	$(this).toggleClass("active").next().slideToggle("slow");
	return false;
});
$("#box").hide();
$("#e1").click(function(){
	 $('#box').dialog({
		show:'bounce',
		hide:'explode'
		});
});
$("#c1").click(function(){
	//$('#box').fadeOut(2000);
	$('#box').dialog('close');
	});
$(window).load(function() {
	$(".loader").delay(5000).fadeOut("slow");
})
});
</script>
<script type="text/javascript" src="required/js/ajaxcall.js"></script>
<script src="js/valid_rank_entry.js" type="text/javascript"></script>
<script src="js/valid_college_entry.js" type="text/javascript"></script>
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

<body>
<div class="loader"></div>
<div id="panelwrap">
  	
	<div class="header">
    <div class="title" style="font-size:18px; color:#06F"><a href="#"><img src="images/logo.jpg" width="188" height="55"/> 
    <br /><label style="padding-left:45px"><u>Admin Context</u></label></a></div>
    
    <div class="header_right">Welcome Admin, <a href="#" onclick="changepass()"><img src="images/settings.png" />Change Password</a> <a href="logout.php"><img src="images/logout.png" />Logout</a> </div>
    
    <div class="menu">
    <ul>
    <li><a href="index.php" class="selected">Admin Home</a></li>
    <li><a href="http://ecounselling.tk/collegearea/" target="new">View College Area</a></li>
    <li><a href="http://ecounselling.tk" target="new">View Main Site</a></li>
    <li><a  id="e1" href="#">E-mail Service</a></li>
    </ul>
    </div>
    
    </div>
    
    <div class="submenu">
    <ul>
    <li><a href="index.php" class="selected">Home</a></li>
    </ul>
    </div>          
                    
    <div class="center_content">  
 
    <div id="right_wrap">
    <div id="right_content">             
    
	
    <ul id="tabsmenu" class="tabsmenu">
        <li class="active"><a href="#tab1">Admin Profile</a></li>
    </ul> 
        <div class="toogle_wrap" id="tb1">
            <div class="trigger"><a href="#" style="font-size:12px"><?php echo $_SESSION['name'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;View Details</a></div>

            <div class="toggle_container">
			<p>
        Login From: &nbsp;&nbsp;&nbsp;<a href="#"><?php echo $_SESSION['admin_id']; ?></a><br>
        Last Login: &nbsp;&nbsp;&nbsp;<a href="#"><?php echo $_SESSION['lastloggedtime']; ?></a><br>
			</p>
            </div>
            </div>
              <ul id="tabsmenu" class="tabsmenu">
        <li class="active" id="tab2"><a href="#tab1">Important&nbsp;<img src="images/404-logo.png" width="36" height="25" /></a></li>
    </ul>   
    <div class="toogle_wrap" id="tb1">
            <div class="trigger"><a href="#" style="font-size:12px">View</a></div>

            <div class="toggle_container">
			<p><h2 align="center">Loggin to Email Service for quick suuport.!</h2></p>
            </div>
            </div>
                 <div id="d1">
                 
                 </div>
     </div>


     </div><!-- end of right content-->
                     
                    
    <div class="sidebar" id="sidebar">
    <h2>Candidate Panel</h2>
    
        <ul>
            <li><a href="#" class="selected" onclick="candlist(1)">Candidate Details</a></li>
            <li><a href="#" onclick="loadXMLDoc()" >ADD New Rank</a></li>
            <li><a href="#" onclick="rankpage(1)">Rank Details</a></li>
            <li><a href="#" onclick="candpref(1)">Canidate Preferences</a></li>
            <li><a href="#" onclick="contactcandidate()">Quick Contact</a></li>
        </ul>
        
    <h2>College Panel</h2>
    
        <ul>
            <li><a href="#" onclick="clglist(1)">College Details</a></li>
            <li><a href="#" onclick="clgadd()">ADD New College</a></li>
            <li><a href="#">Quick Contact</a></li>
        </ul> 
        
    <h2>Counselling Panel</h2>
    
        <ul>
            <li><a href="#" onclick="counsellingschedule()">Counselling Schedule</a></li>
            <li><a href="#" onclick="startcounselling()">Start Counselling</a></li>
            <li><a href="#" onclick="counsellingallotments(1)">Counselling Allotments</a></li>
            <li><a href="#" onclick="admissionstatus()">Admission Status</a></li>
        </ul>
        
    <h2>News & Notice Panel</h2>
    
        <ul>
            <li><a href="#" onclick="newsdetails()">News Details</a></li>
            <li><a href="#" onclick="addnews()">Add News</a></li>
            <li><a href="#" onclick="noticelist()">Notice Details</a></li>
            <li><a href="#" onclick="noticeadd()">Add Notice</a></li>
        </ul>       
         
    <h2>Current Login Details</h2> 
    <div class="sidebar_section_text">
    <?php include "required/get_browser_info.php"; ?>
    <?php include "required/ip.php"; ?>
    <p>IP Address:- <a href="#"><?php $ip=get_client_ip(); 
	echo $ip; ?></a></p>
    <p>Browser:- <a href="#"><?php echo $brw['name']." ".$brw['version']?></a></p>
    <p>Logged In Time:- <a href="#"><?php echo $_SESSION['currentloggedtime']; ?></a></p>
    </div>         
    </div>             
    <div id="box" title="Important !" align="center">
        <p align="center" style="font-size:18px">You are going to login</p><a style="text-decoration:underline;font-size:16px">admin@ecounselling.tk</a><p align="center" style="font-size:18px">Please Keep Confidentiality.!</p>
<div align="center"><a href="https://mail.live.com/" target="new"><button id="c1" style="background:#3399CC; color:#FFF; font-size:16px">Continue</button></a></div> 
</div>



    
    <div class="clear"></div>
    </div> <!--end of center_content-->
    
    <div class="footer">
Design & Developed by<a href="htpp://csstemplatesmarket.com" target="_blank">&nbsp;&nbsp;&nbsp;Arnab Nilotpol Subhrajyoti Suman</a>
</div>

</div>

    	
</body>
</html>