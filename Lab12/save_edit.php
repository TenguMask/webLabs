<body>
    <?php

    $link = mysqli_connect("localhost", "root", "", "library");

    $tit = $_GET['title'];
    $aut = $_GET['author'];
    $id= $_GET['id'];
    $cover= $_GET['cover'];
    $dlink= $_GET['link'];

    $query = mysqli_query($link, "update books set author = '".$aut ."' , title = '".$tit."' , cover = '".$cover ."', link='" .$dlink ."'  where id = ".$id );


    if(mysqli_affected_rows($link)>0){
        header("Location:index.php");
        exit();
    }
    else{
        echo "Could not edit the table";
    }

    ?> <a href="index.php">  A A A </a> </body>
