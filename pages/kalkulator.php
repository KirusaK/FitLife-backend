<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FitLife|Kalkulator Kcal & BZHU</title>
    <link rel="stylesheet" href="../css/main.min.css" />
    <link rel="icon" type="image/svg" href="/FitLife/img/logo.svg" />
  </head>
  <body>
    <?php require_once "../blocks/header-pages.php" ?>
    <main>
      <section class="kalkulator-section">
        <div class="container">
          <div class="kalkulator-section__container">
            <h1 class="kalkulator-section__title">Kalkulator Kcal & BZHU</h1>
            <p class="kalkulator-section__text">
              Oblicz swoje zapotrebowanie kaloryczne i rozklad BZHU
            </p>
          </div>
        </div>
      </section>
      <section class="licznik-section">
        <div class="container">
          <div class="licznik-section__container">
            <div class="licznik-section__pierwsza">
              <ul class="licznik-section__list">
                <li class="licznik-section__item">
                  <h3>Waga</h3>
                  <input type="number" placeholder="kg" id="weight"/>
                </li>
                <li class="licznik-section__item">
                  <h3>Wzrost</h3>
                  <input type="number" placeholder="cm" id="height"/>
                </li>
                <li class="licznik-section__item">
                  <h3>Wiek</h3>
                  <input type="number" placeholder="lata" id="age"/>
                </li>
                <li class="licznik-section__item">
                  <h3>Poziom aktywności</h3>
                  <div class="select" data-type="activity">
                    <div class="select-input">
                      <span>Aktywności</span>
                      <div class="arrow"></div>
                    </div>
                    <ul class="select-dropdown">
                      <li data-value="1.2">Siedzący tryb życia (1.2)</li>
                      <li data-value="1.3">Ćwiczenia 1–3 razy w tygodniu (1.3)</li>
                      <li data-value="1.6">Ćwiczenia 3–5 razy w tygodniu (1.6)</li>
                      <li data-value="1.7">Codzienne treningi (1.7)</li>
                      <li data-value="1.9">Treningi 2x dziennie (1.9)</li>
                    </ul>
                  </div>
                  <h3 class="select-text">Wybierz swój cel</h3>
                  <div class="select" data-type="goal">
                    <div class="select-input">
                      <span>Cel</span>
                      <div class="arrow"></div>
                    </div>
                    <ul class="select-dropdown__cel">
                      <li data-value="-300">Redukcja</li>
                      <li data-value="0">Utrzymanie</li>
                      <li data-value="300">Masa</li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
            <div class="licznik-section__droga">
              <div class="licznik-section__sum"></div>
              <div class="licznik-section__info">
                <p>Siedzący tryb zycia - 1,2</p>
                <p>Cwiczenia 1-3 razy w tygodniu - 1,3</p>
                <p>Cwiczenia 3-5 razy w tygodniu - 1,6</p>
                <p>Codzienne treningi - 1,7</p>
                <p>Treningi 2 razy dziennie - 1,9</p>
              </div>
            </div>
            <div class="licznik-section__trzecia">
              <button class="licznik-section__btn">Oblicz</button>
            </div>
          </div>
        </div>
      </section>
      <section class="jakdziala-section">
        <div class="container">
          <div class="jakdziala-section__container">
            <h1>Jak to dziala?</h1>
            <p>
              Twój dzienny bilans kaloryczny (BMR) obliczamy na podstawie wzoru
              Mifflina–St Jeora
            </p>
            <h3>Rezultaty</h3>
            <div class="jakdziala-section__result">
              <ul class="jakdziala-section__list">
                <li class="jakdziala-section__item">
                  <h2>3000</h2>
                  <h2>kcal</h2>
                </li>
                <li class="jakdziala-section__item">
                  <h2>200 g</h2>
                  <h2>bialko</h2>
                </li>
                <li class="jakdziala-section__item">
                  <h2>83 g</h2>
                  <h2>tluszcz</h2>
                </li>
                <li class="jakdziala-section__item">
                  <h2>400 g</h2>
                  <h2>węglowodany</h2>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    </main>
    <?php require_once "../blocks/footer-pages.php" ?>
    <script src="/FITLIFE-BACKEND/js/konto.js"></script>
    <script src="/FITLIFE-BACKEND/js/modal.js"></script>
    <script src="/FITLIFE-BACKEND/js/kalkulator.js"></script>
  </body>
</html>
