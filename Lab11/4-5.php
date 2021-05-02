<!doctype html>
<html>

<head>
    <link rel="stylesheet" href="style.css"> </head>
<body>
    <?php
error_reporting(E_ERROR | E_PARSE);
$c = 0;
$pattern = "/[а-яёіА-ЯЁІa-zA-Z]/";
$a = $_POST['name'];
$b = $_POST['last_name'];

if (preg_match($pattern, $b) > 0)
{
    if (strlen($_POST['last_name']) > 1)

    {
        $c++;
    }
    else
    {
        echo " <a href='http://lab11/4.html'> <span id='warn'> Перевірте написання прізвища </span> </a> <br> ";
    }
}
else
{
    echo " <a href='http://lab11/4.html'> <span id='warn'> Перевірте написання прізвища </span> </a> <br> ";
 exit;
}

if (preg_match($pattern, $a) >= 1)
{
    if (strlen($_POST['name']) >= 4)
    {
        $c++;
    }
    else
    {
        echo " <a href='http://lab11/4.html'> <span id='warn'> Перевірте написання імені </span> </a> <br> ";
    }
}
else
{
     echo " <a href='http://lab11/4.html'> <span id='warn'> Перевірте написання імені </span> </a> <br> ";
    exit;
}

if ($c == 2)
{
    if (isset($_POST['will']))
    {
        if (isset($_POST['choice']))
        {
            if ($_POST['choice'] == 'Male')
            {
                echo "Шановний $b $a! Ми раді привітати вас на наших курсах. Сподіваємося на подальше (продовження) співробітництво.";
                echo "<br> <img width=1000px src='https://i.pinimg.com/originals/83/bd/37/83bd37fe1bb51a53b2b60b9e8a2533d5.jpg'";
            }
            else
            {
                echo "Шановнa  $b $a!Ми раді привітати вас на наших курсах. Сподіваємося на подальше
(продовження) співробітництво.";
                echo "<br> <img width=1000px src='https://i.pinimg.com/originals/83/bd/37/83bd37fe1bb51a53b2b60b9e8a2533d5.jpg'";
            }
        }
        else
        {
            echo "$b $a, Ви забули вказати свою стать";
            echo "<br> <a href='/index.php'> Назад <a>";
        }
    }
    else
    {
        echo "$b $a, Ви відмовилися від курсу";

    }
}
else
{
    echo "";
}

?> </body>

</html>
