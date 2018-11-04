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
$query = "SELECT * FROM candidate_details order by rank ASC";
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
$query1 = "SELECT * FROM candidate_details order by rank ASC $limit";
$result1 = mysql_query($query1);
?>
    <h2>Candidate Details</h2> 
                    
                    
<table id="rounded-corner">
    <thead>
    	<tr>
        	<th></th>
            <th>Rank</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Contact No</th>
        </tr>
    </thead>
       
    <tbody>
    <?php
		while($row=mysql_fetch_array($result1))
		{
    	echo "<tr class='even'>
        	<td><input type='checkbox' name='' /></td>";
        echo "<td>".$row['rank']."</td>";
		echo "<td>".$row['candidate_name']."</td>";
		echo "<td>".$row['email']."</td>";
		echo "<td>".$row['address']."</td>";
		echo "<td>".$row['phone']."</td>";
            
        echo "</tr>";
		}
  ?>
        
    </tbody>
    <tfoot>
    	<tr align="center">
        	<td colspan="6" style="font-size:14px">
            <?php
if ($pageno == 1) 
	{
   		echo " FIRST PREV ";	
	} 
else 
	{
   		echo " <a href='#' onclick='candlist(1)'>FIRST</a> ";
   		$prevpage = $pageno-1;
   		echo " <a href='#' onclick='candlist($prevpage)'>PREV</a> ";
	}
	
	echo " ( Page $pageno of $lastpage ) ";
	
if ($pageno == $lastpage) 
	{
	   echo " NEXT LAST ";
	} 
else 
	{
   		$nextpage = $pageno+1;
   		echo " <a href='#' onclick='candlist($nextpage)'>NEXT</a> ";
   		echo " <a href='#' onclick='candlist($lastpage)'>LAST</a> ";
	}
?>            
            </td>
        </tr>
    </tfoot>
</table>

</div>

    	
</body>
</html>