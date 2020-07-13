
<!DOCTYPE html>
<html lang="fr">
<head>
<nav class="menu">
<ul>
<li><a href="mini-site-routing.php?page=1">accueil</a></li>
<li><a href="mini-site-routing.php?page=2">page 1</a></li>
<li><a href="mini-site-routing.php?page=3">page 2</a></li>
<li><a href="mini-site-rooting.php?page=connexion" >Connexion</a>
</ul>
</nav>
<title> Mini-site-routing </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

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
if($_GET["page"] == 1)
{
echo "<h1> Accueil </h1>";
include('../J08/EXO 2/EXO 02/vitrine-accueil.php');
}
if($_GET["page"] == 2)
{
echo "<h1> Page 1  </h1>";
include('../J08/EXO 2/EXO 02/vitrine-programme.php');
}
if($_GET["page"] == 3)
{
echo "<h1> Page 2  </h1>";
include('../EXO 2/EXO 02/vitrine-contact.php');
var_dump($_GET["page"]); 
}
if($_GET["page"]== Connexion)
{
echo "<h1> Connexion <h1>";
include("connexion.php");
}
?>





</body>
</html>
