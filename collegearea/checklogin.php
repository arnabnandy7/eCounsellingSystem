<?php
@$uname=$_REQUEST[eno];
@$pass=$_REQUEST[name];
if($uname=="admin" and $pass=="admin")
{
	session_start();
	$_SESSION[userlogged]=1;
	header('Location: /admin/');
}
else{
	header('Location: index.php?error=2');
}
	//header('Location: delete.php?rank='.$r.'');
?>