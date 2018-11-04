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
$query = "SELECT * FROM seat_allotments order by rank ASC";
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
$query1 = "SELECT * FROM seat_allotments order by rank ASC $limit";
$result1 = mysql_query($query1);
?>
    <h2>Candidate Admission status</h2> 
                    
                    
<table id="rounded-corner">
    <thead>
    	<tr>
        	
            <th>Rank</th>
            <th>Name</th>
            <th>Alloted College</th>
            
            <th>Preference No</th>
            <th>Status</th>
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
		$query3 = "SELECT * FROM college_details where college_cuid=$row[allot_clg_id]";
		$result3 = mysql_query($query3);
		$row3=mysql_fetch_array($result3);
		echo "<td>".$row3['college_name']."</td>";
		$query4 = "SELECT * FROM college_details where college_cuid=$row[pref_clg]";
		
	    echo "<td>".$row['pref_clg']."</td>";
		if($row['admited']=='Y')
		{
			$status="Admited";
		}
		else
		{
			if($row['upgrd_sts']=='Y')
			{
				$status="Upgraded";
			}
			else
			{
				$status="NIL";
			}
		}
		echo "<td>".$status."</td>";
            
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
   		echo " <a href='#' onclick='admissionstatus(1)'>FIRST</a> ";
   		$prevpage = $pageno-1;
   		echo " <a href='#' onclick='admissionstatus($prevpage)'>PREV</a> ";
	}
	
	echo " ( Page $pageno of $lastpage ) ";
	
if ($pageno == $lastpage) 
	{
	   echo " NEXT LAST ";
	} 
else 
	{
   		$nextpage = $pageno+1;
   		echo " <a href='#' onclick='admissionstatus($nextpage)'>NEXT</a> ";
   		echo " <a href='#' onclick='admissionstatus($lastpage)'>LAST</a> ";
	}
?>            
            </td>
        </tr>
    </tfoot>
</table>

</div>

    	
</body>
</html>