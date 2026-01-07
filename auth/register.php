<?php

require_once __DIR__ . '/../config/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if (empty($email) || empty($password)) {
        echo 'Заполните все поля';
        exit;
    }

    $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user) {
        echo 'Пользователь с таким email уже существует';
        exit;
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("
      INSERT INTO users (email, password)
      VALUES (?, ?)
    ");

    $stmt->execute([$email, $hashedPassword]);

    header('Location: /FITLIFE-BACKEND/pages/zaloguj.php');
    exit;
}
