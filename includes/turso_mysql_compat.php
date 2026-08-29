<?php

/**
 * Small compatibility bridge for the legacy mysql_* API.
 * New code should use parameterized Turso queries instead of this bridge.
 */

final class LegacyMysqlResult
{
    public $rows;
    public $columns;
    public $position = 0;

    public function __construct(array $rows, array $columns)
    {
        $this->rows = $rows;
        $this->columns = $columns;
    }
}

$GLOBALS['legacy_mysql_error'] = '';

function legacy_turso_credentials()
{
    $url = getenv('TURSO_DATABASE_URL');
    $token = getenv('TURSO_AUTH_TOKEN');

    if (!$url || !$token) {
        throw new RuntimeException('Turso environment variables are not configured.');
    }

    return array(rtrim(preg_replace('#^libsql://#', 'https://', $url), '/'), $token);
}

function legacy_turso_value(array $value)
{
    if (!array_key_exists('value', $value) || $value['value'] === null) {
        return null;
    }

    return $value['value'];
}

function legacy_turso_sql($sql)
{
    $sql = trim($sql);

    if (preg_match('/^TRUNCATE\s+TABLE\s+(`?[a-zA-Z0-9_]+`?)\s*;?$/i', $sql, $matches)) {
        return 'DELETE FROM ' . $matches[1];
    }

    // MySQL supports LIMIT offset,count; SQLite uses LIMIT count OFFSET offset.
    return preg_replace('/\bLIMIT\s+(\d+)\s*,\s*(\d+)\b/i', 'LIMIT $2 OFFSET $1', $sql);
}

function legacy_turso_argument($value)
{
    if ($value === null) {
        return array('type' => 'null');
    }
    if (is_int($value) || is_bool($value)) {
        return array('type' => 'integer', 'value' => (string) (int) $value);
    }
    if (is_float($value)) {
        return array('type' => 'float', 'value' => $value);
    }
    return array('type' => 'text', 'value' => (string) $value);
}

function legacy_turso_request($sql, array $parameters = array())
{
    list($baseUrl, $token) = legacy_turso_credentials();
    $arguments = array_map('legacy_turso_argument', array_values($parameters));
    $payload = json_encode(array(
        'requests' => array(array(
            'type' => 'execute',
            'stmt' => array('sql' => legacy_turso_sql($sql), 'args' => $arguments, 'want_rows' => true),
        )),
    ));

    $headers = array(
        'Authorization: Bearer ' . $token,
        'Content-Type: application/json',
    );

    if (function_exists('curl_init')) {
        $curl = curl_init($baseUrl . '/v2/pipeline');
        curl_setopt_array($curl, array(
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $payload,
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 20,
        ));
        $body = curl_exec($curl);
        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $transportError = curl_error($curl);
        curl_close($curl);
    } else {
        $context = stream_context_create(array('http' => array(
            'method' => 'POST',
            'header' => implode("\r\n", $headers),
            'content' => $payload,
            'timeout' => 20,
            'ignore_errors' => true,
        )));
        $body = file_get_contents($baseUrl . '/v2/pipeline', false, $context);
        $status = isset($http_response_header[0]) && preg_match('/\s(\d{3})\s/', $http_response_header[0], $match)
            ? (int) $match[1]
            : 0;
        $transportError = $body === false ? 'Unable to connect to Turso.' : '';
    }

    if ($body === false || $status < 200 || $status >= 300) {
        throw new RuntimeException($transportError ?: 'Turso returned HTTP ' . $status . '.');
    }

    $decoded = json_decode($body, true);
    $response = isset($decoded['results'][0]) ? $decoded['results'][0] : null;
    if (!$response || $response['type'] !== 'ok') {
        $message = isset($response['error']['message']) ? $response['error']['message'] : 'Invalid response from Turso.';
        throw new RuntimeException($message);
    }

    return $response['response']['result'];
}

function legacy_turso_result(array $result)
{
    $columns = array();
    foreach (isset($result['cols']) ? $result['cols'] : array() as $column) {
        $columns[] = $column['name'];
    }
    $rows = array();
    foreach (isset($result['rows']) ? $result['rows'] : array() as $row) {
        $values = array();
        foreach ($row as $value) {
            $values[] = legacy_turso_value($value);
        }
        $rows[] = $values;
    }
    return new LegacyMysqlResult($rows, $columns);
}

function turso_query($sql, array $parameters = array())
{
    try {
        $result = legacy_turso_request($sql, $parameters);
        $GLOBALS['legacy_mysql_error'] = '';
        return legacy_turso_result($result);
    } catch (Throwable $error) {
        $GLOBALS['legacy_mysql_error'] = $error->getMessage();
        return false;
    }
}

function mysql_connect($host = null, $username = null, $password = null)
{
    try {
        legacy_turso_credentials();
        return true;
    } catch (Throwable $error) {
        $GLOBALS['legacy_mysql_error'] = $error->getMessage();
        return false;
    }
}

function mysql_select_db($databaseName, $connection = null)
{
    return mysql_connect();
}

function mysql_query($sql, $connection = null)
{
    return turso_query($sql);
}

function mysql_num_rows($result)
{
    return $result instanceof LegacyMysqlResult ? count($result->rows) : 0;
}

function mysql_fetch_row($result)
{
    if (!$result instanceof LegacyMysqlResult || !isset($result->rows[$result->position])) {
        return false;
    }

    return $result->rows[$result->position++];
}

function mysql_fetch_array($result, $resultType = null)
{
    $row = mysql_fetch_row($result);
    if ($row === false) {
        return false;
    }

    $combined = $row;
    foreach ($result->columns as $index => $column) {
        $combined[$column] = isset($row[$index]) ? $row[$index] : null;
    }

    return $combined;
}

function mysql_result($result, $rowIndex, $field = 0)
{
    if (!$result instanceof LegacyMysqlResult || !isset($result->rows[$rowIndex])) {
        return false;
    }

    if (is_numeric($field)) {
        return isset($result->rows[$rowIndex][(int) $field]) ? $result->rows[$rowIndex][(int) $field] : false;
    }

    $columnIndex = array_search($field, $result->columns, true);
    return $columnIndex === false ? false : $result->rows[$rowIndex][$columnIndex];
}

function mysql_error($connection = null)
{
    return $GLOBALS['legacy_mysql_error'];
}

final class TursoSessionHandler implements SessionHandlerInterface
{
    public function open(string $path, string $name): bool
    {
        return true;
    }

    public function close(): bool
    {
        return true;
    }

    public function read(string $id): string|false
    {
        $id = preg_replace('/[^a-zA-Z0-9,-]/', '', $id);
        $result = turso_query(
            'SELECT payload FROM app_sessions WHERE id = ? AND expires_at > ?',
            array($id, time())
        );
        $row = $result ? mysql_fetch_row($result) : false;
        return $row ? base64_decode($row[0], true) : '';
    }

    public function write(string $id, string $data): bool
    {
        $id = preg_replace('/[^a-zA-Z0-9,-]/', '', $id);
        $payload = base64_encode($data);
        $expiresAt = time() + (int) ini_get('session.gc_maxlifetime');
        $sql = 'INSERT INTO app_sessions (id, payload, expires_at) VALUES (?, ?, ?) '
            . "ON CONFLICT(id) DO UPDATE SET payload = excluded.payload, expires_at = excluded.expires_at";
        $written = turso_query($sql, array($id, $payload, $expiresAt)) !== false;
        if (!$written) {
            error_log('Turso session write failed: ' . mysql_error());
        }
        return $written;
    }

    public function destroy(string $id): bool
    {
        $id = preg_replace('/[^a-zA-Z0-9,-]/', '', $id);
        return turso_query('DELETE FROM app_sessions WHERE id = ?', array($id)) !== false;
    }

    public function gc(int $maxLifetime): int|false
    {
        return mysql_query('DELETE FROM app_sessions WHERE expires_at <= ' . time()) !== false ? 1 : false;
    }
}

if (session_status() === PHP_SESSION_NONE) {
    session_set_save_handler(new TursoSessionHandler(), true);
    ini_set('session.use_strict_mode', '1');
    ini_set('session.cookie_httponly', '1');
    ini_set('session.cookie_samesite', 'Lax');
    if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') {
        ini_set('session.cookie_secure', '1');
    }
}
