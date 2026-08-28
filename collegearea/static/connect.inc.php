<?php
require_once dirname(__DIR__, 2) . '/includes/turso_mysql_compat.php';

if (!mysql_connect() || !mysql_select_db('ecounselling')) {
	die('Could not connect.');
}
?>
