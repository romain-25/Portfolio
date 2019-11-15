  
<?php 
$retour = mail('romain.r@codeur.online', 'Envoi depuis la page Contact', $_POST['message']);
if ($retour) {
        echo "Votre message a été envoyé!";
}