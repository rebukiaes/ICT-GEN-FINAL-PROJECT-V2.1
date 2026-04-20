<?php
$host = 'localhost';
$dbname = 'index_db';
$username = 'root';
$password = ''; // <-- change this if your MySQL root has a password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    error_log("[db.php] Connected to '$dbname' successfully.");
} catch (PDOException $e) {
    error_log("[db.php] Connection FAILED: " . $e->getMessage());
    die("Connection failed: " . $e->getMessage());
}
?>
