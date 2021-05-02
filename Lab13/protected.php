<?php session_start();
$link = mysqli_connect("localhost", "root", "", "auth");
$res = mysqli_query($link, "select * from auth where login = '" . $_SESSION['login'] . "' AND pass='" . $_SESSION['pass'] . "'");
if (mysqli_num_rows($res) != 1)
{
    header("Location:login.php");
}
else
{
    echo "GOOD";
    echo "<a href = logout.php> Log out </a>";
}
mysqli_close($link);
?>
