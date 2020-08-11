
<!doctype html>
<html lang="en">
  <head>
    <title>JobBoard &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="<?= base_url(LANDINGPAGE_ASSETS_RELATIVE_PATH) . 'css/custom-bs.css'?>">
    <link rel="stylesheet" href="<?= base_url(LANDINGPAGE_ASSETS_RELATIVE_PATH) . 'css/jquery.fancybox.min.css' ?>">
    <link rel="stylesheet" href="<?= base_url(LANDINGPAGE_ASSETS_RELATIVE_PATH) . 'css/bootstrap-select.min.css' ?>">
    <link rel="stylesheet" href="<?= base_url(LANDINGPAGE_ASSETS_RELATIVE_PATH) . 'fonts/icomoon/style.css' ?>">
    <link rel="stylesheet" href="<?= base_url(LANDINGPAGE_ASSETS_RELATIVE_PATH) . 'fonts/line-icons/style.css' ?>">
    <link rel="stylesheet" href="<?= base_url(LANDINGPAGE_ASSETS_RELATIVE_PATH) . 'css/owl.carousel.min.css' ?>">
    <link rel="stylesheet" href="<?= base_url(LANDINGPAGE_ASSETS_RELATIVE_PATH) . 'css/animate.min.css' ?>">
    <link rel="stylesheet" href="<?= base_url(LANDINGPAGE_ASSETS_RELATIVE_PATH) . 'css/quill.snow.css'?>">
    

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
      <div class="site-mobile-menu-body">
        
      </div>
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
              <li><a href="<?= base_url(LANDINGPAGE_ROOT_PATH) . 'index'?>" >Home</a></li>
              <li><a href="<?= base_url(LANDINGPAGE_ROOT_PATH) . 'about'?>" class="nav-link active">About</a></li>
              <li><a href="<?= base_url(LANDINGPAGE_ROOT_PATH) . 'services'?>">Services</a></li>
              <li class="has-children">
                <a href="#">Pages</a>
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
            <a href="<?= base_url(LANDINGPAGE_ROOT_PATH) . 'login'?>" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Log In</a>
            </div>
            <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
          </div>

        </div>
      </div>
    </header>

    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('<?= base_url(LANDINGPAGE_ASSETS_RELATIVE_PATH) . 'images/azmi/hanggar1.jpeg'?>');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">About Us</h1>
            <div class="custom-breadcrumbs">
              <a href="#">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>About Us</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-5 bg-image overlay-primary fixed overlay" id="next" style="background-image: url('<?= base_url(LANDINGPAGE_ASSETS_RELATIVE_PATH) . 'images/azmi/hanggar2.jpeg'?>');">
      <div class="container">
        <div class="row mb-6 justify-content-center">
          <div class="col-md-12 text-center">
            <h2 class="section-title mb-3 text-white">Our About</h2>
            <p class="lead text-white">To achieve the company's vision and mission, we have values ​​that are cultural and must be shared by all members in the organization. These values ​​are expected to make the organization continue to withstand changes and challenges from outside business.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-light pt-5 testimony-full">
        <div class="owl-carousel single-carousel">
          <div class="container">
            <div class="row">

              <div class="col-lg-7 align-self-center text-center text-lg-left">
                <blockquote>
                <div class="border p-4 rounded">

                  <p style="font-size: 15px;">&ldquo;Assalamu’alaikum Warahmatullahi Wabarakatuh. <br><br>The challenges in the current era of global competition and going forward are very significant and very broad covering a variety of business scopes and types of work. As a consequence, each company will increasingly focus on finding opportunities to optimize costs, increase efficiency and productivity, and gain competitive advantage in order to survive. Therefore, businesses need to be wise to sort out their business processes and concentrate fully on their core businesses / activities. <br><br>Garuda Daya Pratama Sejahtera (GDPS) which is a subsidiary of PT GMF AeroAsia Tbk. as well as part of the Garuda Indonesia Group, was established to answer the challenges of businesses throughout the country by presenting activities in the form of providing, preparing, and managing the workforce and services in a professional manner. <br><br>Carrying the value of professionalism, GDPS will always strive to be a reliable and trusted business partner. We believe that we can become a strategic partner for various players in the country's industry, who will be able to bring enthusiasm to grow consistently, towards the expected business acceleration. <br><br> With a vision of "Becoming a professional and trusted service provider as the main business partner of the customer", GDPS is present among the business people of the country to join hands with all stakeholders in finding solutions to optimize the management of business processes and support the availability of manpower. Reliable professional in order to maintain the flexibility of adapting to various changes while supporting the achievement of your business goals faster and more sustainably. <br><br> Remember non-core and need reliable professional workforce services, Remember and contact GDPS. <br>GDPS.. your PRIME Partner and Service Solution Provider <br><br>Wassalamu’alaikum Warahmatullahi Wabarakatuh. &rdquo;</p>
                  <p><cite> &mdash; President Director</cite></p>
                  <p>Budi Santoso</p>
              </div>
                  
                </blockquote>
              </div>
              <div class="col-lg-5 align-self-end text-center text-lg-right">
                <img src="<?= base_url(LANDINGPAGE_ASSETS_RELATIVE_PATH) . 'images/budi.png'?>" alt="Image" class="img-fluid mb-0">
              </div>
            </div>
          </div>
      </div>
    </section>

    <section class="py-5 bg-image overlay-primary fixed overlay" id="next" style="background-image: url('<?= base_url(LANDINGPAGE_ASSETS_RELATIVE_PATH) . 'images/hero_1.jpg'?>');">
      <div class="container">
        <div class="row mb-6 justify-content-center">
          <div class="col-md-12 text-center">
            <h2 class="section-title mb-3 text-white">Newsletter</h2>
          </div>
        </div>
      </div>
    </section>



    <section class="site-section services-section bg-light block__62849 pb-5 pt-5" id="next-section">
      <div class="container">
        
        <div class="row">
          <div class="col-12 col-sm-6 ">
            <a class="block__16443 text-center d-block">
              <span class="custom-icon mx-auto"><span class="icon-magnet d-block"></span></span>
              <h3>OUR VISION</h3>
              <p>Being a service provider company profesional and trusted as the customer's main business partner. <br><br><br></p>
            </a>
          </div>
          <div class="col-12 col-sm-6 ">
            <a  class="block__16443 text-center d-block">
              <span class="custom-icon mx-auto"><span class="icon-trophy d-block"></span></span>
              <h3>OUR MISION</h3>
              <p>⇑ Providing excellent, superior and innovative services. <br>
                  ⇑ Provide a safe and comfortable work atmosphere for employees. <br>
                  ⇑ Provide consistent profitable business growth to shareholders. <br>
                  ⇑ Make a positive contribution to all stakeholders.</p>
            </a>            
          </div>
      </div>
    </section>


    <!-- ########################################################################################################################### -->

    <section class="site-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0">
              <img src="<?= base_url(LANDINGPAGE_ASSETS_RELATIVE_PATH) . 'images/azmi/profesional.jpg'?>" alt="Image" class="img-fluid img-shadow">
            </a>
          </div>
          <div class="col-lg-5 ml-auto">
            <h2 class="section-title mb-3">Professional</h2>
            <p class="lead">Providing superior service and safety quality, and placing customer interests as a priority.</p>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0 order-md-2">
              <img src="<?= base_url(LANDINGPAGE_ASSETS_RELATIVE_PATH) . 'images/azmi/real.jpg'?>" alt="Image" class="img-fluid img-shadow">
            </a>
          </div>
          <div class="col-lg-5 mr-auto order-md-1  mb-5 mb-lg-0">
            <h2 class="section-title mb-3">Reliable</h2>
            <p class="lead">Providing excellent and best service for the satisfaction of all customers consistently.</p>
          </div>
        </div>
      </div>

    </section>

<!-- ################################################################################################################ -->

<section class="site-section pt-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0">
              <img src="<?= base_url(LANDINGPAGE_ASSETS_RELATIVE_PATH) . 'images/azmi/integrity.jpg'?>" alt="Image" class="img-fluid img-shadow">
            </a>
          </div>
          <div class="col-lg-5 ml-auto">
            <h2 class="section-title mb-3">Integrity</h2>
            <p class="lead">Openned, honest, moral and transparent in every business collaboration. <br>

            PT. GDPS is present in meeting international and national regulations as a manager and provider of airport security services, to help carry out flight security and safety and smooth service.</p>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0 order-md-2">
              <img src="<?= base_url(LANDINGPAGE_ASSETS_RELATIVE_PATH) . 'images/azmi/maximize.jpg'?>" alt="Image" class="img-fluid img-shadow">
            </a>
          </div>
          <div class="col-lg-5 mr-auto order-md-1  mb-5 mb-lg-0">
            <h2 class="section-title mb-3">Maximize</h2>
            <p class="lead">Providing added value to the company to all stakeholders.</p>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0">
              <img src="<?= base_url(LANDINGPAGE_ASSETS_RELATIVE_PATH) . 'images/azmi/energik.jpg'?>" alt="Image" class="img-fluid img-shadow">
            </a>
          </div>
          <div class="col-lg-5 ml-auto">
            <h2 class="section-title mb-3">Energetic</h2>
            <p class="lead">Passion in providing creative and innovative services.</p>
          </div>
        </div>
      </div>


    </section>


<!-- ################################################################################################################ -->

 



<!-- ################################################################################################################ -->






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
    <script src="<?= base_url(LANDINGPAGE_ASSETS_RELATIVE_PATH) . 'js/quill.min.js'?>"></script>
    
    
    <script src="<?= base_url(LANDINGPAGE_ASSETS_RELATIVE_PATH) . 'js/bootstrap-select.min.js'?>"></script>
    
    <script src="<?= base_url(LANDINGPAGE_ASSETS_RELATIVE_PATH) . 'js/custom.js'?>"></script>
   
   
  </body>
</html>