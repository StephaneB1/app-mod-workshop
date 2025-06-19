<?php
// Database configuration
//$db_host = '34.154.36.72';
//$db_name = 'image_catalog';
//$db_user = 'appmod-phpapp-user';
//$db_pass = '.4+/40\XUGfv#s^X';
$db_host = getenv('DB_HOST') ?: '34.154.36.72';
$db_name = getenv('DB_NAME') ?: 'image_catalog';
$db_user = getenv('DB_USER') ?: 'appmod-phpapp-user';
$db_pass = getenv('DB_PASS') ?: '.4+/40\XUGfv#s^X';

// CLOUDSQL_INSTANCE_PASSWORD: ap4MqtA~HI&N1he8
// User: .4+/40\XUGfv#s^X

try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection error: " . $e->getMessage());
}

session_start();
?>
