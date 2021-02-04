<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kemal Ridzal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&family=Roboto+Mono:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/lightgallery.min.css">    

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/swiper.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

</head>
<body>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    



    <header class="site-navbar py-3" role="banner">

      <div class="container-fluid">
        <div class="row align-items-center">

          <div class="col-6 col-xl-2" data-aos="fade-down">
            <h1 class="mb-0"><a href="index.html" class="text-white h2 mb-0">Kemal Ridzal</a></h1>
          </div>
          <div class="col-10 col-md-8 d-none d-xl-block" data-aos="fade-down">
            <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li class="has-children">
                  <a href="single.php">Portfolio</a>
                  <ul class="dropdown">
                    <li><a href="single.php?id=1">Gallery 1</a></li>
                    <li><a href="single.php?id=2">Gallery 2</a></li>
                    <li><a href="single.php?id=3">Gallery 3</a></li>                                
                   
                  </ul>
                </li>              
                <li class='active'><a href="contact.php">Contact</a></li>
              </ul>
            </nav>
          </div>

          <div class="col-6 col-xl-2 text-right" data-aos="fade-down">
            <div class="d-none d-xl-inline-block">
              <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
                <li>
                  <a href="https://www.facebook.com/Kemal-Ridzal-626316351163054" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                </li>
                  
                <li>
                  <a href="https://www.instagram.com/kemalridzal/" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                </li>
                 
              </ul>
            </div>

            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3 hamburger-menu"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>



   
    <div class="site-section"  data-aos="fade">
      <div class="container">

        <div class="row justify-content-center">

          <div class="col-md-7">
            <div class="row mb-5">
              <div class="col-12 ">
                <h2 class="site-section-heading text-center">Contact</h2>
              </div>
            </div>
          </div>

        </div>
        
        <div class="row">
          <div class="col-lg-8 mb-5">
          <?php
          if(isset($_GET['success'])){
            echo "<div class='success'>
              Message sent successfully!
            </div>";
          }
          ?>
            <form action="php/mailer.php" method='POST'>


              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-white" for="fname">First Name</label>
                  <input type="text" name='fname' id="fname" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="text-white" for="lname">Last Name</label>
                  <input type="text" id="lname" name='lname' class="form-control">
                </div>
              </div>

              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-white" for="email">Email</label> 
                  <input type="email" id="email" name='email' class="form-control">
                </div>
              </div>

              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-white" for="subject">Subject</label> 
                  <input type="subject" id="subject" name='subject' class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-white" for="message">Message</label> 
                  <textarea name="message" id="message" name='message' cols="30" rows="7" class="form-control" placeholder="Write your questions here..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-primary py-2 px-4 text-white">
                </div>
              </div>


            </form>
          </div>
          <div class="col-lg-3 ml-auto">
            <div class="mb-3">
        
              <p class="mb-0 font-weight-bold text-white">Email Address</p>
              <p class="mb-0"><a href="#">kemal_ridzal@hotmail.com</a></p>

            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="footer py-4">
      <div class="container-fluid text-center">
         
      </div>
    </div>

    

    
    
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/swiper.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/picturefill.min.js"></script>
  <script src="js/lightgallery-all.min.js"></script>
  <script src="js/jquery.mousewheel.min.js"></script>

  <script src="js/main.js"></script>
  
  <script>
    $(document).ready(function(){
      $('#lightgallery').lightGallery();
    });
  </script>

</body>
</html>