<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="author" content="harrnish">

      <title>Contact | Rouabah Romain | Portfolio</title>

      <!-- stylesheet -->
      <link rel="stylesheet" href="style.css">

      <!-- bootstrap cdns -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

      <!-- google fonts -->
      <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:100,100i,300,300i,400,400i,500,500i,700,700i" rel="stylesheet">

      <!-- for on scroll animations -->
      <link rel="stylesheet" href="animate.css">
      <script src="wow.min.js"></script>

</head>
<body>
      <?php 
            require 'menu.php'
      ?>

            <div class="whitespace"></div>

            <!--------------- hero section starts here say hello 👋 --------------->
            <div class="container">
                  <div class="hero-content">
                        <br><br>

                        <div class="row">
                              <div class="col-lg-8">

                                    <h3 class="wow fadeInUp" data-wow-delay="1s">Contactez moi.</h3><br>
                                    <p class="wow fadeInUp" data-wow-delay="1.2s"></p>

                              </div>
                        </div>
                  </div>
            </div>
            <!--------------- hero section ends here --------------->

            <!-- <div class="whitespace"></div> -->

            <!--------------- form section starts here --------------->
            <div class="container-fluid">
                  <div class="row">
                        <div class="col-lg-8">
                              <form name="contact-form" id="contact-form" method="post" action="mail.php">

                              <ul>

                              <li class="wow fadeInUp" data-wow-delay="1.4s">
                                    <label for="contact-name">Nom :</label>
                                    <div class="textarea">
                                          <input type="text" name="contact-name" id="contact-name" value="" required>
                                    </div>
                              </li>

                              <li class="wow fadeInUp" data-wow-delay="1.6s">
                                    <label for="contact-email">Email :</label>
                                    <div class="textarea">
                                          <input type="email" name="contact-email" id="contact-email" value="" required>
                                    </div>
                              </li>

                              <li class="wow fadeInUp" data-wow-delay="1.6s">
                                    <label for="contact-project">Message :</label>
                                    <div class="textarea">
                                          <textarea type="email" name="contact-project" id="contact-project" rows="6" value="" required>
                                          </textarea>
                                    </div>
                              </li>

                              </ul>

                              <button type="submit" name="contact-submit" id="contact-submit" class="send wow fadeInUp">Envoi</button>

                              </form>
                        </div>
                  </div>
            </div>

            <!--------------- form section ends here --------------->

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
