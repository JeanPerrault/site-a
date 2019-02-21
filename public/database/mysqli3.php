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
$q_ingredients = "SELECT * FROM ingredients where vegan_compliance like '1' ORDER BY name ASC";
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
            <th>Vegan ?</th>

        </tr>
    </thead>    
    <tbody>

        <?php foreach($d_ingredients as $key => $line): ?>
        <tr>
            <!-- <td><?php echo $line['id'] ?></td> -->
            <td><?= $line['id']; ?></td>
            <td><?= utf8_encode($line['name']) ?></td>
            <td><?= $line['vegan_compliance'] ?></td>

        </tr>    
        <?php endforeach; ?>
    </tbody>
</table>

<?php
// 5. nettoyage du resultat de la requete
mysqli_free_result($r_ingredients);

// 6. fermeture de la connexion à la BDD
mysqli_close($db);