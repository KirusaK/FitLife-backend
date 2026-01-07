<?php
session_start();
$current = $_SERVER['REQUEST_URI'];
?>


<header class="header">
      <div class="container">
        <div class="header__container">
          <nav class="header__nav">
            <a href="/FITLIFE-BACKEND/index.php">
              <img
                src="/FitLife/img/fitlife_logo.svg"
                alt="Логотип спортзала FitLife"
              />
            </a>
            <ul class="header__menu">
              <li>
                <a class="header__link <?= strpos($current, 'index.php') !== false ? 'header__link-orange' : '' ?>" href="/FITLIFE-BACKEND/index.php">Strona główna </a>
              </li>
              <li>
                <a
                  class="header__link <?= strpos($current, 'uslugi.php') !== false ? 'header__link-orange' : '' ?>"
                  href="/FITLIFE-BACKEND/pages/uslugi.php"
                  >Usługi</a
                >
              </li>
              <li>
                <a class="header__link <?= strpos($current, 'abonamenty.php') !== false ? 'header__link-orange' : '' ?>" href="/FITLIFE-BACKEND/pages/abonamenty.php"
                  >Abonamenty</a
                >
              </li>
              <li>
                <a class="header__link <?= strpos($current, 'rezerwacja.php') !== false ? 'header__link-orange' : '' ?>" href="/FITLIFE-BACKEND/pages/rezerwacja.php"
                  >Rezerwacja</a
                >
              </li>
              <li>
                <a class="header__link <?= strpos($current, 'kalkulator.php') !== false ? 'header__link-orange' : '' ?>" href="/FITLIFE-BACKEND/pages/kalkulator.php"
                  >Kalkulator Kcal & BZHU</a
                >
              </li>
            </ul>
            <?php if (isset($_SESSION['user_id'])): ?>
              <div class="user-menu">
                <button class="user-menu__btn" id="userMenuBtn">
                  <svg class="user-menu__icon" width="100" height="100">
                    <use href="/FITLIFE-BACKEND/img/icons.svg#icon-user-tie"></use>
                  </svg>
                </button>

                <div class="user-menu__dropdown" id="userMenuDropdown">
                  <a href="/FITLIFE-BACKEND/pages/profile.php">Profil</a>
                  <a href="/FITLIFE-BACKEND/auth/logout.php">Wyloguj się</a>
                </div>
              </div>
            <?php else: ?>
              <a class="header__button" href="/FITLIFE-BACKEND/pages/zaloguj.php">
                Zaloguj się
              </a>
            <?php endif; ?>
          </nav>
        </div>
      </div>
    </header>