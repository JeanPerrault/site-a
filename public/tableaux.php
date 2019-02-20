<?php

// tableau Numerique
$numericalArray = array(
    "pomme", // index : 0
    "poire", // index : 1
    "banane" // index : 2
);
    // affiche banane
    echo $numericalArray[2];
    echo "<br>";

// ---

// tableau associatif
$assoArray = array(
    "firstname" => "Bruce",
    "lastname" => "WAYNE"
);
echo $assoArray['firstname'];
echo "<br>";
// echo $assoArray[0]; // ne fonctionne pas
// echo "<br>";

echo "<br>";
echo "------";
echo "<br>";


var_dump($numericalArray);
echo "<br>";
var_dump($assoArray);
echo "<br>";


echo "<br>";
echo "------";
echo "<br>";

print_r($numericalArray);
echo "<br>";

echo "<pre>";
print_r($numericalArray);
echo "</pre>";
echo "<br>";

print_r($assoArray);
echo "<br>";

echo "<pre>";
print_r($assoArray);
echo "</pre>";

echo "<br>";
echo "------";
echo "<br>";

require_once "../public/dump.php";
dump($numericalArray);
