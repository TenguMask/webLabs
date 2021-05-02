<?php
session_start();
?>
    <?php
if(!isset($_POST['log'])){
    include ("auth.php");
}
else{
    $link = mysqli_connect("localhost", "root", "", "auth");
    $res = mysqli_query($link, "select * from auth where login = '". $_POST['login']."' AND pass='".$_POST['pass']."'");
    if (mysqli_num_rows($res)!=1){
        echo "Sumn is wrong";
    }
else{
    echo "aight";
    $_SESSION['login']=$_POST['login'];
    $_SESSION['pass']=$_POST['pass'];
    header("Location: index.php");
}
    mysqli_close($link);
}
?>
