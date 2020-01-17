<?php if ($_SERVER['REQUEST_METHOD'] ==  "POST"): ?>

<?php
require '../bdd/bdd-log-ionos.php';
// require '../bdd/bdd-log.php';

$uploadfile=$_FILES["file-add"]["tmp_name"];
$folder="upload/";

$folder_user = mkdir($folder.$_POST['yourMail'], 0777);
$path_folder_user = $_POST['yourMail'] . "/";
echo $_POST['yourMail'];
$file_name=$_FILES["file-add"]["name"];
move_uploaded_file($_FILES["file-add"]["tmp_name"], $folder.$path_folder_user.$_FILES["file-add"]["name"]);

$zip = new ZipArchive(); // Load zip library
$zip_name =$folder . $_FILES['file-add']['name'] . ".zip"; // Zip name
if($zip->open($zip_name, ZIPARCHIVE::CREATE)!==TRUE)
{
echo "Sorry ZIP creation failed at this time";
}else {
  if ($zip->addFile($folder . $path_folder_user . $_FILES['file-add']['name'], $file_name)) {
  $zip->close();
  function rrmdir($dir) {
    if (is_dir($dir)) { // si le paramètre est un dossier
        $objects = scandir($dir); // on scan le dossier pour récupérer ses objets
        foreach ($objects as $object) { // pour chaque objet
            if ($object != "." && $object != "..") { // si l'objet n'est pas . ou ..
                  if (filetype($dir."/".$object) == "dir") rmdir($dir."/".$object);else unlink($dir."/".$object); // on supprime l'objet
                }
        }
        reset($objects); // on remet à 0 les objets
        rmdir($dir); // on supprime le dossier
        }
    }

    rrmdir($folder.$_POST['yourMail']);




  }
  // $zip->addFile($folder . $path_folder_user . $_FILES['file-add']['name'], $file_name);
require 'mail.php';
}
 ?>

 <!DOCTYPE html>
 <html lang="fr">
 	<head>
 		<meta charset="UTF-8">
 		<meta name="viewport" content="width=device-width, initial-scale=1">
 		<meta name="description" content="AnyZip">
 		<title>Any-Transfert-noMVC</title>
    <link rel="stylesheet" href="../asset/css/bg.css">
    <link rel="stylesheet" href="../asset/css/style.css">
 	</head>
 <body>
  <!-- Logo -->
 	<header id="heading">
 		<div class="block-logo">
 			<h1 class="titre"><img class="logo" src="../asset/img/logo1.png" alt="logo1.png"></h1>
 		</div>
 	</header>
  <!-- UploadForm -->
  <section id="form-upload-again">
    <form class="new-add-files" action="../index.php" method="post">
      <div class="text-dl-ready">
        <h3>Vous avez terminé !</h3>
        <p>L'e-mail de téléchargement a été envoyé, votre transfert sera disponible pendant 7 jours</p>
      </div>
        <div class="upload-again">
          <input id="other" type="submit" name="unautre" value="Un autre ?">
        </div>
      </form>
  </section>
  <!-- Copyright -->
  <footer>
  </footer>
  <!-- Background -->
  <div id='stars'></div>
  <div id='stars2'></div>
  <div id='stars3'></div>
  <!-- Appel Script JS -->
  <script src="asset/js/slogan.js"></script>
  <!-- <script src="asset/js/script.js"></script> -->
  </body>
</html>
<?php endif; ?>
