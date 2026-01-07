<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FitLife|Zarejestruj</title>
    <link rel="stylesheet" href="../css/main.min.css" />
    <link rel="icon" type="image/svg" href="/FitLife/img/logo.svg" />
  </head>
  <body>
    <?php require_once "../blocks/header-pages.php" ?>
    <main>
      <section class="account-section">
        <div class="container">
          <div class="account-section__container">
            <form class="account-section__form" method="post" action="/FITLIFE-BACKEND/auth/register.php">
              <div class="account-section__pierwsza">
                <img src="../img/fitlife_logo.svg" alt="Логотип FitLife" />
                <h1>Zarejestruj</h1>
              </div>
              <input type="email" name="email" placeholder="Adres e-mail" required/>
              <input type="password" name="password" placeholder="Haslo" required/>
              <div class="account-section__button">
                <button class="account-section__btn" type="submit">Zarejestruj się</button>
              </div>
              <a href="/FITLIFE-BACKEND/pages/zaloguj.php">Masz konto? Zaloguj się</a>
            </form>
          </div>
        </div>
      </section>
    </main>
    <?php require_once "../blocks/footer-pages.php" ?>
    <script src="/FITLIFE-BACKEND/js/konto.js"></script>
    <script src="/FITLIFE-BACKEND/js/modal.js"></script>
  </body>
</html>
