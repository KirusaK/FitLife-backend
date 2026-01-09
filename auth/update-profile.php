<?php
session_start();
require_once __DIR__ . '/../config/db.php';

if (!isset($_SESSION['user_id'])) {
    echo json_encode(['success' => false]);
    exit;
}

$userId = $_SESSION['user_id'];
$name = trim($_POST['name'] ?? '');
$phone = trim($_POST['phone'] ?? '');

$stmt = $pdo->prepare("UPDATE users SET name = ?, phone = ? WHERE id = ?");
$success = $stmt->execute([$name, $phone, $userId]);

echo json_encode(['success' => $success]);
