<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="assets/style.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Audiowide&display=swap" rel="stylesheet">
        <title>Les tables</title>
    </head>
    <body>
        <a id="titre" href="index.php">LES TABLES</a>
        <div class="fond_page2">
            <?php
                if(isset($_POST['table'])){
                    $table = ($_POST['table']);
                }
                for ($multiple=1; $multiple < 16 ; $multiple++) { 
                    echo "<p>". $table. " x ". $multiple. " = ". $table * $multiple. "</p>";
                }
                $_SESSION['nombre_choisi'] = $_POST['table'];
            ?>
            <form action="revision.php">
                <input class="bouton_valider" type="submit" value="Testez-vous !">
            </form>
        </div>
    </body>
</html>