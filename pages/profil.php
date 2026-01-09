<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['user_id'])) {
    header('Location: /FITLIFE-BACKEND/pages/zaloguj.php');
    exit;
}

require_once __DIR__ . '/../config/db.php';

$userId = $_SESSION['user_id'];

$stmt = $pdo->prepare("SELECT email, name, phone FROM users WHERE id = ?");
$stmt->execute([$userId]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    echo 'Użytkownik nie znaleziony';
    exit;
}

$stmt = $pdo->prepare("
  SELECT id, service, reservation_date, reservation_time
  FROM reservations
  WHERE user_id = ?
  ORDER BY reservation_date, reservation_time
");

$stmt->execute([$userId]);
$reservations = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitLife|Profil</title>
    <link rel="stylesheet" href="../css/main.min.css" />
    <link rel="icon" type="image/svg" href="/FitLife/img/logo.svg" />
</head>
<body>
    <?php require_once "../blocks/header-pages.php" ?>
    <main>
        <section class="conto-section">
            <div class="container">
                <div class="conto-section__container">
                    <div class="conto-section__pole">
                        <div class="conto-section__profil">
                            <svg class="conto-section__svg" width="150" height="150">
                                <use href="/FITLIFE-BACKEND/img/icons.svg#icon-user-tie"></use>
                            </svg>
                        </div>
                        <div class="conto-section__danne">  
                            <h1><?= htmlspecialchars($user['name'] ?? 'Uzupełnij profil') ?></h1>
                            <p><?= htmlspecialchars($user['email']) ?></p>
                        </div>
                        <ul class="conto-section__list">
                            <li class="conto-section__item">
                                <div class="conto-section__info">
                                    <h4>Imię i nazwisko</h4>
                                    <h4><?= htmlspecialchars($user['name'] ?? 'Uzupełnij profil') ?></h4>
                                </div>
                            </li>
                            <li class="conto-section__item">
                                <div class="conto-section__info">
                                    <h4>Email</h4>
                                    <h4><?= htmlspecialchars($user['email']) ?></h4>
                                </div>
                            </li>
                            <li class="conto-section__item">
                                <div class="conto-section__info">
                                    <h4>Numer telefonu</h4>
                                    <h4> <?= htmlspecialchars($user['phone'] ?? 'Uzupełnij profil') ?></h4>
                                </div>
                            </li>
                        </ul>
                        <div class="conto-section__button">
                            <button class="conto-section__btn">Edytuj dane</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="zarezerwowane-section">
            <div class="container">
                <h1 class="zarezerwowane-section__title">Moje rezerwacje </h1>
                <div class="zarezerwowane-section__container">
                        <?php if (empty($reservations)): ?>
                            <div class="zarezerwowane-section__empty">
                                Nie masz jeszcze rezerwacji
                            </div>
                        <?php else: ?>
                    <ul class="zarezerwowane-section__list">
                            <?php foreach ($reservations as $reservation): ?>
                                <li class="zarezerwowane-section__item">

                                    <div class="zarezerwowane-section__left">
                                        <img 
                                        src="/FITLIFE-BACKEND/img/<?= htmlspecialchars($reservation['service']) ?>.svg"
                                        alt="<?= htmlspecialchars($reservation['service']) ?>"
                                        >

                                        <div class="zarezerwowane-section__data">
                                            <h2><?= ucfirst(htmlspecialchars($reservation['service'])) ?></h2>
                                            <p>
                                                <?= date('d.m.Y', strtotime($reservation['reservation_date'])) ?>
                                                <?= substr($reservation['reservation_time'], 0, 5) ?>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="zarezerwowane-section__button">
                                        <button 
                                        class="zarezerwowane-section__btn"
                                        data-id="<?= $reservation['id'] ?>"
                                        type="button">
                                        Anuluj
                                        </button>
                                    </div>

                                </li>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </section>
    </main>
    <?php require_once "../blocks/footer-pages.php" ?>

    <div class="modal" id="editModal">
        <div class="modal-content">
            <h1>Edytuj dane</h1>

            <form id="modal-editForm">
                <div class="modal-input">
                    <div class="modal-input__name">
                        <input type="text" name="name" placeholder="Imię i nazwisko" 
                        value="<?= htmlspecialchars($user['name'] ?? '') ?>" required>
                    </div>
                    <div class="modal-input__phone">
                        <input type="text" name="phone" placeholder="Numer telefonu"
                        value="<?= htmlspecialchars($user['phone'] ?? '') ?>">  
                    </div>
                </div>

                <div class="modal__button">
                    <div class="modal-button__submit">
                        <button class="modal-button__button" type="submit">Save</button>
                    </div>
                    <div class="modal-button__btn">
                        <button class="modal-button__button" type="button" id="closeModal">Anuluj</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="/FITLIFE-BACKEND/js/konto.js"></script>
    <script src="/FITLIFE-BACKEND/js/modal.js"></script>
    <script src="/FITLIFE-BACKEND/js/profil.js"></script>
    <script src="/FITLIFE-BACKEND/js/cancel-reservation.js"></script>
</body>
</html>