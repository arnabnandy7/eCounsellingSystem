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

if (isset($_POST['button_start_counselling'])) {
    counselling_run_first_round();
    $event = 'Counselling Started, Click My Allotment Section to get details. ';
    mysql_query("INSERT INTO counselling_date VALUES (NULL,'$event','')");
    header('Location: index.php');
    exit;
}

if (isset($_POST['button_restore_seats'])) {
    mysql_query('UPDATE college_details SET seat1=intake, seat2=intake');
    mysql_query('DELETE FROM seat_allotments');
    header('Location: index.php');
    exit;
}

header('Location: index.php');
exit;
