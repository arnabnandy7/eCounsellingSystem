<?php
require 'connect.inc.php';

$sql="update rank_details set enrolment_no='".$_REQUEST[eno]."' where rank='".$_REQUEST[rank]."'";
$rs=mysql_query($sql);
$sql="update rank_details set candidate_name='".$_REQUEST[name]."' where rank='".$_REQUEST[rank]."'";
$rs=mysql_query($sql);
$sql="update rank_details set dob='".$_REQUEST[dob]."' where rank='".$_REQUEST[rank]."'";
$rs=mysql_query($sql);
$sql="update rank_details set rank='".$_REQUEST[rank]."' where rank='".$_REQUEST[rank]."'";
$rs=mysql_query($sql);

header('Location: index.php');
?>