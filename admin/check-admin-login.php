<?php
require 'connect.inc.php';
require_once dirname(__DIR__) . '/includes/auth.php';

$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$password = isset($_POST['pass']) ? $_POST['pass'] : '';
$user = auth_authenticate('admin', $email, $password);

if (!$user) {
    header('Location: login.php?error=invalidcredential');
    exit;
}

auth_begin_session('admin', $user);
date_default_timezone_set('Asia/Kolkata');
$today = date('F j, Y, g:i a T');
$_SESSION['currentloggedtime'] = $today;
turso_query('UPDATE admin_login SET last_login=? WHERE email=?', array($today, $email));
header('Location: index.php');
exit;
