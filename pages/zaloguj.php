<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FitLife|Zaloguj</title>
    <link rel="stylesheet" href="../css/main.min.css" />
    <link rel="icon" type="image/svg" href="/FitLife/img/logo.svg" />
  </head>
  <body>
    <?php require_once "../blocks/header-pages.php" ?>
    <main>
      <section class="account-section">
        <div class="container">
          <div class="account-section__container">
            <div class="account-section__form">
              <div class="account-section__pierwsza">
                <img src="../img/fitlife_logo.svg" alt="Логотип FitLife" />
                <h1>Zaloguj</h1>
              </div>
              <input type="email" placeholder="Adres e-mail" />
              <input type="password" placeholder="Haslo" />
              <div class="account-section__button">
                <button class="account-section__btn">Zaloguj</button>
              </div>
              <a href="../pages/zarejestruj.html"
                >Nie masz konta? Zarejestruj się</a
              >
            </div>
          </div>
        </div>
      </section>
    </main>
    <?php require_once "../blocks/footer-pages.php" ?>
  </body>
</html>
