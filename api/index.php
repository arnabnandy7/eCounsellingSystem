<?php

$root = dirname(__DIR__);
require_once $root . '/includes/turso_mysql_compat.php';
require_once $root . '/includes/auth.php';

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

$normalizedPath = str_replace('\\', '/', $path);
$publicAdminPaths = array('admin/login.php', 'admin/check-admin-login.php');
$publicCollegePaths = array('collegearea/index.php', 'collegearea/check-college-login.php');
$candidatePaths = array(
    'content/book.php',
    'content/candidate_allotment.php',
    'content/candidate_home.php',
    'content/change_candidate_contact.php',
    'content/change_candidate_password.php',
    'content/download_allotment.php',
    'content/gallery.php',
    'content/load.php',
    'content/logout.php',
    'content/seat_status.php',
    'content/upgrade.php',
);

$requiredRole = null;
if (strpos($normalizedPath, 'admin/') === 0 && !in_array($normalizedPath, $publicAdminPaths, true)) {
    $requiredRole = 'admin';
}
if (strpos($normalizedPath, 'collegearea/') === 0
    && strpos($normalizedPath, 'collegearea/static/') !== 0
    && !in_array($normalizedPath, $publicCollegePaths, true)) {
    $requiredRole = 'college';
}
if (in_array($normalizedPath, $candidatePaths, true)) {
    $requiredRole = 'candidate';
}

if ($requiredRole !== null) {
    auth_require_role($requiredRole);
    if ($_SERVER['REQUEST_METHOD'] === 'POST'
        && !auth_verify_csrf(isset($_POST['csrf_token']) ? $_POST['csrf_token'] : null)) {
        http_response_code(403);
        exit('Invalid CSRF token.');
    }

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $csrfField = '<input type="hidden" name="csrf_token" value="'
            . htmlspecialchars(auth_csrf_token(), ENT_QUOTES, 'UTF-8') . '">';
        ob_start(function ($html) use ($csrfField) {
            return preg_replace_callback('/<form\b([^>]*)>/i', function ($match) use ($csrfField) {
                if (!preg_match('/\bmethod\s*=\s*(["\']?)post\1/i', $match[1])) {
                    return $match[0];
                }
                return $match[0] . $csrfField;
            }, $html);
        });
    }
}

$target = realpath($root . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $path));

if ($target === false || strpos($target, $root . DIRECTORY_SEPARATOR) !== 0 || !is_file($target)) {
    http_response_code(404);
    echo 'Not Found';
    exit;
}

chdir(dirname($target));
require $target;
