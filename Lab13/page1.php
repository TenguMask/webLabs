<?php
 session_start();
 echo 'ID поточної сесії - '. session_id().'<br>';
 $_SESSION['username'] = "NikolaienkoAV";
 echo 'Привіт, '.$_SESSION['username']."<br>";
?> <a href="page2.php"> На наступну сторінку </a>
