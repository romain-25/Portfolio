  
<?php 
$retour = mail('contact@romain-rouabah.fr', 'Envoi depuis la page Contact', $_POST['message'], $_POST['email']);
if ($retour) {
        echo "Votre message a été envoyé!";
}