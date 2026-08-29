<?php

function get_client_ip()
{
    $candidates = array();
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $candidates = array_merge($candidates, explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']));
    }
    if (!empty($_SERVER['HTTP_X_REAL_IP'])) {
        $candidates[] = $_SERVER['HTTP_X_REAL_IP'];
    }
    if (!empty($_SERVER['REMOTE_ADDR'])) {
        $candidates[] = $_SERVER['REMOTE_ADDR'];
    }

    foreach ($candidates as $candidate) {
        $candidate = trim($candidate);
        if (filter_var($candidate, FILTER_VALIDATE_IP) !== false) {
            return $candidate;
        }
    }

    return 'UNKNOWN';
}
