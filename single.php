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
                <li class="has-children active">
                  <a href="single.php">Portfolio</a>
                  <ul class="dropdown">
                    <li><a href="single.php?id=1">Gallery 1</a></li>
                    <li><a href="single.php?id=2">Gallery 2</a></li>
                    <li><a href="single.php?id=3">Gallery 3</a></li>
                  </ul>
                </li>              
                <li><a href="contact.php">Contact</a></li>
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

            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>



    <div class="site-section"  data-aos="fade">
      <div class="container-fluid">

        <div class="row justify-content-center">

        

        </div>
        <div class="row" id="lightgallery">
          <?php

		$galeryId='';
		if(isset($_GET['id'])){
		$galeryId = $_GET['id'];
		}
		  $gallery = glob("images/gallery".$galeryId."/*.*");
		   
          function placeImages($all_files){
          for ($i=0; $i<count($all_files); $i++)
            {
                   
              $image_location = $all_files[$i];
              $supported_format = array('gif','jpg','jpeg','png');
              $ext = strtolower(pathinfo($image_location, PATHINFO_EXTENSION));
              if (in_array($ext, $supported_format))
                  {
                    $image_name = explode  ("/",$image_location);
                    $image_name = $image_name[2];

                    foreach($supported_format as $format){
                      $image_name = str_replace(".".$format,"",$image_name);
                    }


                    echo '<div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="'.$image_location .'" data-sub-html="<h4>'.$image_name .'</h4>
                    <a href="#"><img src="'.$image_location .'" alt="'.$image_location .'" class="img-fluid"></a>
                  </div>';
                  } else {
                      continue;
                  }
            }
      };
      if($galeryId!=''){
      placeImages($gallery);
      }
      else{
        placeImages(glob("images/gallery1/*.*"));
        placeImages(glob("images/gallery2/*.*"));
        placeImages(glob("images/gallery3/*.*"));
      }

          ?>
                
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