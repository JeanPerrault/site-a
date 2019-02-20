<?php

// operateurs d affectation
    // '='
    $var = "valeur";

// operateurs de comparaison
    // '==' compare les valeurs
    $a == $b;

    // '===' compare les valeuurs ET les types
    $a === $b;

    // '!' different, retourne l inverse
    !true; // vaut false

    // '!=' different de...
    // compare les valeurs
    $a != $b;

    // '!==' strictement different
    // compare les valeurs et les types
    $a !== $b;

    // '>' superieur à... 
    $a > $b;

    // '>=' superieur ou egal à...
    $a >= $b;
    
    // '<' inferieur à... 
    $a < $b;

    // '<=' inferieur ou egal à...
    $a <= $b;

// operateur de concatenation
    // '.'
    $a = "hello";
    $b = "wsorld";

    $a.$b; // "hello world"

// operateur de tableau
    // '=>' on affecte une valeur a un index de tableau
    $montableau = array(
        "fruit_1" => "pomme",
        "fruit_2" => "poire"
    );
    echo "<br>";
    var_dump($montableau);
    echo $montableau['fruit_2'];
    echo "<br>";

// operateur d objet
    // '->'
    $monobjet = (object) array(
        "fruit_1" => "pomme",
        "fruit_2" => "poire"
    );

    var_dump($monobjet);
    echo "<br>";
    echo $monobjet->fruit_2;
    echo "<br>";

// operateurs logiques
    // ET logique
    // 'AND', '&&'
    var_dump(true && true);
    echo "<br>";
    var_dump(true AND true);
    echo "<br>";
    var_dump(true && false);
    echo "<br>";
    var_dump(false && false);
    echo "<br>";
    echo "------";
    echo "<br>";

    // OU logique
    // 'OR', '||'
    var_dump(true || true);
    echo "<br>";
    var_dump(true OR true);
    echo "<br>";
    var_dump(true || false);
    echo "<br>";
    var_dump(false || false);
    echo "<br>";
    echo "------";
    echo "<br>";

    // OU Exclusif
    // 'XOR'   il faut qu il n y en ait qu un qui soit vrai
    var_dump(true XOR true);
    echo "<br>";
    var_dump(true XOR false);
    echo "<br>";
    var_dump(false XOR false);
    echo "<br>";
    echo "------";
    echo "<br>";
