<?php
require 'connect.inc.php';
require_once dirname(__DIR__) . '/includes/auth.php';

$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$password = isset($_POST['pwd']) ? $_POST['pwd'] : '';
$user = auth_authenticate('candidate', $email, $password);

if (!$user) {
    echo 'false';
    exit;
}

auth_begin_session('candidate', $user);
date_default_timezone_set('Asia/Kolkata');
$today = date('F j, Y, g:i A');
turso_query('UPDATE candidate_details SET last_login=? WHERE email=?', array($today, $email));
echo 'true';
