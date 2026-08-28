<?php

$root = dirname(__DIR__);
require_once $root . '/includes/turso_mysql_compat.php';

$path = isset($_GET['path']) ? trim($_GET['path'], '/') : '';
$path = $path === '' ? 'index.php' : $path;

$disabledFeatures = array(
    'admin/pass_mail.php',
    'admin/quick_contact_process.php',
    'admin/upload_file.php',
    'admin/upload_notice.php',
    'collegearea/check-college-forgot-password.php',
    'collegearea/college-forgot-password.php',
    'collegearea/report_problem.php',
    'content/forgot_password.php',
    'content/forgot_password_process.php',
    'content/forgot_password_process_set.php',
    'content/reg_mail.php',
    'content/regact_mail.php',
    'content/regconfirm_mail.php',
    'content/report_candidate_problem.php',
    'content/trouble_mail.php',
    'content/trouble_signin.php',
    'content/trouble_signin_retreive_acc.php',
);

if (in_array(str_replace('\\', '/', $path), $disabledFeatures, true)) {
    http_response_code(410);
    echo 'This email or file-storage feature is not enabled in this deployment.';
    exit;
}

if (substr($path, -1) === '/') {
    $path .= 'index.php';
} elseif (pathinfo($path, PATHINFO_EXTENSION) === '') {
    $path .= '.php';
}

$target = realpath($root . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $path));

if ($target === false || strpos($target, $root . DIRECTORY_SEPARATOR) !== 0 || !is_file($target)) {
    http_response_code(404);
    echo 'Not Found';
    exit;
}

chdir(dirname($target));
require $target;
