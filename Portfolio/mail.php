  

<?php
try {
        $bdd = new PDO("mysql:dbname=dbs221806;host=db5000227229.hosting-data.io;charset=utf8", "dbu447813", "ah&L|4ob@7?t");
} catch (PDOException $e) {
        mail('contact@romain-rouabah.fr');
        echo 'Connexion échouée :' . $e->getMessage();
}

$nom = $_POST['contact-name'];
$mail = $_POST['contact-email'];
$message = $_POST['contact-project'];
$headers = "From: $nom <$mail>\r\nReply-To: $mail";
$emailTo = "contact@romain-rouabah.fr";

        $bdd->query("INSERT INTO Contact (id, name, email, message, date) VALUES (NULL, '{$nom}', '{$mail}', '{$message}', CURRENT_TIMESTAMP)");
?>

<?php 
// $retour = mail('contact@romain-rouabah.fr', 'Envoi depuis la page Contact',$_POST['contact-project']);
// if ($retour) {
//         echo "Votre message a été envoyé!";
// }


$retour = mail($emailTo, "Un message de votre site",$message, $headers);
if ($nom = $email = $message = "") {


  exit();

}
?>
<?php
        include 'contact.php'
?>