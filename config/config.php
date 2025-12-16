<?php
//database connection details
$db_host = 'localhost';
$dbname = 'ecommerce-project';
$dbuser = 'root';
$dbpass = '';
try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$dbname", $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $expection) {
    echo "Connection error: " . $expection->getMessage();
}
define('BASE_URL', 'http://localhost/php-project/ecommerce_project/');
define('ADMIN_URL', BASE_URL . 'admin/');
define('SMTP_HOST', 'sandbox.smtp.mailtrap.io');
define('SMTP_PORT', 587);
define('SMTP_USERNAME', '3be5c1a5027ec7');
define('SMTP_PASSWORD', 'ec9756d11b34d2');
define('SMTP_ENCRYPTION', 'tls');
define('SMTP_FROM', 'contact@example.com');
