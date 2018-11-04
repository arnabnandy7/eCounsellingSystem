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
$query1 = "SELECT * FROM notice";
$result1 = mysql_query($query1);
?>
    <h2>Notice Details</h2> 
                    
                    
<table width="81%" height="39" id="rounded-corner">
    <thead>
    	<tr>
            <th width="39%" height="33">Title</th>
            <th width="27%">Subject</th>
            <th width="16%">Name</th>
            <th width="18%">Action</th>
        </tr>
    </thead>
       
    <tbody>
    <?php
		while($row=mysql_fetch_array($result1))
		{
    	echo "<tr class='even'>";
        echo "<td>".$row['title']."</td>";
		echo "<td>".$row['subject']."</td>";
		echo "<td>".$row['name']."</td>";
        echo "<td align='left'><a href='delnotice.php?id=$row[id]'>
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