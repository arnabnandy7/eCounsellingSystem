<?php
$uname = isset($_REQUEST['eno']) ? $_REQUEST['eno'] : '';
$pass = isset($_REQUEST['name']) ? $_REQUEST['name'] : '';
if($uname=="admin" and $pass=="admin")
{
	if (session_status() !== PHP_SESSION_ACTIVE) {
		session_start();
	}
	$_SESSION['userlogged'] = 1;
	header('Location: /admin/');
	exit;
}
else{
	header('Location: index.php?error=2');
	exit;
}
