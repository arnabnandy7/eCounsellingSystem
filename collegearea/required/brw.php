<?php
require_once dirname(__DIR__, 2) . '/includes/browser_info.php';
$ua = getBrowser();
$yourbrowser = 'Your browser: ' . $ua['name'] . ' ' . $ua['version'] . ' on ' . $ua['platform']
    . ' reports: <br>' . htmlspecialchars($ua['userAgent'], ENT_QUOTES, 'UTF-8');
echo $yourbrowser;
