<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width = device-width, initial-scale = 1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Лабораторна робота №10 </title>
</head>

<body>
    <?php

    echo "<h3> VARIABLES </h3>";
    $var1="text test";
    $var2="2021";
    echo "$var1 $var2";


        echo "<br>";
        echo "<br>";

     echo "<h3> If Else structure </h3>";


    $s = "<br>";

    $a=1;
    $b=4;

    echo "a = $a $s b = $b $s";

    if ($a==$b){
        echo "vars r equal";
    }
    else
    {
        echo "vars r not equal";
    }

    echo "<h3> SWITCH - CASE </h3>";

        $vibor = "C++";
 switch ($vibor)
 {
 case "PHP":
 echo "Обрана мова програмування - $vibor. Для її вивчення…";
 break;
 case "C++":
 echo "Обрана мова програмування - $vibor. Для її вивчення...";
 break;
 case "Інша":
 echo "Ви також можете вибрати іншу мову програмування зі списку…";
 break;

 default:
 echo "Ви не вибрали необхідну мову програмування, яку хочете вивчити.";
 break;
 }

    echo "<h3> While Do-While  </h3>";

    $wd1 = 0;
    $wdc=0;
    $sum=0;
    while ($wdc < 10) {
        $wd1 = $wd1 + 1;
        $wdc++;
        $sum=$sum+$wd1;
        echo " $wd1 <br>";
    }
    echo "Sum = $sum";



echo "<h3> FOR </h3>";

 for ($s = 0, $i = 1; $i <= 10; $i++)
 {
 $s = $s + $i;
 }




?> </body>

</html>
