<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FitLife|Abonamenty</title>
    <link rel="stylesheet" href="../css/main.min.css" />
    <link rel="icon" type="image/svg" href="/FitLife/img/logo.svg" />
  </head>
  <body>
    <?php require_once "../blocks/header-pages.php" ?>
    <main>
      <section class="abonamentyFitlife-section">
        <div class="container">
          <div class="abonamentyFitlife-section__container">
            <h1 class="abonamentyFitlife-section__title">Abonamenty FitLife</h1>
            <p class="abonamentyFitlife-section__text">
              Wybierz plan dopasowany do Twoich celów
            </p>
            <button class="button-section">Dowiedz się więcej</button>
          </div>
        </div>
      </section>
      <section class="price-section">
        <div class="container">
          <div class="price-section__container">
            <ul class="price-section__list">
              <li class="price-section__item">
                <div class="price-section__pole">
                  <h3 class="price-section__title">Standart</h3>
                  <h4 class="price-section__cena">80 zł / mesiąc</h4>
                  <div class="price-section__info">
                    <img src="/FitLife/img/sukces.svg" alt="" />
                    <p>Dostęp do siłowni</p>
                  </div>
                  <div class="price-section__info">
                    <img src="/FitLife/img/sukces.svg" alt="" />
                    <p>Sprzęt premium</p>
                  </div>
                  <div class="price-section__info">
                    <img src="/FitLife/img/sukces.svg" alt="" />
                    <p>Brak limitów wejść</p>
                  </div>
                </div>
                <div class="price-section__button">
                  <button class="price-section__btn" data-plan="standart">Kup teraz</button>
                </div>
              </li>
              <li class="price-section__item">
                <div class="price-section__pole">
                  <h3 class="price-section__title">Premium</h3>
                  <h4 class="price-section__cena">100 zł / mesiąc</h4>
                  <div class="price-section__info">
                    <img src="/FitLife/img/sukces.svg" alt="" />
                    <p>Wszystko z planu Standard</p>
                  </div>
                  <div class="price-section__info">
                    <img src="/FitLife/img/sukces.svg" alt="" />
                    <p>Opieka trenera</p>
                  </div>
                  <div class="price-section__info">
                    <img src="/FitLife/img/sukces.svg" alt="" />
                    <p>Plan treningowy dopasowany do Ciebie</p>
                  </div>
                </div>
                <div class="price-section__button">
                  <button class="price-section__btn" data-plan="premium">Kup teraz</button>
                </div>
              </li>
              <li class="price-section__item">
                <div class="price-section__pole">
                  <h3 class="price-section__title">VIP</h3>
                  <h4 class="price-section__cena">150 zł / mesiąc</h4>
                  <div class="price-section__info">
                    <img src="/FitLife/img/sukces.svg" alt="" />
                    <p>Wszystko z planu Premium</p>
                  </div>
                  <div class="price-section__info">
                    <img src="/FitLife/img/sukces.svg" alt="" />
                    <p>Trener personalny + plan żywieniowy</p>
                  </div>
                  <div class="price-section__info">
                    <img src="/FitLife/img/sukces.svg" alt="" />
                    <p>Indywidualny monitoring postępów</p>
                  </div>
                </div>
                <div class="price-section__button">
                  <button class="price-section__btn" data-plan="vip">Kup teraz</button>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="dlugosc-section">
        <div class="container">
          <div class="dlugosc-section__container">
            <h2 class="dlugosc-section__title">Wybierz długość abonamentu</h2>
            <ul class="dlugosc-section__list">
              <li class="dlugosc-section__item">
                <button class="dlugosc-section__btn" data-duration="1">1 miesiąc</button>
              </li>
              <li class="dlugosc-section__item">
                <button class="dlugosc-section__btn" data-duration="3">3 miesiące</button>
              </li>
              <li class="dlugosc-section__item">
                <button class="dlugosc-section__btn" data-duration="12">12 miesiący</button>
              </li>
            </ul>
          </div>
        </div>
      </section>
    </main>

    <div class="modal-section__abonamenty" id="abonamentModal">
      <div class="modal-content">
        <h2>Dziękujemy za zakup</h2>
        <button id="closeAbonamentModal" class="modal__btn">
          OK
        </button>
      </div>
    </div>


    <?php require_once "../blocks/footer-pages.php" ?>
    <script src="/FITLIFE-BACKEND/js/konto.js"></script>
    <script src="/FITLIFE-BACKEND/js/modal.js"></script>
    <script src="/FITLIFE-BACKEND/js/abonamenty.js"></script>
  </body>
</html>
