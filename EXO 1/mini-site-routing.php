<!DOCTYPE html>

<html>
<head>
    <title>mini-site-rooting</title>
    <meta charset="utf-8">
    <meta name="viewport" content = "width-device-width, initial-scale-1.0">
</head>
<body>
<nav>
    <a href="mini-site-rooting.php?page=1" >Accueil</a>
    <a href="mini-site-rooting.php?page=2" >Page 2</a>
    <a href="mini-site-rooting.php?page=3" >Page 3</a>
    <a href="mini-site-rooting.php?page=connexion" >Connexion</a>
</nav>

<?php
session_start();
if(!isset($_SESSION["id"])){
    if(isset($_COOKIE["id"])){
        $_SESSION["id"]=$_COOKIE["id"];
    }
    else{
        header("location: mini-site-rooting.php?page=connexion");
    }
}
    if ($_GET["page"] == 1)
    echo "<p> Accueil ! </p>"; 
    else if ($_GET["page"] == 2)
    echo "<p> Page 2 ! </p>";
    else if ($_GET["page"] == 3)
    echo "<p> Page 3 ! <p>"; 
    else if ($_GET["page"] == "connexion")
    include "connexion.php";
    if(isset($_SESSION["id"]))
    echo"<p> Login:" . $_SESSION["id"]
?>
</body>
</html>