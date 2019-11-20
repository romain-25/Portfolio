  
<?php 
$retour = mail('contact@romain-rouabah.fr', 'Envoi depuis la page Contact', $_POST['message']);
if ($retour) {
        echo "Votre message a été envoyé!";
}
?>

<?php
  $host_name = 'db5000227229.hosting-data.io';
  $database = 'dbs221806';
  $user_name = 'dbu447813';
  $password = '<ah&L|4ob@7?t>';
  $connect = new PDO($host_name, $user_name, $password, $database);

  if (mysql_errno()) {
    die('<p>La connexion au serveur MySQL a échoué: '.mysql_error().'</p>');
  } else {
    echo '<p>Connexion au serveur MySQL établie avec succès.</p >';
  }

  $reponse = $connect->query('SELECT * FROM Contact ')
  $donnees = $reponse->fetch();


?>

