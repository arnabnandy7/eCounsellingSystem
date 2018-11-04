<?php
//require 'connect.inc.php';
session_start();

function loggedin() {
	if(isset($_SESSION['name']) && !empty($_SESSION['name'])) {
		return true;
	} else {
		return false;
	}
}

?>