<?php

// 1. definition ds infos de BDD

// nom du serveur BDD
$db_host = "127.0.0.1"; // ou "localhost"

// port de BDD
$db_port = "3306";

// nom uilisateur de BDD
$db_user = "root";

// mot de passe de l utilisateur de BDD
$db_pass = "";

// nom de la base de donnees
$db_schema = "webpizzza";

// Type de la BDD
$db_type = "mysql";

// 2. connexion a la BDD
//$db_info = "mysql:host=127.0.0.1;dbname=webpizza";

$db_info = "$db_type:host=$db_host;dbname=$db_schema";
// $db = new PDO($db_info, $db_user, $db_pass);

try {
    $db = new PDO($db_info, $db_user, $db_pass);
} catch (PDOException $e) {
    print "Erreur !: " . $e-> getMessage() . "<br>";
    echo __FILE__. " à la ligne : " .__LINE__;
    die();
}

