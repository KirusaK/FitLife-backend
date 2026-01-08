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
                            <h1>Adam Kowalski</h1>
                            <p>adam.kowalski@gmail.com</p>
                        </div>
                        <ul class="conto-section__list">
                            <li class="conto-section__item">
                                <div class="conto-section__info">
                                    <h4>Imię i nazwisko</h4>
                                    <h4>Adam Kowalski</h4>
                                </div>
                            </li>
                            <li class="conto-section__item">
                                <div class="conto-section__info">
                                    <h4>Email</h4>
                                    <h4>adam.kowalski@gmail.com</h4>
                                </div>
                            </li>
                            <li class="conto-section__item">
                                <div class="conto-section__info">
                                    <h4>Numer telefonu</h4>
                                    <h4>+48 123 456 739</h4>
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
    </main>
    <script src="/FITLIFE-BACKEND/js/konto.js"></script>
    <script src="/FITLIFE-BACKEND/js/modal.js"></script>
</body>
</html>