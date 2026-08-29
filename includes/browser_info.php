<?php

function getBrowser()
{
    $userAgent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
    $name = 'Unknown';
    $platform = 'Unknown';
    $version = '?';
    $pattern = '';

    if (preg_match('/linux/i', $userAgent)) {
        $platform = 'linux';
    } elseif (preg_match('/macintosh|mac os x/i', $userAgent)) {
        $platform = 'mac';
    } elseif (preg_match('/windows|win32/i', $userAgent)) {
        $platform = 'windows';
    }

    $browsers = array(
        'Edg' => 'Microsoft Edge',
        'OPR' => 'Opera',
        'Chrome' => 'Google Chrome',
        'Firefox' => 'Mozilla Firefox',
        'Version' => 'Apple Safari',
        'MSIE' => 'Internet Explorer',
    );

    foreach ($browsers as $token => $browserName) {
        if ($token === 'Version' && !preg_match('/Safari/i', $userAgent)) {
            continue;
        }
        $candidatePattern = '#(?:' . preg_quote($token, '#') . ')[/ ](?<version>[0-9.]+)#i';
        if (preg_match($candidatePattern, $userAgent, $matches)) {
            $name = $browserName;
            $version = $matches['version'];
            $pattern = $candidatePattern;
            break;
        }
    }

    if ($name === 'Unknown' && preg_match('#Trident/.+rv:(?<version>[0-9.]+)#i', $userAgent, $matches)) {
        $name = 'Internet Explorer';
        $version = $matches['version'];
        $pattern = '#Trident/.+rv:(?<version>[0-9.]+)#i';
    }

    return array(
        'userAgent' => $userAgent,
        'name' => $name,
        'version' => $version,
        'platform' => $platform,
        'pattern' => $pattern,
    );
}
