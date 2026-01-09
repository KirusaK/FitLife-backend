<?php
session_start();
require_once __DIR__ . '/../config/db.php';

if (!isset($_SESSION['user_id'])) {
  echo json_encode(['success' => false, 'message' => 'Brak autoryzacji']);
  exit;
}

$userId = $_SESSION['user_id'];
$service = $_POST['service'] ?? '';
$date = $_POST['date'] ?? '';
$time = $_POST['time'] ?? '';

if (!$service || !$date || !$time) {
  echo json_encode(['success' => false, 'message' => 'Niepełne dane']);
  exit;
}

$stmt = $pdo->prepare("
  INSERT INTO reservations (user_id, service, reservation_date, reservation_time)
  VALUES (?, ?, ?, ?)
");

try {
  $stmt->execute([$userId, $service, $date, $time]);
  echo json_encode(['success' => true]);
} catch (PDOException $e) {
  echo json_encode([
    'success' => false,
    'message' => 'Ten termin jest już zajęty'
  ]);
}
