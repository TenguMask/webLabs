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
    $rows = "select author, title, cover, link from books where id= ".$_GET['id'];
    $result = mysqli_query($link, $rows);
    while ($stroka= mysqli_fetch_array($result )){
        $id=$_GET['id'];
        #echo "id = $id";
        $author = $stroka['author'];
        #echo "<br> auth = $author";
        $title = $stroka['title'];
        # echo "<br> tit = $title";
        $cover = $stroka['cover'];
        $link = $stroka['link'];
    }

    ?>
        <form action="save_edit.php" method="GET">
            <div id="labels"> Title
                <br> Author

                <br>
           Cover
                <br>
            Link</div>
            <div id="inputs">
                <input name="title" value="<?php echo$title; ?>">
                <br>
                <input name="author" value="<?php echo$author; ?>">
                <br>
                <input name="cover" value="<?php echo$cover; ?>">
                <br>
                <input name="link" value="<?php echo$link; ?>">
                <br>
                <input type="hidden" name="id" value="<?php echo$id; ?>">
            </div>
            <div id="filler"> </div>
            <div id="save">
                <input type="submit" id="saveb" name="" value="Save"> </div>
        </form>
        <br>
        <br>
        <br>
        <br>
          <br>   <br>
        <br><a href="index.php"> List of books </a> </body>

</html>
