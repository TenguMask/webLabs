<?php
 session_start();
 echo $_SESSION['username'].' , ти прийшов на іншу сторінку
цього сайту!';
 echo("<br>");
?>
 <a href="page3.php"> На наступну сторінку </a>
