<?php
require 'connect.inc.php';
require_once dirname(__DIR__) . '/includes/counselling_service.php';

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
if (empty($_SESSION['userlogged']) || empty($_SESSION['admin_id'])) {
    http_response_code(403);
    exit('Administrator authentication required.');
}

if (isset($_POST['refresh'])) {
    mysql_query('UPDATE college_details SET seat1=seat2');
    mysql_query("UPDATE seat_allotments SET active='' WHERE pref_clg=1");
    $event = 'Round two counselling is in processing. Please check again shortly.';
    mysql_query("INSERT INTO counselling_date VALUES (NULL,'$event','')");
    header('Location: index.php');
    exit;
}

if (isset($_POST['button_start_counselling'])) {
    counselling_run_second_round();
    header('Location: index.php');
    exit;
}

header('Location: index.php');
exit;
