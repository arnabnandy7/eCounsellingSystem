<?php
require 'connect.inc.php';

@$er=$_FILES["file"]["error"];
@$fn=$_FILES["file"]["name"];
@$ft=$_FILES["file"]["type"];
@$fs=$_FILES["file"]["size"];
@$ftn=$_FILES["file"]["tmp_name"];
$allowedExts = array("pdf");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
$fpath=getcwd()."/upload/";
if (!is_dir($fpath)) 
{
	mkdir($fpath, 0777, true);
}
$fpath="http://admin.ecounselling.tk/files/upload/".$fn;
if ($ft == "application/pdf" && in_array($extension, $allowedExts))
{
	if ( $er > 0)
	  {
	  echo "Error: " . $er . "<br>";
	  }
	else
	  {
	  echo "Upload: " . $fn . "<br>";
	  echo "Type: " . $ft . "<br>";
	  echo "Size: " . ( $fs / 1024) . " kB<br>";
	  echo "Stored in: " . $ftn ;
			if (file_exists("files/upload/" . $fn))
			{
				echo $fn . " already exists. ";
			}
			else
			{
				move_uploaded_file($ftn,"files/upload/" . $fn);
				echo "<br>";
				echo "Stored in: " . "files/upload/" . $fn;
				echo "<br>";
			}
	  }
	  $query = "insert into notice (title, subject, name, type, size, path) values('".$_REQUEST["ttl"]."','".$_REQUEST["ta"]."','".$fn."','".$ft."','".$fs."','".$fpath."')";
	  $query_run = mysql_query($query);
	  echo $query;
	  header('Location: index.php');
}
else
{
	echo "Invalid file";
	header('Location: index.php?error=4');
}
?>