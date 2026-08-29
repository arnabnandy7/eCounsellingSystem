<?php

function auth_password_matches($password, $storedHash)
{
    if (preg_match('/^\$2[aby]\$/', $storedHash) || strpos($storedHash, '$argon2') === 0) {
        return password_verify($password, $storedHash);
    }
    return strlen($storedHash) === 32 && hash_equals(strtolower($storedHash), md5($password));
}

function auth_attempt_key($role, $identifier)
{
    return hash('sha256', $role . '|' . strtolower(trim($identifier)));
}

function auth_is_throttled($role, $identifier)
{
    $result = turso_query('SELECT blocked_until FROM auth_attempts WHERE identity_hash=?', array(auth_attempt_key($role, $identifier)));
    $attempt = $result ? mysql_fetch_array($result) : false;
    return $attempt && (int) $attempt['blocked_until'] > time();
}

function auth_record_failure($role, $identifier)
{
    $key = auth_attempt_key($role, $identifier);
    $result = turso_query('SELECT failures, last_attempt FROM auth_attempts WHERE identity_hash=?', array($key));
    $attempt = $result ? mysql_fetch_array($result) : false;
    $now = time();
    $failures = $attempt && $now - (int) $attempt['last_attempt'] <= 900 ? (int) $attempt['failures'] + 1 : 1;
    $blockedUntil = $failures >= 5 ? $now + 900 : 0;
    turso_query(
        'INSERT INTO auth_attempts (identity_hash, failures, last_attempt, blocked_until) VALUES (?,?,?,?) ON CONFLICT(identity_hash) DO UPDATE SET failures=excluded.failures, last_attempt=excluded.last_attempt, blocked_until=excluded.blocked_until',
        array($key, $failures, $now, $blockedUntil)
    );
}

function auth_clear_failures($role, $identifier)
{
    turso_query('DELETE FROM auth_attempts WHERE identity_hash=?', array(auth_attempt_key($role, $identifier)));
}

function auth_authenticate($role, $identifier, $password)
{
    if (auth_is_throttled($role, $identifier)) {
        return false;
    }
    if ($role === 'candidate') {
        $result = turso_query(
            'SELECT l.email, l.password, d.candidate_name, d.rank, d.last_login FROM candidate_reg_log_check l JOIN candidate_details d ON d.email=l.email WHERE l.email=? AND l.chk_flg=1',
            array($identifier)
        );
    } elseif ($role === 'admin') {
        $result = turso_query('SELECT * FROM admin_login WHERE email=?', array($identifier));
    } elseif ($role === 'college') {
        $result = turso_query(
            'SELECT l.*, c.college_cuid, c.college_name FROM college_login l JOIN college_details c ON c.college_cuid=l.college_id WHERE l.clg_uid=?',
            array($identifier)
        );
    } else {
        return false;
    }

    $user = $result ? mysql_fetch_array($result) : false;
    if (!$user || !auth_password_matches($password, $user['password'])) {
        auth_record_failure($role, $identifier);
        return false;
    }

    auth_clear_failures($role, $identifier);

    if (strlen($user['password']) === 32) {
        $modernHash = password_hash($password, PASSWORD_DEFAULT);
        if ($role === 'candidate') {
            turso_query('UPDATE candidate_reg_log_check SET password=? WHERE email=?', array($modernHash, $user['email']));
            turso_query('UPDATE candidate_details SET password=? WHERE email=?', array($modernHash, $user['email']));
        } elseif ($role === 'admin') {
            turso_query('UPDATE admin_login SET password=? WHERE email=?', array($modernHash, $user['email']));
        } else {
            turso_query('UPDATE college_login SET password=? WHERE college_id=?', array($modernHash, $user['college_id']));
        }
        $user['password'] = $modernHash;
    }

    return $user;
}

function auth_begin_session($role, array $user)
{
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }
    session_regenerate_id(true);
    $_SESSION['role'] = $role;
    $_SESSION['name'] = $role === 'college' ? $user['college_name'] : ($role === 'candidate' ? $user['candidate_name'] : $user['name']);

    if ($role === 'candidate') {
        $_SESSION['email'] = $user['email'];
        $_SESSION['last_login_time'] = $user['last_login'];
    } elseif ($role === 'admin') {
        $_SESSION['admin_id'] = $user['email'];
        $_SESSION['userlogged'] = 1;
        $_SESSION['lastloggedtime'] = $user['last_login'];
    } else {
        $_SESSION['college_cuid'] = $user['college_cuid'];
        $_SESSION['mail'] = $user['email'];
        $_SESSION['lastloggedtime'] = $user['last_login'];
    }
}

function auth_has_role($role)
{
    return session_status() === PHP_SESSION_ACTIVE
        && isset($_SESSION['role'])
        && hash_equals($role, (string) $_SESSION['role']);
}

function auth_require_role($role)
{
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }
    if (!auth_has_role($role)) {
        http_response_code(403);
        exit('Authorization required.');
    }
}

function auth_csrf_token()
{
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

function auth_verify_csrf($token)
{
    return is_string($token)
        && isset($_SESSION['csrf_token'])
        && hash_equals($_SESSION['csrf_token'], $token);
}
