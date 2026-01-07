<?php
session_start();
session_unset();
session_destroy();

header('Location: /FITLIFE-BACKEND/index.php');
exit;
