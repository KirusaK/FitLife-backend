<?php
session_start();
require_once __DIR__ . '/../config/db.php';

if (!isset($_SESSION['user_id'])) {
    echo json_encode(['success' => false]);
    exit;
}

$userId = $_SESSION['user_id'];
$reservationId = $_POST['id'] ?? null;

if (!$reservationId) {
    echo json_encode(['success' => false]);
    exit;
}

// удаляем ТОЛЬКО СВОЮ резервацию
$stmt = $pdo->prepare("
    DELETE FROM reservations 
    WHERE id = ? AND user_id = ?
");

$success = $stmt->execute([$reservationId, $userId]);

echo json_encode(['success' => $success]);
