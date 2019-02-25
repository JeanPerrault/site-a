<?php
include_once "config.php";

$_SESSION['test'] = "ABC";


// definition de la variable $name
$name = null;

// recuperation de la donnée
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // $name = $_POST['name']; // recupere meme les blancs saisis avant ou apres
    //$name = trim($_POST['name']); // supprime les espaces saisis avant ou apres
    $name = isset($_POST['name']) ? trim($_POST['name']) : null;
}



include_once "menu.php";

?>
<h1>Fichier A</h1>

<form method = "POST">
    <input type="text" name = "name">
    <button type="submit">Valider</button>
</form>

<?php if(!empty($name)): ?>
<div>
     Bonjour <?= $name ?>
</div>
<?php endif; ?>

 
<?= $_SESSION['test']?>