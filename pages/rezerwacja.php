<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FitLife|Rezerwacja</title>
    <link rel="stylesheet" href="../css/main.min.css" />
    <link rel="icon" type="image/svg" href="/FitLife/img/logo.svg" />
  </head>
  <body>
    <?php require_once "../blocks/header-pages.php" ?>
    <main>
      <section class="rezerwacja-section">
        <div class="container">
          <div class="rezerwacja-section__container">
            <h1 class="rezerwacja-section__title">Rezerwacja</h1>
          </div>
        </div>
      </section>
      <section class="uslugiWybor-section">
        <div class="container">
          <div class="uslugiWybor-section__container">
            <ul class="uslugiWybor-section__list">
              <li class="uslugiWybor-section__item">
                <button class="uslugiWybor-section__btn" data-service="Masaz">
                  <img src="../img/masaz.svg" alt="Логотип Masaz" />
                  <h3>Masaż</h3>
                  <p>Zrelaksuj ciało po treningu.</p>
                </button>
              </li>
              <li class="uslugiWybor-section__item">
                <button class="uslugiWybor-section__btn" data-service="Sauna">
                  <img src="../img/sauna.svg" alt="Логотип Sauna" />
                  <h3>Sauna</h3>
                  <p>Zadbaj o regenerację</p>
                </button>
              </li>
              <li class="uslugiWybor-section__item">
                <button class="uslugiWybor-section__btn" data-service="Yoga">
                  <img src="../img/yoga.svg" alt="Логотип Yoga" />
                  <h3>Yoga</h3>
                  <p>Odnajdz równowagę</p>
                </button>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="data-section">
        <div class="container">
          <div class="data-section__container">
            <h1 class="data-section__title">Wybierz datę i godzinę</h1>
            <div class="data-section__check">
              <div class="data-section__item">
                <h3 class="data-section__text">Data</h3>
                <div class="data-section__btn">
                  <input type="date" id="reservationDate">
                </div>
              </div>
              <div class="data-section__item">
                <h3 class="data-section__text">Godzina</h3>
                <div class="data-section__btn">
                  <input type="time" id="reservationTime">
                </div>
              </div>
            </div>
            <input type="hidden" id="selectedService" name="service">

            <div class="data-section__but">
              <button class="data-section__button">Zarezerwuj teraz</button>
            </div>
          </div>
        </div>
      </section>
    </main>
    <?php require_once "../blocks/footer-pages.php" ?>
    <script src="/FITLIFE-BACKEND/js/konto.js"></script>
    <script src="/FITLIFE-BACKEND/js/modal.js"></script>
    <script src="/FITLIFE-BACKEND/js/rezerwacja.js"></script>
  </body>
</html>
