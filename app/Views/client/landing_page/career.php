<!doctype html>
<html lang="en">

<head>
  <title>JobBoard &mdash; Website Template by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="stylesheet" href="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'css/custom-bs.css' ?>">
  <link rel="stylesheet" href="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'css/jquery.fancybox.min.css' ?>">
  <link rel="stylesheet" href="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'css/bootstrap-select.min.css' ?>">
  <link rel="stylesheet" href="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'fonts/icomoon/style.css' ?>">
  <link rel="stylesheet" href="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'fonts/line-icons/style.css' ?>">
  <link rel="stylesheet" href="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'css/owl.carousel.min.css' ?>">
  <link rel="stylesheet" href="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'css/animate.min.css' ?>">
  <link rel="stylesheet" href="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'css/quill.snow.css' ?>">


  <!-- MAIN CSS -->
  <link rel="stylesheet" href="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'css/style.css' ?>">
</head>

<body id="top">

  <!-- <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div> -->


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
            <img src="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/azmi/abc.png' ?>" alt="azmi">
          </div>

          <nav class="mx-auto site-navigation">
            <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
              <li><a href="<?= base_url(LANDINGPAGE_ROOT_PATH) . '/' . 'index' ?>">Home</a></li>
              <li><a href="<?= base_url(LANDINGPAGE_ROOT_PATH) . '/' . 'about' ?>">About</a></li>
              <li><a href="<?= base_url(LANDINGPAGE_ROOT_PATH) . '/' . 'services' ?>">Services</a></li>
              <li class="has-children">
                <a href="#">Pages</a>
                <ul class="dropdown">
                  <li><a href="<?= base_url(LANDINGPAGE_ROOT_PATH) . '/' . 'gallery' ?>">Gallery</a></li>
                  <li><a href="<?= base_url(LANDINGPAGE_ROOT_PATH) . '/' . 'news' ?>">News</a></li>
                </ul>
              </li>
              <li class="has-children">
                <a href="#" class="nav-link active">Jobs</a>
                <ul class="dropdown">
                  <li><a href="<?= base_url(LANDINGPAGE_ROOT_PATH) . '/' . 'career' ?>" class="nav-link active">Career</a></li>
                  <li><a href="<?= base_url(LANDINGPAGE_ROOT_PATH) . '/' . 'login' ?>">User Profile</a></li>
                </ul>
              </li>
              <li><a href="<?= base_url(LANDINGPAGE_ROOT_PATH) . '/' . 'contact' ?>">Contact</a></li>

              <li class="d-lg-none"><a href="<?= base_url(LANDINGPAGE_ROOT_PATH) . '/' . 'login' ?>">Log In</a></li>
            </ul>
          </nav>

          <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
            <div class="ml-auto">
              <a href="<?= base_url(LANDINGPAGE_ROOT_PATH) . '/' . 'login' ?>" class="btn btn-warning border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Log In</a>
            </div>
            <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
          </div>

        </div>
      </div>
    </header>

    <!-- HOME -->
    <section class="section-hero home-section overlay inner-page bg-image" style="background-image: url('<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/azmi/person.jpeg' ?>');" id="home-section">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="mb-5 text-center">
              <h1 class="text-white font-weight-bold">The Easiest Way To Get Your Dream Job</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, quas fugit ex!</p>
            </div>

          </div>
        </div>
      </div>

      <a href="#next" class="scroll-button smoothscroll">
        <span class=" icon-keyboard_arrow_down"></span>
      </a>
    </section>


    <section class="site-section" id="next">
      <div class="container">

        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-2">50 Job Listed</h2>
          </div>
        </div>

        <ul class="job-listings mb-5">
          <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">

            <a href="<?= base_url(LANDINGPAGE_ROOT_PATH) . '/' . 'login' ?>"></a>


            <div class="job-listing-logo">
              <img src="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/job_logo_1.jpg' ?>" alt="Image" class="img-fluid">
            </div>

            <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
              <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                <h2>Product Designer</h2>
                <strong>Adidas</strong>
              </div>
              <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                <span class="icon-room"></span> New York, New York
              </div>
              <div class="job-listing-meta">
                <span class="badge badge-danger">Part Time</span>
              </div>
            </div>

          </li>
          <?php foreach ($vacancy as $vacancyItem) : ?>
            <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">

              <a href="<?= base_url(PORTAL_ROOT_PATH) . '/vacancy/detail/' . $vacancyItem['id'] ?>"></a>


              <div class="job-listing-logo d-flex align-items-center justify-content-center" style="height: 150px; width: 150px;">
                <img src="<?= $vacancyItem['image'] ?>" alt="Image" class="img-fluid">
              </div>

              <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                  <h2><?= $vacancyItem['profession'] ?></h2>
                  <strong><?= $vacancyItem['company'] ?></strong>
                </div>
                <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                  <span class="icon-room"></span> New York, New York
                </div>
                <div class="job-listing-meta">
                  <span class="badge badge-danger"><?= $vacancyItem['type'] ?></span>
                </div>
              </div>

            </li>
          <?php endforeach ?>

        </ul>

        <div class="row pagination-wrap">
          <div class="col-md-6 text-center text-md-left mb-4 mb-md-0">
            <span>Showing 1-7 Of 43 Jobs</span>
          </div>
          <div class="col-md-6 text-center text-md-right">
            <div class="custom-pagination ml-auto">
              <a href="#" class="prev">Prev</a>
              <div class="d-inline-block">
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
              </div>
              <a href="#" class="next">Next</a>
            </div>
          </div>
        </div>
      </div>

    </section>

    <!-- ============================================================================================================================================ -->

    <section class="py-5 bg-image overlay-primary fixed overlay" id="next" style="background-image: url('<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/azmi/hanggar2.jpeg' ?>');">
      <div class="container">
        <div class="row align-items-center">
          <div class="container">
            <div class="row">
              <div class="col-lg-1 col-md-1">

              </div>
              <div style="color:white" class="col-lg-2 col-md-2 text-center">
                <div class="service-box">
                  <i class="icon-user"></i>
                  <h3>Sign Up</h3>
                  <p class="text-white">Fill in the register form</p>
                </div>
              </div>
              <div style="color:white" class="col-lg-2 col-md-2 text-center">
                <div class="service-box">
                  <i class="fa fa-4x fa-laptop text-white sr-icons"></i>
                  <h3>Sign In</h3>
                  <p class="text-white">Sign in to our website</p>
                </div>
              </div>
              <div style="color:white" class="col-lg-2 col-md-2 text-center">
                <div class="service-box">
                  <i class="fa fa-4x fa-pencil-square-o text-white sr-icons"></i>
                  <h3>Edit Profile</h3>
                  <p class="text-white">Go into your profile and click 'Edit profile' button to make your own CV</p>
                </div>
              </div>
              <div style="color:white" class="col-lg-2 col-md-2 text-center">
                <div class="service-box">
                  <i class="fa fa-4x fa-file-text-o text-white sr-icons"></i>
                  <h3>Apply</h3>
                  <p class="text-white">Get your proposal and cover letter together, and apply for an internship</p>
                </div>
              </div>
              <div style="color:white" class="col-lg-2 col-md-2 text-center">
                <div class="service-box">
                  <i class="fa fa-4x fa-hourglass text-white sr-icons"></i>
                  <h3>Waiting</h3>
                  <p class="text-white">We will check your application and notify you of further updates. Kindly keep checking the 'History' menu for your internship status</p>
                </div>
              </div>
              <div class="col-lg-1 col-md-1">

              </div>
            </div>
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
                Copyright &copy;<script>
                  document.write(new Date().getFullYear());
                </script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small></p>
          </div>
        </div>
      </div>
    </footer>





  </div>





  <!-- SCRIPTS -->
  <script src="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'js/jquery.min.js' ?>"></script>
  <script src="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'js/bootstrap.bundle.min.js' ?>"></script>
  <script src="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'js/isotope.pkgd.min.js' ?>"></script>
  <script src="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'js/stickyfill.min.js' ?>"></script>
  <script src="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'js/jquery.fancybox.min.js' ?>"></script>
  <script src="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'js/jquery.easing.1.3.js' ?>"></script>

  <script src="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'js/jquery.waypoints.min.js' ?>"></script>
  <script src="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'js/jquery.animateNumber.min.js' ?>"></script>
  <script src="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'js/owl.carousel.min.js' ?>"></script>
  <script src="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'js/quill.min.js' ?>"></script>


  <script src="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'js/bootstrap-select.min.js' ?>"></script>

  <script src="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'js/custom.js' ?>"></script>


</body>

</html>