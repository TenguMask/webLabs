<!doctype>
<html>

<head>
    <link rel="stylesheet" href="style.css"> </head>
<?php
error_reporting(E_ERROR | E_PARSE);

$link = $_POST['link'];

$uploaddir = 'C:/wamp64/www/Lab11/images/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
$im = basename($_FILES['userfile']['name']);

if (strlen($link) > 0)
{
    echo "<body style='background-image: url(  $link); background-size: cover;'> ";

}
elseif (strlen($im) > 0)
{
    echo "<body style='background-image: url( /images/$im  ); background-size: cover;'> ";

}

$table_name = $_POST['table_name'];
$bgcolor = 'White';
$border;
$rows;
$columns;
$content;

if (!empty($_POST['bgcol']))
{
    $bgcolor = $_POST['bgcol'];
}
else
{
}

if (isset($_POST['border']))
{
    $border = "border: 1px solid black;
    border-collapse: collapse;";
}
else
{
    $border = "0px solid black;";
}

$rows = $_POST['rows'];
$columns = $_POST['cols'];

echo "$table_name <br>";
if ($_POST['rad'] == '1')
{
    echo "<table style='background-color: $bgcolor;  $border;   '>";
    for ($i = 1;$i <= $rows;$i++)
    {
        echo "<tr style='$border;'> ";
        for ($j = 1;$j <= $columns;$j++)
        {
            echo "<td style='$border;'> Рядок $i <br> Стовпець $j </td>";
        }
        echo "</tr> ";
    }

    echo "</table>";
}

if ($_POST['rad'] == '2')
{
    echo "<table style='background-color: $bgcolor;  $border;  '>";
    for ($i = 1;$i <= $rows;$i++)
    {
        echo "<tr style='$border;'> ";
        for ($j = 1;$j <= $columns;$j++)
        {
            echo "<td style='$border;'> 0 </td>";
        }
        echo "</tr> ";
    }

    echo "</table>";
}

if ($_POST['rad'] == '3')
{
    echo "<table style='background-color: $bgcolor;  $border;  '>";
    for ($i = 1;$i <= $rows;$i++)
    {
        echo "<tr style='$border;'> ";
        for ($j = 1;$j <= $columns;$j++)
        {
            echo "<td style='$border;'>
          &nbsp;  </td>";
        }
        echo "</tr> ";
    }

    echo "</table>";
}

if ($_POST['rad'] == '4')
{
    echo "<table style='background-color: $bgcolor;  $border;  '>";
    for ($i = 1;$i <= $rows;$i++)
    {
        echo "<tr style='$border;'> ";
        for ($j = 1;$j <= $columns;$j++)
        {
            echo "<td style='$border;'>
       *  </td>";
        }
        echo "</tr> ";
    }

    echo "</table>";
}

print "<pre>";
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile))
{
    print "\n The image was succesfully uploaded";
    #print_r($_FILES);

}
else
{
    print "\n The image was not uploaded";
    #print_r($_FILES);

}
print "</pre>";

?> </body>

</html>
