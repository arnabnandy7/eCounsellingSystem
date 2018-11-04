<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin | ecounselling</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<!-- jQuery file -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.tabify.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>

  	
	<div class="center_content">  
<?php
 require "connect.inc.php";   
$query1 = "SELECT * FROM counselling_date";
$result1 = mysql_query($query1);
?>
    <h2>News</h2> 
                    
                    
<table id="rounded-corner">
    <thead>
    	<tr>
        	<th></th>
            <th>Event</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
    <?php
		while($row=mysql_fetch_array($result1))
		{
    	echo "<tr class='even'>
        	<td><input type='checkbox' name='' /></td>";
        echo "<td>".$row['1']."</td>";
		echo "<td>".$row['2']."</td>";
		echo "<td><a href='#' onclick='editnewsdetails($row[0])'>
		<img src='images/edit.png'>
		</a>&nbsp;&nbsp;&nbsp;<a href='deletenews.php?id=$row[0]'>
		<img src='images/logout.png'>
		</a></td>";
        echo "</tr>";
		}
  ?>
        
    </tbody>
</table>

</div>

    	
</body>
</html>