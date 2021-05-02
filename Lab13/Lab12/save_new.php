<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/styles/style.css">
    <title> </title>
</head>

<body>
    <?php

    $link = mysqli_connect("localhost", "root", "", "library");

    $query = mysqli_query($link, "insert into books set author = '".$_POST['author']."',title='".$_POST['title']."',cover='".$_POST['cover']."', link = '".$_POST['link']."'");

    if(mysqli_affected_rows($link)>0)
    {
        echo "Table was updated succesfully";
        header("Location:index.php");
        exit();
    }

    else
    {
        echo ("An error occured while adding a new record");
    }

    ?>
    <br>
    <a href="index.php"> List of books </a>
</body>

</html>
