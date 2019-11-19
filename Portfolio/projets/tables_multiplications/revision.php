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
    <title>Révisions</title>
</head>

<body>
    <a id="titre" href="index.php">EXERCICES</a>
    <div class="fond_page3">
        <?php
            if (isset($_SESSION['nombre_choisi'])) {
            $table = $_SESSION['nombre_choisi'];
            echo "<h2>Réviser la table du " . $table . ":</h2><br>";
            if (!isset($_SESSION['nombrealea'])) {
                $alea = rand(1, 15);
                $_SESSION['nombrealea'] = $alea;
                echo "<p>" . $table . " x " . $alea . "</p>";
            } 
            else {
                $operation = $table * $_SESSION['nombrealea'];
                if (isset($_POST['resultat'])) {
                    if ($_POST['resultat'] == $operation) {
                        echo "VRAI";
                    } else {
                        echo "FAUX";
                    };
                    $alea = rand(1, 15);
                    $_SESSION['nombrealea'] = $alea;
                }
                else{
                    "veuillez écrire le résultat.";
                };
            
            };
            };
        ?>        
        <form method="post" action="revision.php">
            <input id="resultat" type="text" name="resultat">
            <input class="bouton_valider2" type="submit" value="GO">
        </form>

        <form method="post" action="index.php">
            <input class="bouton_valider" type="submit" value="Autre table ?">
        </form>
    </div>
</body>
</html>