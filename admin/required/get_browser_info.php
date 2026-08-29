<?php
function getBrowser() 
{ 
    $u_agent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
    $bname = 'Unknown';
    $platform = 'Unknown';
    $version= "";

    //First get the platform?
    if (preg_match('/linux/i', $u_agent)) {
        $platform = 'linux';
    }
    elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
        $platform = 'mac';
    }
    elseif (preg_match('/windows|win32/i', $u_agent)) {
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
    $pattern = '';
    foreach ($browsers as $token => $name) {
        if ($token === 'Version' && !preg_match('/Safari/i', $u_agent)) {
            continue;
        }
        $candidatePattern = '#(?:' . preg_quote($token, '#') . ')[/ ](?<version>[0-9.]+)#i';
        if (preg_match($candidatePattern, $u_agent, $matches)) {
            $bname = $name;
            $version = $matches['version'];
            $pattern = $candidatePattern;
            break;
        }
    }

    if ($bname === 'Unknown' && preg_match('#Trident/.+rv:(?<version>[0-9.]+)#i', $u_agent, $matches)) {
        $bname = 'Internet Explorer';
        $version = $matches['version'];
        $pattern = '#Trident/.+rv:(?<version>[0-9.]+)#i';
    }

    if ($version === '') {
        $version = '?';
    }
    
    return array(
        'userAgent' => $u_agent,
        'name'      => $bname,
        'version'   => $version,
        'platform'  => $platform,
        'pattern'    => $pattern
    );
} 

// now try it
$brw=getBrowser();
?>
