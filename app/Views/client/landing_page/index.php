<!doctype html>
<html lang="en">
  <head>
    <title>JobBoard &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Free-Template.co" />
    <link rel="shortcut icon" href="ftco-32x32.png">
    
    <link rel="stylesheet" href="<?= base_url(LANDINGPAGE_ASSETS_RELATIVE_PATH) . 'css/custom-bs.css'?>">
    <link rel="stylesheet" href="<?= base_url(LANDINGPAGE_ASSETS_RELATIVE_PATH) . 'css/jquery.fancybox.min.css' ?>">
    <link rel="stylesheet" href="<?= base_url(LANDINGPAGE_ASSETS_RELATIVE_PATH) . 'css/bootstrap-select.min.css' ?>">
    <link rel="stylesheet" href="<?= base_url(LANDINGPAGE_ASSETS_RELATIVE_PATH) . 'fonts/icomoon/style.css' ?>">
    <link rel="stylesheet" href="<?= base_url(LANDINGPAGE_ASSETS_RELATIVE_PATH) . 'fonts/line-icons/style.css' ?>">
    <link rel="stylesheet" href="<?= base_url(LANDINGPAGE_ASSETS_RELATIVE_PATH) . 'css/owl.carousel.min.css' ?>">
    <link rel="stylesheet" href="<?= base_url(LANDINGPAGE_ASSETS_RELATIVE_PATH) . 'css/animate.min.css' ?>">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?= base_url(LANDINGPAGE_ASSETS_RELATIVE_PATH) . 'css/style.css' ?>">
  </head>
  <body id="top">

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
    

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    

    <!-- NAVBAR -->
    <header class="site-navbar mt-3">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="site-logo col-6"> 
            <img src="<?= base_url(LANDINGPAGE_ASSETS_RELATIVE_PATH) . 'images/azmi/abc.png'?>" alt="azmi">
          </div>

          <nav class="mx-auto site-navigation">
            <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
              <li><a href="<?= base_url(LANDINGPAGE_ROOT_PATH) . 'index'?>" class="nav-link active">Home</a></li>
              <li><a href="<?= base_url(LANDINGPAGE_ROOT_PATH) . 'about'?>">About</a></li>
              <li><a href="<?= base_url(LANDINGPAGE_ROOT_PATH) . 'services'?>">Services</a></li>
              <li class="has-children">
                <a href="">Pages</a>
                <ul class="dropdown">
                  <li><a href="<?= base_url(LANDINGPAGE_ROOT_PATH) . 'gallery'?>">Gallery</a></li>
                  <li><a href="<?= base_url(LANDINGPAGE_ROOT_PATH) . 'news'?>">News</a></li>
                </ul>
              </li>
              <li class="has-children">
                <a href="#">Jobs</a>
                <ul class="dropdown">
                  <li><a href="<?= base_url(LANDINGPAGE_ROOT_PATH) . 'career'?>">Career</a></li>
                  <li><a href="<?= base_url(LANDINGPAGE_ROOT_PATH) . 'login'?>">User Profile</a></li>
                </ul>
              </li>
              <li><a href="<?= base_url(LANDINGPAGE_ROOT_PATH) . 'contact'?>">Contact</a></li>

              
              <li class="d-lg-none"><a href="<?= base_url(LANDINGPAGE_ROOT_PATH) . 'login'?>">Log In</a></li>
            </ul>
          </nav>
          
          <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
            <div class="ml-auto">
              <a href="<?= base_url(LANDINGPAGE_ROOT_PATH) . 'login'?>" class="btn btn-warning border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Log In</a>
            </div>
            <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
          </div>

        </div>
      </div>
    </header>

    <!-- HOME -->
    <section class="home-section section-hero fixed overlay bg-image" style="background-image: url('<?= base_url(LANDINGPAGE_ASSETS_RELATIVE_PATH) . 'images/azmi/gmf.jpg'?>');" id="home-section">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="mb-5 text-center">
              <p>Welcome</p>
              <h1 class="text-white font-weight-bold">Garuda Daya Pratama Sejahtera</h1>
            </div>
            <form method="post" class="search-jobs-form">
              <div class="row h-100 align-items-center justify-content-center">
                
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <button type="submit" class="btn btn-outline-warning btn-lg btn-block text-white">Discover</button>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 popular-keywords">
                  
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <a href="#next" class="scroll-button smoothscroll">
        <span class=" icon-keyboard_arrow_down"></span>
      </a>

    </section>

    <!-- #003679; -->
    
    <section class="py-5 bg-image overlay-primary fixed overlay" id="next" style="background-image: url('<?= base_url(LANDINGPAGE_ASSETS_RELATIVE_PATH) . 'images/azmi/hanggar2.jpeg'?>');">
      <div class="container">
        <div class="row mb-6 justify-content-center">
          <div class="col-md-12 text-center">
            <h2 class="section-title mb-3 text-white">Our Services</h2>
            <p class="lead text-white">To achieve the company's vision and mission, we have values ​​that are cultural and must be shared by all members in the organization. These values ​​are expected to make the organization continue to withstand changes and challenges from outside business.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a data-fancybox data-ratio="2" href="https://vimeo.com/317571768" class="block__96788">
              <!-- <span class="play-icon"><span class="icon-play"></span></span> -->
              <img src="<?= base_url(LANDINGPAGE_ASSETS_RELATIVE_PATH) . 'images/sq_img_6.jpg'?>" alt="Image" class="img-fluid img-shadow">
            </a>
          </div>
          <div class="col-lg-5 ml-auto">
            <h2 class="section-title mb-3">Your PRIME Partners</h2>
            <p class="lead">We will become your strategic business partner by upholding the company's values. Become a professional and integrated partner to produce quality services.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section pt-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0 order-md-2">
            <a data-fancybox data-ratio="2" href="https://vimeo.com/317571768" class="block__96788">
              <span class="play-icon"><span class="icon-play"></span></span>
              <img src="<?= base_url(LANDINGPAGE_ASSETS_RELATIVE_PATH) . 'images/sq_img_8.jpg'?>" alt="Image" class="img-fluid img-shadow">
            </a>
          </div>
          <div class="col-lg-5 mr-auto order-md-1  mb-5 mb-lg-0">
            <h2 class="section-title mb-3">JobBoard For Workers</h2>
            <p class="lead">Eveniet voluptatibus voluptates suscipit minima, cum voluptatum ut dolor, sed facere corporis qui, ea quisquam quis odit minus nulla vitae. Sit, voluptatem.</p>
            <p>Ipsum harum assumenda in eum vel eveniet numquam, cumque vero vitae enim cupiditate deserunt eligendi officia modi consectetur. Expedita tempora quos nobis earum hic ex asperiores quisquam optio nostrum sit!</p>
          </div>
        </div>
      </div>
    </section>

    

    



    <footer class="site-footer">

      <a href="#top" class="smoothscroll scroll-top">
        <span class="icon-keyboard_arrow_up"></span>
      </a>

      <div class="container">
        <div class="row mb-5">
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Search Trending</h3>
            <ul class="list-unstyled">
              <li><a href="#">Web Design</a></li>
              <li><a href="#">Graphic Design</a></li>
              <li><a href="#">Web Developers</a></li>
              <li><a href="#">Python</a></li>
              <li><a href="#">HTML5</a></li>
              <li><a href="#">CSS3</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Company</h3>
            <ul class="list-unstyled">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Career</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Resources</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Support</h3>
            <ul class="list-unstyled">
              <li><a href="#">Support</a></li>
              <li><a href="#">Privacy</a></li>
              <li><a href="#">Terms of Service</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Contact Us</h3>
            <div class="footer-social">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-instagram"></span></a>
              <a href="#"><span class="icon-linkedin"></span></a>
            </div>
          </div>
        </div>

        <div class="row text-center">
          <div class="col-12">
            <p class="copyright"><small>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small></p>
          </div>
        </div>
      </div>
    </footer>
  
  </div>

    <!-- SCRIPTS -->
    <script src="<?= base_url(LANDINGPAGE_ASSETS_RELATIVE_PATH) . 'js/jquery.min.js'?>"></script>
    <script src="<?= base_url(LANDINGPAGE_ASSETS_RELATIVE_PATH) . 'js/bootstrap.bundle.min.js'?>"></script>
    <script src="<?= base_url(LANDINGPAGE_ASSETS_RELATIVE_PATH) . 'js/isotope.pkgd.min.js'?>"></script>
    <script src="<?= base_url(LANDINGPAGE_ASSETS_RELATIVE_PATH) . 'js/stickyfill.min.js'?>"></script>
    <script src="<?= base_url(LANDINGPAGE_ASSETS_RELATIVE_PATH) . 'js/jquery.fancybox.min.js'?>"></script>
    <script src="<?= base_url(LANDINGPAGE_ASSETS_RELATIVE_PATH) . 'js/jquery.easing.1.3.js'?>"></script>
    
    <script src="<?= base_url(LANDINGPAGE_ASSETS_RELATIVE_PATH) . 'js/jquery.waypoints.min.js'?>"></script>
    <script src="<?= base_url(LANDINGPAGE_ASSETS_RELATIVE_PATH) . 'js/jquery.animateNumber.min.js'?>"></script>
    <script src="<?= base_url(LANDINGPAGE_ASSETS_RELATIVE_PATH) . 'js/owl.carousel.min.js'?>"></script>
    
    <script src="<?= base_url(LANDINGPAGE_ASSETS_RELATIVE_PATH) . 'js/bootstrap-select.min.js'?>"></script>
    
    <script src="<?= base_url(LANDINGPAGE_ASSETS_RELATIVE_PATH) . 'js/custom.js'?>"></script>

     
  </body>
</html>