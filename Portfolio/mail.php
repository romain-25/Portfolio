  
<?php 
$retour = mail('contact@romain-rouabah.fr', 'Envoi depuis la page Contact', $_POST['message']);
if ($retour) {
        echo "Votre message a été envoyé!";
}