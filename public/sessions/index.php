<?php
// 1. On démarre la session
session_start();

// 3. Récupération des données du formulaire
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $data = isset($_POST['data']) ? trim($_POST['data']) : null;

    // 4. Controlle du champ
    // Declare la variable $message
    $message = null;

    if (preg_match("/[a-z-]+/", $data)) {
        $message = "C'est une chaine :-)";
    } else {
        $message = "Ce n'est pas une chaine :'(";
    }

    // 5. Ajout du message dans la $_SESSION 
    $_SESSION['flashmsg'] = $message;

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-4 offset-4">
                <!-- 6. Test de l'existance du message Flash -->
                <?php if (isset($_SESSION['flashmsg'])): ?>
                    <!-- 7. Affichage du message -->
                    <div class="alert alert-success">
                        <?= $_SESSION['flashmsg']?>
                    </div>
                <?php endif; ?>
            
                <!-- 2. Affichage du formulaire -->
                <form method="post">
                    <input type="text" name="data" class="form-control">
                    <button class="btn btn-info btn-block">Send</button>
                </form>

            </div>
        </div>
    </div>

</body>
</html>

<?php
// 8. destruction de message flash
if (isset($_SESSION['flashmsg'])) {
    unset($_SESSION['flashmsg']);
}