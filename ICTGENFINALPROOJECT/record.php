<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}

require_once 'db.php';

$result = $_GET['result'] ?? '';

if ($result === 'CLEAR' || $result === 'FAILED') {
    $stmt = $pdo->prepare("INSERT INTO prescript_results (user_id, result) VALUES (?, ?)");
    $stmt->execute([$_SESSION['user_id'], $result]);
}

if ($result === 'CLEAR') {
    header('Location: clear.php');
} else {
    header('Location: fail.php');
}
exit;
?>
