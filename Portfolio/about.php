<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">

      <title>A propos de moi | Rouabah Romain | Portfolio</title>

      <!-- stylesheet -->
      <link rel="stylesheet" href="assets/css/style.css">

      <!-- bootstrap cdns -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

      <!-- google fonts -->
      <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:100,100i,300,300i,400,400i,500,500i,700,700i" rel="stylesheet">

      <!-- for on scroll animations -->
      <link rel="stylesheet" href="assets/css/animate.css">
      <script src="assets/js/wow.min.js"></script>

</head>
<body>
      <?php 
            require 'menu.php'
      ?>


            <!--------------- hero image starts here --------------->

            <!--------------- hero image ends here --------------->


            <!--------------- hero section starts here --------------->
            <div class="whitespace"></div>

            <div class="container">
                  <div class="hero-content">
                        <br><br>

                        <div class="row">
                              <div class="col-lg-12">
                                    <h3 class="wow fadeInUp" data-wow-delay="1.2s">Ma formation.</h3><br>

                                    <p class="wow fadeInUp">En Septembre 2019, j'ai débuté une formation de développeur / designer web à l'Access Code School à Belfort (90).

                                    L'ACS est un centre de formation dépendant de la Grande École du Numérique.

                                    La formation se base sur une pédagogie par projets. Les étudiants travaillent en groupe ou seuls, sur plusieurs projets pendant 6 mois, puis réalisent un stage en entreprise de 2 mois en fin de formation.</p>
                                    <h3 class="wow fadeInUp" data-wow-delay="1.2s">Moi.</h3><br>
                                    <p class="wow fadeInUp" data-wow-delay="0.2s">J’ai passé un CAP en électrotechnique à Audincourt, puis passé un BAC en électrotechnique en alternance au CFAI d’Exincourt, la partie qui me plaisait dans le domaine de l’électrotechnique était la programmation d’automate et de robot.</p>
                                    <br>
                                    <p class="wow fadeInUp" data-wow-delay="0.2s">J’ai ensuite travaillé 5 ans de VSD en tant que contrôleur qualité, je m’occupai de machine 3d pour le contrôle des pièces et la gestion d’un 10 enne d’opérateur, ce qui m’a appris à apprécier le travail en équipe. J’ai décidé de quitter cet emploi pour cultiver ma passion au sein d’une formation pour en faire mon métier.</p>
                                    <br>
                                    <p class="wow fadeInUp" data-wow-delay="0.2s">L’informatique ma toujours plus, surtout la partie développement, les langages comme javascript et PHP me passionne par leur sens logique.</p>
                                    <br>
                                    <p class="wow fadeInUp" data-wow-delay="0.2s">Je préfère le développement front-end pour la partie visuel et dynamique d’un site.</p>
                                    <h3 class="wow fadeInUp" data-wow-delay="1.2s">Compétences.</h3>
                                    <br>
                                    <p class="wow fadeInUp" data-wow-delay="0.2s">HTML5<br>
                                    CSS3 / Bootstrap / Sass<br>
                                    JavaScript / React.js<br>
                                    Git<br>
                                    Adobe ( Illustrator / Photoshop / XD )<br>
                                    Maquettage / Wireframe<br>
                                    PHP / Symfony<br>
                                    SQL / MySQL<br>
                                    MVC<br>
                                    JMerise / MCD<br>
                                    Wordpress</p>





                              </div>
                        </div>
                  </div>
            </div>
            <!--------------- hero section ends here --------------->

            <div class="whitespace"></div>

            <!--------------- footer starts here --------------->
            <?php 
            include ('footer.php')
            ?>

            <!--------------- footer ends here --------------->

            <br><br><br><br>

      </div>

      <!-- greensock cdn -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>

      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <script type="text/javascript">

      // navigation starts here
      $("#toggle").click(function() {
            $(this).toggleClass('on');
            $("#resize").toggleClass("active");
      });

      $("#resize ul li a").click(function() {
            $(this).toggleClass('on');
            $("#resize").toggleClass("active");
      });

      $(".close-btn").click(function() {
            $(this).toggleClass('on');
            $("#resize").toggleClass("active");
      });

      // navigation ends here

      // nav animation

      TweenMax.from("#brand", 1, {
            delay: 0.4,
            y: 10,
            opacity: 0,
            ease: Expo.easeInOut
      })

      TweenMax.staggerFrom("#menu li a", 1, {
            delay: 0.4,
            opacity: 0,
            ease: Expo.easeInOut
      }, 0.1);

      // nav animation ends

      new WOW().init();


      </script>
</body>
</html>
