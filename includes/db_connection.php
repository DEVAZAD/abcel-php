<<<<<<< HEAD
<?php
// Database configuration
$host = 'localhost';
$dbname = 'php_contact_form';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
=======
<?php
// Database configuration
$host = 'localhost';
$dbname = 'php_contact_form';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
>>>>>>> da32f29329f4f9b637860a0acc8a606536ad1b6b
?>