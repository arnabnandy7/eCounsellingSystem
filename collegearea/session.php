<?php
require_once 'connect.inc.php';
require_once dirname(__DIR__) . '/includes/auth.php';

if (session_status() !== PHP_SESSION_ACTIVE) {
	session_start();
}

function loggedin() {
	return auth_has_role('college');
}

?>
