<?php require 'session.php';

						if(loggedin()) {
							$name=$_SESSION['name'];
							$email=$_SESSION['email'];
							$lastlogin=$_SESSION['last_login_time'];
						} else {
							header("Location: index.php");
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
<script type="text/javascript" src="scripts/jquery-1.8.2.min.js"></script>
<link rel="stylesheet" href="styles/mycss.css" type="text/css" />

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
    <?php
		require "connect.inc.php";
    	$sql_rank="select * from candidate_details where email='$email'";
		$result_rank=mysql_query($sql_rank);
		$row_rank= mysql_fetch_array($result_rank); /*$row_rank['rank']*/
		$rank=$row_rank['rank']." ";
		
		//echo $row_rank['rank'];
		$sql_1="select * from rank_details where rank='$rank'";
		$r1=mysql_query($sql_1);
		$rw1=mysql_fetch_array($r1);
		$enrolment_no=$rw1[1];
		
		$sql_pref_id="select * from candidate_preferences where rank='$rank'";
		$result_pref_id=mysql_query($sql_pref_id);
		$row_pref_id= mysql_fetch_array($result_pref_id); /*$row_pref_id['pref_1']*/
		$pref_1=$row_pref_id['pref_1'];
		$pref_2=$row_pref_id['pref_2'];
		$pref_3=$row_pref_id['pref_3'];
		//echo $row_pref_id['pref_1']."   ".$row_pref_id['pref_2']."   ".$row_pref_id['pref_3'];
		
		$sql_pref1_name="select * from college_details where college_cuid='$pref_1'";
		$result_pref1_name=mysql_query($sql_pref1_name);
		$row_pref1_name= mysql_fetch_array($result_pref1_name); /*$row_pref_id['pref_1']*/
		$pref_1_name=$row_pref1_name['college_name'];
		
		$sql_pref2_name="select * from college_details where college_cuid='$pref_2'";
		$result_pref2_name=mysql_query($sql_pref2_name);
		$row_pref2_name= mysql_fetch_array($result_pref2_name); /*$row_pref_id['pref_1']*/
		$pref_2_name=$row_pref2_name['college_name'];
		
		$sql_pref3_name="select * from college_details where college_cuid='$pref_3'";
		$result_pref3_name=mysql_query($sql_pref3_name);
		$row_pref3_name= mysql_fetch_array($result_pref3_name); /*$row_pref_id['pref_1']*/
		$pref_3_name=$row_pref3_name['college_name'];
		
		$sql_allot_clg="select * from seat_allotments where rank='$rank'";
		$result_allot_clg=mysql_query($sql_allot_clg);
		$row_allot_clg= mysql_fetch_array($result_allot_clg); /*$row_pref_id['pref_1']*/
		$clg_id=$row_allot_clg['allot_clg_id'];
		$seq_id=$row_allot_clg['seqnc_no'];
		
		
		$sql_clg_name="select * from college_details where college_cuid='$clg_id'";
		$result_clg_name=mysql_query($sql_clg_name);
		$row_clg_name= mysql_fetch_array($result_clg_name); /*$row_pref_id['pref_1']*/
		$clg_name=$row_clg_name['college_name'];
		
		
	?>
    
    
    <div id='content'>
    <?php
	require "phpToPDF.php" ;
    $cont1="
    <div id='allot' >
     <h2 align='center' style='color:#27408B;'>COUNSELLING ALLOTMENT STATUS</h2>
    
      </div>
	  <br>
      <div >
      	<p>This is a system generated seat allotment status result published under Automatic Counselling Mechanism and rules and regulation stated before.</p>
      </div>
	  <br>
	  <br>
      <div id='data'>
      <table summary='Summary Here' cellpadding='0' cellspacing='0'>
      	<tr>
        	<td style='width:165px;'><h3>Name</h3></td>
            <td align='right'> $name </td>
        </tr>
        <tr class='light'>
        	<td ><h3>Rank</h3></td>
            <td align='right'> $rank </td>
        </tr>
        <tr class='light'>
        	<td><h3>1st Preference</h3></td>
            <td align='right'> $pref_1_name </td>
        </tr>
        <tr class='light'>
        	<td><h3>2nd Preference</h3></td>
            <td align='right'>  $pref_2_name</td>
        </tr>
        <tr class='light'>
        	<td><h3>3rd Preference</h3></td>
            <td align='right'> $pref_3_name </td>
        </tr>
        <tr class='light'>
        	<td>
            	<h3>College Allocated</h3>
        	</td>
        	<td align='right'> $clg_name  </td>
        </tr>
		
      </table>
      </div>
	  <div>
	
	  </div>
    ";
	echo $cont1;
	echo "<br><br><br>";
	$var=$name."_".$rank.".pdf";
	//@phptopdf_html($cont1,'/seat_allocation_pdf/',$var1);
	$path="seat_allocation_pdf/$var";
	
	$pref=array("1st Preference","2nd Preference","3rd Preference","Allocated College","Secure Sequence");
	
	$pref_value=array($pref_1_name,$pref_2_name,$pref_3_name,$clg_name,$seq_id);
	
	require "create_result.php";
	$pdf = new PDF_result();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);
$pdf->SetY(100);

$pdf->Cell(105, 13, "Candidate Details");
$pdf->SetFont('Arial', '');

$pdf->Cell(250, 13, $name);

$pdf->SetFont('Arial', 'B');
$pdf->Cell(50, 13, "Date:");
$pdf->SetFont('Arial', '');
$pdf->Cell(100, 13, date('F j, Y, g:i a'), 0, 1);

$cand_rank="Rank: ".$rank;
$cand_enroll="Enrollment No: ".$enrolment_no;

$pdf->SetFont('Arial', 'I');
$pdf->SetX(140);
$pdf->Cell(200, 15, $email, 0, 2);
$pdf->Cell(200, 15, $cand_rank . ' , ' . $cand_enroll , 0, 2);
//$pdf->Cell(200, 15, $_POST['Country'], 0, 2);

$pdf->Ln(100);

$pdf->Generate_Table($pref, $pref_value);

$pdf->Ln(65);

$message = "Congratulation , you have successfully allocated seat in the above mentioned college/university .
For More Information Contact us at : ";

$pdf->MultiCell(0, 25, $message);
//$pdf->MultiCell(0, 15, $message);

$pdf->SetFont('Arial', 'U', 12);
$pdf->SetTextColor(1, 162, 232);

$pdf->Write(13, "admin@ecounselling.tk", "admin@ecounselling.tk");

$pdf->Output($path, 'F');

	?>
    <div id="mydiv">
    <?php
	$sql_status="select * from seat_allotments where rank='$rank'";
		$result_status=mysql_query($sql_status);
		$row_status= mysql_fetch_array($result_status);	        	        $status=$row_status['upgrd_sts'];
		$pref_clg=$row_status['pref_clg'];
		
		if($pref_clg=='')
		{
			echo "<p align='center' style='color:#039'>
	Sorry Counselling is Not DONE Yet. Please Visit 'Important Dates'
	</p>	";
		}
		else if($pref_clg==1)
		{
			echo "<p align='center'>
	<a href='$path' target='_blank' ><button style='background-color:#039; color:#FFF; font-size:18px'>Download Allotment Result</button></a></p>	";
		}
		else
		{
			if($status=='')
			{
				echo "<p align='center'>
	<a href='book.php?rank=$rank'><button id='book' style='background-color:#039; color:#FFF; font-size:18px'>Book Allotment</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
	<a href='upgrade.php?rank=$rank'><button id='upgrd' style='background-color:#039; color:#FFF; font-size:18px'>Upgrade</button></a>
	
	</p>	";
			}
			if($status=='N')
			{
				echo "<p align='center'>
	<a href='$path' target='_blank' ><button style='background-color:#039; color:#FFF; font-size:18px'>Download Allotment Result</button></a></p>	";
			}
			if($status=='Y')
			{
		echo "<p align='center' style='color:#039'>
	You Have Choose Upgrade Option. Please Wait for Next round Counselling.
	</p>	";
			}
			
		}
		
		
	?>
	
    </div>
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
				<a id="" href="change_candidate_password.php" class="pass_change">Change password</a>
				<a class="contact_change" href="change_candidate_contact.php">Change contact no</a>
                  <a href="report_candidate_problem.php">Report Problem</a>
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
          
        </ul>
      </div>
     
      <div class="subnav">
        <h2>Important Dates </h2>
        <marquee id="mark" scrollamount="3" direction="up">
                     <?php
		  include "connect.inc.php";
		 
		  $sql_event_time="SELECT * FROM counselling_date";
		  $result=mysql_query($sql_event_time);
		  while($row=mysql_fetch_row($result))
		  {
		  echo "<div>".$row[1]." ".$row[2]."</div>"."<br>";
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
<?php require 'preference.php' ?>
</body>
</html>