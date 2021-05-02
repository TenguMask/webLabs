<!doctype html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8"> </head>
<?php
     error_reporting(E_ERROR | E_PARSE);
    if ($_POST['choice']=='addition'){
        $c=$_POST['a']+$_POST['b'];
        echo "addition <br> ";
        echo "sum = $c";
    }
    else
    {
        $c=$_POST['a'] * $_POST['b'];
        echo "multiplying <br>";
        echo "product = $c";
    }
     echo "<br>
    <a href='/1-3.html'> Перейти на попередню сторінку</a>";

    ?>
