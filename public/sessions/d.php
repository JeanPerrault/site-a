<?php
include_once "config.php";
if(isset($_SESSION['name'])){
    unset($_SESSION['name']);
}
echo $_SESSION['name'];

header("location: a.php"); // pour rediriger vers le fichier a.php 
exit; //si exit on ne crée pas et on n ecrit pas dans le fichier ci dessous, on s'arrete

$fp = fopen('data.txt', 'w');
fwrite($fp, 'on ecrit le fichier');
fclose($fp);