<?php

$root = dirname(__DIR__);
require_once $root . '/includes/turso_mysql_compat.php';
require_once $root . '/includes/auth.php';

// Vercel's PHP runtime may tear down outbound networking before PHP performs
// its implicit session shutdown. Flush Turso-backed sessions explicitly first.
register_shutdown_function(function () {
    if (session_status() === PHP_SESSION_ACTIVE) {
        session_write_close();
    }
});

$path = isset($_GET['path']) ? ltrim($_GET['path'], '/') : '';
$path = $path === '' ? 'index.php' : $path;

$disabledFeatures = array(
    'admin/pass_mail.php',
    'admin/quick_contact_process.php',
    'admin/upload_file.php',
    'admin/upload_notice.php',
    'collegearea/check-college-forgot-password.php',
    'collegearea/college-forgot-password.php',
    'collegearea/create_login.php',
    'collegearea/report_problem.php',
    'content/college.php',
    'content/forgot_password.php',
    'content/forgot_password_process.php',
    'content/forgot_password_process_set.php',
    'content/reg_mail.php',
    'content/regact_mail.php',
    'content/regconfirm_mail.php',
    'content/registration3.php',
    'content/report_candidate_problem.php',
    'content/trouble_mail.php',
    'content/trouble_signin.php',
    'content/trouble_signin_retreive_acc.php',
    'content/login.php',
);

if (substr($path, -1) === '/') {
    $path .= 'index.php';
} elseif (pathinfo($path, PATHINFO_EXTENSION) === '') {
    $path .= '.php';
}

$target = realpath($root . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $path));

if ($target === false
    || strpos($target, $root . DIRECTORY_SEPARATOR) !== 0
    || !is_file($target)
    || strtolower(pathinfo($target, PATHINFO_EXTENSION)) !== 'php') {
    http_response_code(404);
    echo 'Not Found';
    exit;
}

$normalizedPath = str_replace('\\', '/', substr($target, strlen($root) + 1));
if (in_array($normalizedPath, $disabledFeatures, true)) {
    http_response_code(410);
    echo 'This legacy feature is not enabled in this deployment.';
    exit;
}

$publicAdminPaths = array('admin/login.php', 'admin/check-admin-login.php');
$publicCollegePaths = array('collegearea/index.php', 'collegearea/check-college-login.php');
$candidatePaths = array(
    'content/book.php',
    'content/candidate_allotment.php',
    'content/candidate_home.php',
    'content/change_candidate_contact.php',
    'content/change_candidate_password.php',
    'content/download_allotment.php',
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
if ($normalizedPath === 'content/once_daily.php') {
    $requiredRole = 'admin';
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

chdir(dirname($target));
require $target;
