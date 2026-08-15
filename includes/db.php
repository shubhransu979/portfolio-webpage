<?php
/* Values may be supplied by the server environment or a local .env file. */
function loadLocalEnvironment(): void {
    $envFile = dirname(__DIR__) . '/.env';
    if (!is_readable($envFile)) return;
    foreach (file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
        if (str_starts_with(trim($line), '#') || !str_contains($line, '=')) continue;
        [$key, $value] = explode('=', $line, 2);
        $key = trim($key); $value = trim($value, " \t\"'");
        if ($key !== '' && getenv($key) === false) putenv("$key=$value");
    }
}
function getDatabaseConnection(): mysqli {
    loadLocalEnvironment();
    $host = getenv('DB_HOST') ?: '';
    $name = getenv('DB_NAME') ?: '';
    $user = getenv('DB_USER') ?: '';
    $pass = getenv('DB_PASS') ?: '';
    if (!$host || !$name || !$user) { throw new RuntimeException('Database configuration is unavailable.'); }
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $db = new mysqli($host, $user, $pass, $name);
    $db->set_charset('utf8mb4');
    return $db;
}
