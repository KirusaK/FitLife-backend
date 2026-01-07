<?php
session_start();
require_once __DIR__ . '/../config/db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /FITLIFE-BACKEND/pages/zaloguj.php');
    exit;
}

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if (empty($email) || empty($password)) {
    echo 'Заполните все поля';
    exit;
}

$stmt = $pdo->prepare("SELECT id, password FROM users WHERE email = ?");
$stmt->execute([$email]);
$user = $stmt->fetch();

if (!$user) {
    echo 'Неверный email или пароль';
    exit;
}

if (!password_verify($password, $user['password'])) {
    echo 'Неверный email или пароль';
    exit;
}

// ✅ УСПЕШНЫЙ ЛОГИН
$_SESSION['user_id'] = $user['id'];
$_SESSION['user_email'] = $email;

header('Location: /FITLIFE-BACKEND/index.php');
exit;
