<!DOCTYPE html>
<html lang="fr">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">

      <title>Accueil| Rouabah Romain | Portfolio</title>

      <!-- stylesheet -->
      <link rel="stylesheet" href="assets/css/style.css">

      <!-- bootstrap cdns -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

      <!-- google fonts -->
      <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:100,100i,300,300i,400,400i,500,500i,700,700i" rel="stylesheet">

      <!-- terminal effect -->
      <script src="assets/js/t.min.js"></script>

      <!-- for on scroll animations -->
      <link rel="stylesheet" href="assets/css/animate.css">
      <script src="assets/js/wow.min.js"></script>

</head>
<body>
            <?php 
                  require 'menu.php'
            ?>
            <!--------------- hero section starts here --------------->
            <div class="hero">
                  <div class="header">
                        <!-- <h1 class="line anim-typewriter">Je suis développeur / designer web.</h1> -->
                        <h1>Je suis
  <a href="" class="typewrite" data-period="2000" data-type='[ "développeur web.", "designer web."]'>
    <span class="wrap"></span>
  </a>
</h1>
                  </div>
            </div>

            <div class="scroll-down"></div>
            <!--------------- hero section ends here --------------->



            <!--------------- projects section starts here --------------->
            <div class="container-fluid">
                  <br><br><br>

                  <h6 id='projets'>Mes Projets</h6>

                  <div class="vertical"></div>
                  <br>
            </div>
                  
                  <?php
                        include'projets.php'
                  ?>
            <!--------------- projects section ends here --------------->



            <!--------------- footer starts here --------------->
            <?php 
                  include ('footer.php')
            ?>
            <!--------------- footer ends here --------------->

            <br><br><br><br>

      </div>

      <!-- greensock cdn -->
      <script src="assets/js/script.js"></script>
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
