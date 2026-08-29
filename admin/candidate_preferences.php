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
$query = "SELECT COUNT(*) AS total FROM candidate_preferences";
$result = mysql_query($query);
$countRow = $result ? mysql_fetch_array($result) : false;
$numrows = $countRow ? (int) $countRow['total'] : 0;

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
$query1 = "SELECT p.rank, r.candidate_name, p.pref_1, p.pref_2, p.pref_3, "
    . "c1.college_name AS pref_1_name, c2.college_name AS pref_2_name, c3.college_name AS pref_3_name "
    . "FROM candidate_preferences p "
    . "JOIN rank_details r ON r.rank=p.rank "
    . "JOIN college_details c1 ON c1.college_cuid=p.pref_1 "
    . "JOIN college_details c2 ON c2.college_cuid=p.pref_2 "
    . "JOIN college_details c3 ON c3.college_cuid=p.pref_3 "
    . "ORDER BY p.rank ASC $limit";
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
		echo "<td>".$row['candidate_name']."</td>";
		echo "<td>".$row['pref_1_name']." [ ".$row['pref_1']." ]"."</td>";
		echo "<td>".$row['pref_2_name']." [ ".$row['pref_2']." ]"."</td>";
		echo "<td>".$row['pref_3_name']." [ ".$row['pref_3']." ]"."</td>";
            
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
