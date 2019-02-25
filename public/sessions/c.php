<?php
include_once "config.php";

include_once "menu.php";

if(isset($_SESSION['test'])){
    unset($_SESSION['test']); // unset  pour detruire une session
}
?>

<h1>Fichier C</h1>