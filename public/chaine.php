<?php

$phpisborn = 1995;

$MIT_Students = ['Andi Gutmans', 'Zeev Suraski'];

// <br> pour un saut de ligne 
// \n pour un saut de ligne dans le code source
echo "Rasmus LERDORF est le créateur de PHP.<br>\n";
echo "A l'origine PHP veut dire Personnal Home Page.<br>\n";
echo "PHP a été créée en ".$phpisborn.".<br>\n";

echo "Quelques années après, ".$MIT_Students[1]." et ".$MIT_Students[0]." reprennent le projet PHP<br>\n";

$a = substr($MIT_Students[1],0,2);
$b = substr($MIT_Students[0],1,2);

echo "Ensemble ils créent la société".$a.$b."<br><br>";

// remplacer une chaine de caracteres
$original_str =  "J'aime les chats !";

// methode 1
echo str_replace("chats", "chiens", $original_str)."<br>";

// methode 2
echo preg_replace("/chat/","chien", $original_str)."<br>";

// methode 3
echo substr_replace($original_str, "chien", 11)."<br>";

// methode 4
$exp_str = explode(" ", $original_str);
// x-debug
var_dump($exp_str);
$exp_str[2] = "chiens";
// refaire la chaine originale
echo join(" ",$exp_str);

// compter le nombre de caracteres d une chaine de caracteres
echo "<br>";
echo "Nombre de caracteres : ". strlen($original_str) ."<br>";
// compter le nombre d entree d un tableau
echo "le tableau \$MIT_Students possede ". count($MIT_Students)." entrees.<br>";
echo count($original_str)."<br>";
