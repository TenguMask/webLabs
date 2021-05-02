<html>
<head>
    <title> Lab13 - L12++ </title>
    <link rel="stylesheet" href="styles/style.css"> </head>
<body>
<?php
session_start();
error_reporting(0);
$link = mysqli_connect("localhost", "root", "", "library");
$link2 = mysqli_connect("localhost", "root", "", "auth");
$rows = mysqli_query($link, "select * from books");
$ress = mysqli_query($link2, "select * from auth where login = '" . $_SESSION['login'] . "' AND pass='" . $_SESSION['pass'] . "'");
?>
        <?php
if (mysqli_num_rows($ress) != 1)
{
    echo "<h1>List of books</h1> <a href=login.php>Add a new book</a>
        <br>";

    echo "<b> <a href='login.php'>Log In</a> </b>";
}
else
{
    echo "<h1>List of books</h1> <a href=new.html>Add a new book</a>
        <br>";
    echo "<b> <a href='logout.php'>Log Out</a></b>";
} ?>
            <br>
            <br>
            <table>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Cover art</th>
                    <th>Download link</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <?php

if (mysqli_num_rows($ress) != 1)
{
    while ($stroka = mysqli_fetch_array($rows))
    {
        echo "<tr>";
        echo "<td>" . $stroka['id'] . "</td>";
        echo "<td>" . $stroka['title'] . "</td>";
        echo "<td>" . $stroka['author'] . "</td>";
        echo "<td>  <img id='dbc' src='" . $stroka['cover'] . "'></td>";
        echo "<td> <a href='" . $stroka['link'] . "'> Download </a></td>";
        echo "<td><a id='locked' href='login.php'> Edit </a> </td>";
        echo "<td><a id='locked' href='login.php'> Delete </a> </td>";
        echo "</tr>";
    }
}
else
{
    while ($stroka = mysqli_fetch_array($rows))
    {
        echo "<tr>";
        echo "<td>" . $stroka['id'] . "</td>";
        echo "<td>" . $stroka['title'] . "</td>";
        echo "<td>" . $stroka['author'] . "</td>";
        echo "<td>  <img id='dbc' src='" . $stroka['cover'] . "'></td>";
        echo "<td> <a href='" . $stroka['link'] . "'> Download </a></td>";
        echo "<td><a href='edit.php?id=" . $stroka['id'] . "'> Edit </a> </td>";
        echo "<td><a href='delete.php?id=" . $stroka['id'] . "'> Delete </a> </td>";
        echo "</tr>";
    }
}

mysqli_close($link);
?>
</table>
</body>
</html>
