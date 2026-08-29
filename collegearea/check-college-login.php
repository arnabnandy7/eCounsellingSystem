<?php
require 'connect.inc.php';
require_once dirname(__DIR__) . '/includes/auth.php';

$loginId = isset($_POST['login_id']) ? trim($_POST['login_id']) : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$user = auth_authenticate('college', $loginId, $password);

if (!$user) {
    header('Location: index.php?error=invalidlogin');
    exit;
}

auth_begin_session('college', $user);
date_default_timezone_set('Asia/Kolkata');
$today = date('F j, Y, g:i a T');
$_SESSION['currentloggedtime'] = $today;
turso_query('UPDATE college_login SET last_login=? WHERE college_id=?', array($today, $user['college_id']));
header('Location: college_home.php');
exit;
