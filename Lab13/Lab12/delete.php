<?php

    $link = mysqli_connect("localhost", "root", "", "library");

    $query = mysqli_query($link, "delete from books where id = ".$_GET['id']);

    header('Location: index.php');
?>
