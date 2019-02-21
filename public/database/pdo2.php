<?php


/**
 * 1. definition ds infos de BDD
 */
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

// Type de la BDD
$db_type = "mysql";


/**
 * 2. connexion a la BDD
 */
//$db_info = "mysql:host=127.0.0.1;dbname=webpizza";

$db_info = "$db_type:host=$db_host;dbname=$db_schema;charset=utf8";
// $db = new PDO($db_info, $db_user, $db_pass);

try {
    $db = new PDO($db_info, $db_user, $db_pass);
} catch (PDOException $e) {
    print "Erreur !: " . $e-> getMessage() . "<br>";
    echo __FILE__. " à la ligne : " .__LINE__;
    die(); // le programme s arrete ici
}

// definition du Charset
// exec est la fonction de la classe PDO
//$db->exec("set names utf8"); // a faire si on ne met pas le charset dans $db_info

/**
 * 3. Une requete
 */

 // on recupere l id depuis l url
$id = isset($_GET['id']) ? intval($_GET['id']) : null;
// si l id n est pas null on execute la requete
if ($id != null){
    // definition de la requete
    $q_str_ingredients = "SELECT * FROM ingredients WHERE id=:mavarpdo";

    // stockage de la requete dans la memoire PDO
    //$q_ingredients = $db->query($q_str_ingredients);
    $q_ingredients = $db->prepare($q_str_ingredients);

    //  var_dump($q_ingredients);

    // execution de la requete
    // fetchALL = est une methode d une fonction pour tout afficher
    // fetch = est une methode d une fonction pour afficher le premier enregistrement
    // $r_ingredients = $q_ingredients->fetchALL(); 
    // $q_ingredients->execute([
    //     "mavarpdo" => $id
    // ]); 
    $q_ingredients->bindValue(":mavarpdo", $id, PDO::PARAM_INT); 
    $q_ingredients->execute(); 
    $r_ingredients = $q_ingredients->fetchALL(); 
    //  var_dump($r_ingredients);
}else {
    // si l id es null on declare $r_ingredients avec un tableau vide
    $r_ingredients=[];
}

 ?>

 <table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nom</th>
            <th>Vegan ?</th>
            <th>Halal ?</th>
        </tr>
    </thead>    
    <tbody>

        <?php foreach($r_ingredients as $key => $line): ?>
        <tr>
            <!-- <td><?php echo $line['id'] ?></td> -->
            <td><?= $line['id']; ?></td>
            <td><?= $line['name'] ?></td>
            <td><?= $line['vegan_compliance'] ?></td>
            <td><?= $line['halal_compliance'] ?></td>
        </tr>    
        <?php endforeach; ?>
    </tbody>
</table>

<?php
// fermeture de la connexion PDO
$db = null;