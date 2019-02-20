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
$db_schema = "webpizza";


// 2. connexion a la BDD
$db = mysqli_connect($db_host, $db_user, $db_pass, $db_schema);

//var_dump($db);
// print_r($db);

// 3. une requete

// Query ingredient
$q_ingredients = "SELECT id,name FROM ingredients where name like '%o%' ORDER BY name DESC";
// Result ingredient
$r_ingredients = mysqli_query($db, $q_ingredients);
// var_dump($r_ingredients);

// 4. Traitement du resultat

// data ingredients

// liste des ingredients avec ID
//$d_ingredients = mysqli_fetch_all($r_ingredients);

// liste des ingredients avec nom de colonne
$d_ingredients = mysqli_fetch_all($r_ingredients, MYSQLI_ASSOC);
// print_r($d_ingredients);
?>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nom</th>
        </tr>
    </thead>    
    <tbody>

        <?php foreach($d_ingredients as $key => $line): ?>
        <tr>
            <!-- <td><?php echo $line['id'] ?></td> -->
            <td><?= $line['id']; ?></td>
            <td><?= utf8_encode($line['name']) ?></td>
        </tr>    
        <?php endforeach; ?>
    </tbody>
</table>