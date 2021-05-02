<?php
 error_reporting(0);
 session_start();
 echo 'Привіт, '.$_SESSION['username'];
 unset($_SESSION['username']); // разреєстрували змінну /*
 echo '<br> Привіт, '.$_SESSION['username'];
 session_destroy(); // руйнуємо сесію
?>
