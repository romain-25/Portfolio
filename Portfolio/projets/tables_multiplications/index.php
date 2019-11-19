<?php
session_start();
session_destroy();
$_SESSION = [];
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
        <title>TRAUM∀THISE</title>
    </head>
    <body>
        <main>
            <a id="titre" href="index.php">TRAUM∀THISé</a>
            <div class="fond_page1">
                <h2>Choisissez votre table :</h2>
                <br>
                <form id="formulaire" method="post" action="contenu.php"> 
                    <div id="select">
                        <select id="option" name="table">
                            <?php
                                for ($i=1; $i < 16 ; $i++) { 
                                    echo ' <option class="options" value="'.$i.'">'.$i.'</option>';
                                }
                            ?>
                        </select>
                        <input class="bouton_valider" type="submit" value="Valider">
                    </div>
                    
                </form>
            </div>
        </main>
        <script src="assets/script.js" ></script>
    </body>
</html>