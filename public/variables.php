<?php

// declaration d'une variable
$lavariable;

// affectation d'une donnee
$lasecondevariable = "Hello World";

// declaration d'une constante
// le nom de la constante est TOUJOURS ECRIT EN MAJUSCULE
define('NOM_DE_LA_CONSTANTE', "Sa valeur", true); // par defaut le 3eme parametre est à FALSE
define('RED', "#FF0000");
define('UN_ENTIER', 42);



echo $lasecondevariable."<br>";
echo NOM_DE_LA_CONSTANTE."<br>";

echo nom_de_la_constante;
