<!DOCTYPE html>
<html>
<body>
<?php
if ($_POST["Login"] == null or $_POST["Password"] =="2020"){
    echo "<p> Mauvais couple identifiant / mot de passe. </p>";
    echo "<a href=mini-site-rooting.php?page=connexion>Connexion</a>";
}
else if ($_POST["Login"] && $_POST["Password"]){
    echo htmlspecialchars($_POST["Login"]);
    echo htmlspecialchars($_POST["Password"]== 2020);
    session_start();
    $_SESSION["id"] = $_POST["Login"];
    setcookie("id", $_SESSION["id"]);
    header("Location: mini-site-rooting.php?page=1");
}
?>
</body>
</html>