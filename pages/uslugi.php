<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FitLife|Uslugi</title>
    <link rel="stylesheet" href="../css/main.min.css" />
    <link rel="icon" type="image/svg" href="/FitLife/img/logo.svg" />
  </head>
  <body>
    <?php require_once "../blocks/header-pages.php" ?>
    <main>
      <section class="naszeUslugi-section">
        <div class="container">
          <div class="naszeUslugi-section__container">
            <h1 class="naszeUslugi-section__title">Nasze Usługi</h1>
            <button type="button" class="button-section">
              Dowiedz się wiecej
            </button>
          </div>
        </div>
      </section>
      <section class="uslugiFitlife-section">
        <div class="container">
          <h1 class="uslugiFitlife-section__title">Nasze Usługi w FitLife</h1>
          <ul class="uslugiFitlife-section__list">
            <li class="uslugiFitlife-section__item">
              <button type="button" class="uslugiFitlife-section__btn">
                <img src="../img/silownia.svg" alt="Логотип Siłownia" />
                <h3>Siłownia</h3>
                <p>Nielimitowany dostęp do sprzętu premium.</p>
              </button>
            </li>
            <li class="uslugiFitlife-section__item">
              <button type="button" class="uslugiFitlife-section__btn">
                <img src="../img/masaz.svg" alt="Логотип Masaż" />
                <h3>Masaż</h3>
                <p>Zrelaksuj ciało po treningu.</p>
              </button>
            </li>
            <li class="uslugiFitlife-section__item">
              <button type="button" class="uslugiFitlife-section__btn">
                <img src="../img/sauna.svg" alt="Логотип Sauna" />
                <h3>Sauna</h3>
                <p>Zadbaj o regenerację</p>
              </button>
            </li>
            <li class="uslugiFitlife-section__item">
              <button type="button" class="uslugiFitlife-section__btn">
                <img src="../img/yoga.svg" alt="Логотип Yoga" />
                <h3>Yoga</h3>
                <p>Odnajdz równowagę</p>
              </button>
            </li>
          </ul>
        </div>
      </section>
      <section class="zarezerwuj-section">
        <div class="container">
          <div class="zarezerwuj-section__fitlife">
            <h1 class="zarezerwuj-section__title">
              Zarezerwuj swoją pierwszą wizytę już dziś!
            </h1>
            <button type="button" class="zarezerwuj-section__btn">
              Zarezerwuj teraz
            </button>
          </div>
        </div>
      </section>
    </main>
    <?php require_once "../blocks/footer-pages.php" ?>
    <script src="/FITLIFE-BACKEND/js/konto.js"></script>
    <script src="/FITLIFE-BACKEND/js/modal.js"></script>
  </body>
</html>
