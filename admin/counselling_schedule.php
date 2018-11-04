<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin | ecounselling</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link href='http://fonts.googleapis.com/css?family=Belgrano' rel='stylesheet' type='text/css'>
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
</style>
<!-- jQuery file -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.tabify.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
var $ = jQuery.noConflict();
$(function() {
$('#tabsmenu').tabify();
$(".toggle_container").hide(); 
$(".trigger").click(function(){
	$(this).toggleClass("active").next().slideToggle("slow");
	return false;
});
$(window).load(function() {
	$(".loader").delay(1000).fadeOut("slow");
})
});
</script>
</head>
<body>

  	
	<div class="center_content">  
<?php
 require "connect.inc.php";   
$query1 = "SELECT * FROM counselling_date";
$result1 = mysql_query($query1);
?>
    <h2>Counselling Schedule</h2> 
                    
                    
<table id="rounded-corner">
    <thead>
    	<tr>
        	<th></th>
            <th>Event</th>
            <th>Date</th>
        </tr>
    </thead>
       <tfoot>
    	<tr align="center">
        	<td colspan="3" style="font-size:16px; color:#CC0033">For Add or Edit Schedule Use News Panel. </td>
        </tr>
    </tfoot>
    <tbody>
    <?php
		while($row=mysql_fetch_array($result1))
		{
    	echo "<tr class='even'>
        	<td><input type='checkbox' name='' /></td>";
        echo "<td>".$row['1']."</td>";
		echo "<td>".$row['2']."</td>";
        echo "</tr>";
		}
  ?>
        
    </tbody>
</table>

</div>

    	
</body>
</html>