<?php
$conn_error='Could not connect.';

$mysql_host = "mysql6.000webhost.com";
$mysql_db = "a1393332_ecounse";
$mysql_user = "a1393332_ecounse";
$mysql_password = "sdetbgi2013";


/*$mysql_host='localhost';
$mysql_user='root';
$mysql_password='2014';

$mysql_db='ecounselling';*/

if(!@mysql_connect($mysql_host,$mysql_user,$mysql_password) || !@mysql_select_db($mysql_db)){
	die($conn_error);
}
?>