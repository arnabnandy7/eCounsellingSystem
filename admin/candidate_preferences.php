<?php 
if (isset($_GET['pageno']))
	{
   		$pageno = $_GET['pageno'];
	}
else 
	{
   		$pageno = 1;
	}
?>
<?php
require "connect.inc.php";   
$query = "SELECT * FROM candidate_preferences order by rank ASC";
$result = mysql_query($query);
$numrows = mysql_num_rows($result);

$rows_per_page = 10;
$lastpage      = ceil($numrows/$rows_per_page);

$pageno = (int)$pageno;
if ($pageno > $lastpage)
	{
   		$pageno = $lastpage;
	}
if ($pageno < 1) 
	{
   		$pageno = 1;
	}
?>

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
<script type="text/javascript" src="required/js/ajaxcall.js">
</script>
</head>
<body>

  	
	<div class="center_content">  
<?php
 require "connect.inc.php";   
 $limit = 'LIMIT ' .($pageno - 1) * $rows_per_page .',' .$rows_per_page;
$query1 = "SELECT * FROM candidate_preferences order by rank ASC $limit";
$result1 = mysql_query($query1);
?>
    <h2>Candidate College Preference</h2> 
                    
                    
<table id="rounded-corner">
    <thead>
    	<tr>
        	
            <th>Rank</th>
            <th>Name</th>
            <th>Preference 1</th>
            <th>Preference 2</th>
            <th>Preference 3</th>
        </tr>
    </thead>
       
    <tbody>
    <?php
		while($row=mysql_fetch_array($result1))
		{
    	echo "<tr class='even'>";
        echo "<td>".$row['rank']."</td>";
		$query2 = "SELECT * FROM rank_details where rank=$row[rank]";
		$result2 = mysql_query($query2);
		$row2=mysql_fetch_array($result2);
		echo "<td>".$row2['candidate_name']."</td>";
		$query3 = "SELECT * FROM college_details where college_cuid=$row[pref_1]";
		$result3 = mysql_query($query3);
		$row3=mysql_fetch_array($result3);
		echo "<td>".$row3['college_name']." [ ".$row['pref_1']." ]"."</td>";
		
		$query4 = "SELECT * FROM college_details where college_cuid=$row[pref_2]";
		$result4 = mysql_query($query4);
		$row4=mysql_fetch_array($result4);
		echo "<td>".$row4['college_name']." [ ".$row['pref_2']." ]"."</td>";
		
		$query5 = "SELECT * FROM college_details where college_cuid=$row[pref_3]";
		$result5 = mysql_query($query5);
		$row5=mysql_fetch_array($result5);
		echo "<td>".$row5['college_name']." [ ".$row['pref_3']." ]"."</td>";
            
        echo "</tr>";
		}
  ?>
        
    </tbody>
    <tfoot>
    	<tr align="center">
        	<td colspan="5" style="font-size:14px">
            <?php
if ($pageno == 1) 
	{
   		echo " FIRST PREV ";	
	} 
else 
	{
   		echo " <a href='#' onclick='candpref(1)'>FIRST</a> ";
   		$prevpage = $pageno-1;
   		echo " <a href='#' onclick='candpref($prevpage)'>PREV</a> ";
	}
	
	echo " ( Page $pageno of $lastpage ) ";
	
if ($pageno == $lastpage) 
	{
	   echo " NEXT LAST ";
	} 
else 
	{
   		$nextpage = $pageno+1;
   		echo " <a href='#' onclick='candpref($nextpage)'>NEXT</a> ";
   		echo " <a href='#' onclick='candpref($lastpage)'>LAST</a> ";
	}
?>            
            </td>
        </tr>
    </tfoot>
</table>

</div>

    	
</body>
</html>