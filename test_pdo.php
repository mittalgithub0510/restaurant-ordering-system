<?php
$db = require __DIR__ . '/backend/config/database.php';
try {
    $pdo = new PDO("mysql:host={$db['host']};port={$db['port']};dbname={$db['database']}", $db['username'], $db['password'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    echo "OK\n";
} catch (Exception $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
}
