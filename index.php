<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FitLife|Home</title>
    <link rel="stylesheet" href="css/main.min.css" />
    <link rel="icon" type="image/svg" href="/FitLife/img/logo.svg" />
  </head>
  <body>
    <?php require_once "blocks/header.php" ?>
    <main>
      <section class="hero-section">
        <div class="container">
          <h1 class="hero-section__title">
            Twój klub. Twoja forma. Twój czas.
          </h1>
          <p class="hero-section__text">
            Dołącz do nas i rozpocznij swoją drogę do lepszej formy już dziś.
          </p>
          <button class="hero-section__button" type="button">
            Zarezerwuj teraz
          </button>
        </div>
      </section>
      <section class="uslugi-section">
        <div class="container">
          <h2 class="uslugi-section__title">Nasze Usługi</h2>
          <ul class="uslugi-section__list">
            <li class="uslugi-section__item">
              <button class="uslugi-section__btn">
                <img src="img/silownia.svg" alt="Логотип Siłownia" />
                <h3>Siłownia</h3>
                <p>Nielimitowany dostęp do sprzętu premium.</p>
              </button>
            </li>
            <li class="uslugi-section__item">
              <button class="uslugi-section__btn">
                <img src="img/masaz.svg" alt="Логотип Masaż" />
                <h3>Masaż</h3>
                <p>Zrelaksuj ciało po treningu.</p>
              </button>
            </li>
            <li class="uslugi-section__item">
              <button class="uslugi-section__btn">
                <img src="img/sauna.svg" alt="Логотип Sauna" />
                <h3>Sauna</h3>
                <p>Zadbaj o regenerację</p>
              </button>
            </li>
            <li class="uslugi-section__item">
              <button class="uslugi-section__btn">
                <img src="img/yoga.svg" alt="Логотип Yoga" />
                <h3>Yoga</h3>
                <p>Odnajdz równowagę</p>
              </button>
            </li>
          </ul>
        </div>
      </section>
      <section class="dlaczego-section">
        <div class="container">
          <h1 class="dlaczego-section__title">Dlaczego my?</h1>
          <ul class="dlaczego-section__list">
            <li class="dlaczego-section__item">
              <button class="dlaczego-section__btn">
                <div class="dlaczego-section__info">
                  <img src="img/sprzet.svg" alt="" />
                  <h3>Nowoczesny sprzęt</h3>
                </div>
                <p>Trenuj na topowych maszynach</p>
              </button>
            </li>
            <li class="dlaczego-section__item">
              <button class="dlaczego-section__btn">
                <div class="dlaczego-section__info">
                  <img src="img/trenerzy.svg" alt="" />
                  <h3>Certyfikowani trenerzy</h3>
                </div>
                <p>Skorzystaj z pomocy ekspertów</p>
              </button>
            </li>
            <li class="dlaczego-section__item">
              <button class="dlaczego-section__btn">
                <div class="dlaczego-section__info">
                  <img src="img/atmosfera.svg" alt="" />
                  <h3>Przyjazna atmosfera</h3>
                </div>
                <p>Trenuj w-swietlej atmosferze</p>
              </button>
            </li>
          </ul>
        </div>
      </section>
      <section class="dolacz-section">
        <div class="container">
          <div class="dolacz-section__fitlife">
            <h1 class="dolacz-section__title">Dołącz do FitLife już dziś!</h1>
            <button class="dolacz-section__btn" type="button">
              Kup abonament
            </button>
          </div>
        </div>
      </section>
      <section class="opinie-section">
        <div class="container">
          <h1 class="opinie-section__title">Opinie naszych klientów</h1>
          <ul class="opinie-section__list">
            <li class="opinie_section__item">
              <button class="opinie-section__btn">
                <div class="opinie-section__info">
                  <img src="img/trenerzy.svg" alt="Логотип Клиента" />
                  <div class="opinie-section__block">
                    <h3>Oleksander Boichuk</h3>
                    <div class="opinie-section__star"></div>
                  </div>
                </div>
                <p class="opinie-section__text">
                  Świetna atmosfera i profesjonalni trenerzy. Polecam każdemu!
                </p>
              </button>
            </li>
            <li class="opinie_section__item">
              <button class="opinie-section__btn">
                <div class="opinie-section__info">
                  <img src="img/trenerzy.svg" alt="Логотип Клиента" />
                  <div class="opinie-section__block">
                    <h3>Kyrylo Klymenko</h3>
                    <div class="opinie-section__star"></div>
                  </div>
                </div>
                <p class="opinie-section__text">
                  Sprzęt najwyższej jakości, a zajęcia grupowe dają mega
                  motywację!
                </p>
              </button>
            </li>
            <li class="opinie_section__item">
              <button class="opinie-section__btn">
                <div class="opinie-section__info">
                  <img src="img/trenerzy.svg" alt="Логотип Клиента" />
                  <div class="opinie-section__block">
                    <h3>Bogdan Kozak</h3>
                    <div class="opinie-section__star"></div>
                  </div>
                </div>
                <p class="opinie-section__text">
                  Uwielbiam to miejsce! Zawsze czysto, przyjaźni ludzie i super
                  energia.
                </p>
              </button>
            </li>
          </ul>
        </div>
      </section>
      <section class="galeria-section">
        <div class="container">
          <h1 class="galeria-section__title">Galeria</h1>
          <div class="galeria-section__slider">
            <ul class="galeria-section__list">
              <li class="galeria-section-item">
                <button
                  class="galeria-section__btn galeria-section__frame1"
                ></button>
              </li>
              <li class="galeria-section-item">
                <button
                  class="galeria-section__btn galeria-section__frame2"
                ></button>
              </li>
              <li class="galeria-section-item">
                <button
                  class="galeria-section__btn galeria-section__frame3"
                ></button>
              </li>
              <li class="galeria-section-item">
                <button
                  class="galeria-section__btn galeria-section__frame4"
                ></button>
              </li>
            </ul>
          </div>
        </div>
      </section>
    </main>
    <?php require_once "blocks/footer.php" ?>
  </body>
  <script src="js/main.js"></script>
</html>
