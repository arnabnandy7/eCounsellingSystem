<?php
require 'connect.inc.php';

$rank = $_GET['rank'];
$name=$_GET['name'];
	
		header("Location: candidate registration 2.php?rank1=".$rank."&name1=".$name);
?>