<?php

// declarer une fonction

// function nomdemafonction( string $parametre){ // 'string' pour dire que la fonction attend une chaine comme parametre
//     echo "Je ma pelle ".$parametre."<br>";
// }

// // appel d'une fonction
// nomdemafonction('GRUT');
// nomdemafonction(42);

function nomdemafonction( string $parametre) : string { // 'string' pour que la fonction retourne une chaine 
    return "Je ma pelle ".$parametre."<br>";
}

// appel d'une fonction
echo nomdemafonction('GRUT');
echo nomdemafonction(42);


// Portée d'une variable

$a = 42;

function _A (){
    global $a; // la variable $a est en globale mais ne sait pas aller dans une fonction --> on la met en global dans la fonction
    echo $a;

}

    echo $a;
    _A();