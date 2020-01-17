<?php
// require 'bdd/bdd-log-ionos.php';
// require 'bdd/connect-bdd.php';
 ?>

 <!DOCTYPE html>
 <html lang="fr">
 	<head>
 		<meta charset="UTF-8">
 		<meta name="viewport" content="width=device-width, initial-scale=0.7">
 		<title>ANY Transfer</title>
    <!-- CDN FontAwesome -->
    <script src="https://kit.fontawesome.com/e6ea10640a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="asset/css/bg.css">
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="icon" href="asset/img/add.png">
 	</head>
 <body>
  <!-- Logo -->
 	<header id="heading">
 		<div class="block-logo">
 			<h1 class="titre"><img class="logo" src="asset/img/logo1.png" alt="logo1.png"></h1>
 		</div>
 	</header>
  <section id="slog">
  <h2
  <span
    id="messageLabel"
    class="txt-rotate slogan"
     data-period="300"
     data-rotate='[ " Send any files,", "to anyone." ]'></span>
</h2>
  </section>
  <!-- UploadForm -->
  <section id="form-upload">
    <form class="add-files" id="formulaire" action="page/upload.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="Taile_Octet">
        <br><br>
        <div class="add-file-sec">
          <label class="add-file-block" for="addin-file">
            <div class="butn-add">
              <i class="fas fa-plus"></i>
            </div>
            <div class="stape-file">
              <p class="ajouter">Add Files</p>
            </div>
          </label>
          <input id="addin-file" type="file" type="hidden" name="file-add" value="test" multiple files>
        </div>
        <br>
        <div class="name-user" id="nom">
        </div>
        <br><br>
        <div class="sendTo">
          <input type="email" name="send-to" value="" placeholder="SEND TO" id="email">
        </div>
        <br><br>
        <div class="yourMail">
          <input type="email" name="yourMail" value="" class="email" placeholder="YOUR E-MAIL">
        </div>
        <br><br>
        <div class="message">
          <textarea name="message" value="" id="message" placeholder="MESSAGE"></textarea>
        </div>
        <br>
        <div class="envoyer-upload">
          <input type="submit" name="transfer" value="Transfer"></input>
        </div>
        <br><br>
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
