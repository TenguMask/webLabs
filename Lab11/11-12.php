<!doctype html>

<head>
    <link rel="stylesheet" href="style.css"> </head>

<body>
    <form action=""> Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="email">
        <br> Password
        <input type="password">
        <br> Birth day &nbsp;&nbsp;
        <select name="month">
            <?php
$months = array(
    "January" => "1",
    "Feb" => "2",
    "March" => "3",
    "April" => "4",
    "May" => "5",
    "June" => "6",
    "July" => "7",
    "August" => "8",
    "Sept" => "9",
    "Oct" => "10",
    "Nov" => "11",
    "Dec" => "12"
);

foreach ($months as $name => $order)
{
    echo "<option value= $name >  $name  </option> ";
}
?>
        </select>
        <select name="day">
            <?php
for ($i = 1;$i <= 31;$i++)
{
    echo "<option value=$i> $i </option>";
}

?>
        </select>
        <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <input type="submit">
        <input type="reset"> </form>
</body>
