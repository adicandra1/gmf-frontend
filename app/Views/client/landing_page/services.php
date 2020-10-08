
<!doctype html>
<html lang="en">
  <head>
    <title>JobBoard &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link rel="stylesheet" href="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'css/custom-bs.css'?>">
    <link rel="stylesheet" href="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'css/jquery.fancybox.min.css' ?>">
    <link rel="stylesheet" href="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'css/bootstrap-select.min.css' ?>">
    <link rel="stylesheet" href="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'fonts/icomoon/style.css' ?>">
    <link rel="stylesheet" href="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'fonts/line-icons/style.css' ?>">
    <link rel="stylesheet" href="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'css/owl.carousel.min.css' ?>">
    <link rel="stylesheet" href="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'css/animate.min.css' ?>">
    <link rel="stylesheet" href="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'css/quill.snow.css'?>">
    

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'css/style.css' ?>">
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
          <img src="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/azmi/abc.png'?>" alt="azmi">
          </div>

          <nav class="mx-auto site-navigation">
            <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
            <li><a href="<?= base_url(LANDINGPAGE_ROOT_PATH) . '/' . 'index'?>">Home</a></li>
              <li><a href="<?= base_url(LANDINGPAGE_ROOT_PATH) . '/' . 'about'?>">About</a></li>
              <li><a href="<?= base_url(LANDINGPAGE_ROOT_PATH) . '/' . 'services'?>" class="nav-link active">Services</a></li>
              <li class="has-children">
                <a href="#">Pages</a>
                <ul class="dropdown">
                <li><a href="<?= base_url(LANDINGPAGE_ROOT_PATH) . '/' . 'gallery'?>">Gallery</a></li>
                  <li><a href="<?= base_url(LANDINGPAGE_ROOT_PATH) . '/' . 'news'?>">News</a></li>
                </ul>
              </li>
              <li class="has-children">
              <a href="#">Jobs</a>
                <ul class="dropdown">
                  <li><a href="<?= base_url(LANDINGPAGE_ROOT_PATH) . '/' . 'career'?>">Career</a></li>
                  <li><a href="<?= base_url(LANDINGPAGE_ROOT_PATH) . '/' . 'login'?>">User Profile</a></li>
                </ul>
              </li>
              <li><a href="<?= base_url(LANDINGPAGE_ROOT_PATH) . '/' . 'contact'?>">Contact</a></li>

              <li class="d-lg-none"><a href="<?= base_url(LANDINGPAGE_ROOT_PATH) . '/' . 'login'?>">Log In</a></li>
            </ul>
          </nav>
          
          <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
            <div class="ml-auto">
            <a href="<?= base_url(LANDINGPAGE_ROOT_PATH) . '/' . 'login'?>" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Log In</a>
            </div>
            <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
          </div>

        </div>
      </div>
    </header>

    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/azmi/hanggar1.jpeg'?>');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Services</h1>
            <div class="custom-breadcrumbs">
              <a href="#">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Services</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-5 bg-image overlay-primary fixed overlay" id="next" style="background-image: url('<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/azmi/hanggar2.jpeg'?>');">
      <div class="container">
        <div class="row mb-6 justify-content-center">
          <div class="col-md-12 text-center">
            <h2 class="section-title mb-3 text-white">Our Services</h2>
            <p class="lead text-white">To achieve the company's vision and mission, we have values ​​that are cultural and must be shared by all members in the organization. These values ​​are expected to make the organization continue to withstand changes and challenges from outside business.</p>
          </div>
        </div>
      </div>
    </section>


<!-- ################################################################################################################ -->
    <section class="site-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0">
              <img src="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/azmi/1.jpeg'?>" alt="Image" class="img-fluid img-shadow">
            </a>
          </div>
          <div class="col-lg-5 ml-auto">
            <h2 class="section-title mb-3">Aircraft Technical Assistance</h2>
            <p class="lead" style="font-size: 15px;">PT. GDPS provide solutions to every airline and aircraft maintenance company,and provide resources that provide services professionally as an Aircraft Technical Assistance</p>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0 order-md-2">
              <img src="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/azmi/2.jpeg'?>" alt="Image" class="img-fluid img-shadow">
            </a>
          </div>
          <div class="col-lg-5 mr-auto order-md-1  mb-5 mb-lg-0">
            <h2 class="section-title mb-3">Aircraft Ground Handling</h2>
            <p class="lead"style="font-size: 15px;">PT. GDPS is present in providing services to support airline business processes and services for each passenger. Airplane ground handling is a service activity for passengers along with their luggage, cargo, post, and auxiliary equipment for aircraft movement on the ground and the aircraft itself while in the airport, both for departure (departure) and for arrival (arrival).</p>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0">
              <img src="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/azmi/3.jpeg'?>" alt="Image" class="img-fluid img-shadow">
            </a>
          </div>
          <div class="col-lg-5 ml-auto">
            <h2 class="section-title mb-3">Aircraft Painter</h2>
            <p class="lead" style="font-size: 15px;">An aircraft can we see its beauty starting from the model, cleanliness, to the colors / pictures on an airplane. Of course, every color / image on an airplane requires a reliable Painter to create colors / images according to a predetermined design. One of the tasks of an Airplane Painter starts from preparing the assigned elements (pictures), preparation of tools starting from the sanding process to the paint, mixing colors to the desired color change process, and can use equipment (ranging from spray equipment, metal plaster, to steel drywall) well. Every work process requires a trusted and reliable painter to be able to achieve the target as much as possible to minimize errors. <br>

            PT. GDPS is present in offering experienced Airplane Painter where all tasks will be done professionally and reliably, moreover every task done will minimize errors due to Human Error.</p>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0 order-md-2">
              <img src="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/azmi/4.jpeg'?>" alt="Image" class="img-fluid img-shadow">
            </a>
          </div>
          <div class="col-lg-5 mr-auto order-md-1  mb-5 mb-lg-0">
            <h2 class="section-title mb-3">Administration</h2>
            <p class="lead"style="font-size: 15px;">Administration is a planning, control and organization of work in an office and becomes a driving force for those who run it so that the goals set can be achieved. <br>

            PT. GDPS provides services for administrative work where this task will be supported by personnel who have the skills and ability to organize, validate documents and must always maintain the confidentiality of information. This service is provided to support business processes and for the success of the company's customers in conducting business. The assigned personnel are able to carry out the work carefully and consistently.</p>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0">
              <img src="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/azmi/5.jpeg'?>" alt="Image" class="img-fluid img-shadow">
            </a>
          </div>
          <div class="col-lg-5 ml-auto">
            <h2 class="section-title mb-3">Data Entry</h2>
            <p class="lead" style="font-size: 15px;">Data entry in a company or organization is very important because every agency has data that needs to be arranged in such a way as to be systematic. Having the responsibility to transfer data from what is written on the form to digital form is the main task of a data entry. It can be recognized that the data input process can be time consuming and has high costs for maintenance if it is not processed correctly. <br>

            PT. GDPS provides the support needed to manage data entry needs, by applying the best methods and technologies to provide superior quality work and services.</p>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0 order-md-2">
              <img src="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/azmi/6.jpeg'?>" alt="Image" class="img-fluid img-shadow">
            </a>
          </div>
          <div class="col-lg-5 mr-auto order-md-1  mb-5 mb-lg-0">
            <h2 class="section-title mb-3">Front Office</h2>
            <p class="lead" style="font-size: 15px;">The first impression of each visitor will be determined by the Front Office Officer who will serve each question and provide a response to the customer then, the response tasks received will be forwarded to parties related to the company. Communication skills, speed in responding and friendliness are mandatory skills possessed by every officer. <br>

            PT. GPDS is present in providing professional services with good quality, of course driven by experienced human resources and technology to support the process of exchanging information between Front Office staff and guests quickly and accurately.</p>
          </div>
        </div>
      </div>

    </section>

<!-- ################################################################################################################ -->


    <section class="site-section pt-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0">
              <img src="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/azmi/7.jpeg'?>" alt="Image" class="img-fluid img-shadow">
            </a>
          </div>
          <div class="col-lg-5 ml-auto">
            <h2 class="section-title mb-3">Aviation Security</h2>
            <p class="lead" style="font-size: 15px;">Aviation Security is security personnel who are given the main task of ensuring the safety and safety of civil aviation in Indonesia from unlawful actions and also providing security protection for aircrafts, aircrafts, passengers, airport installations, ground officers, the public and service users other flights of actions against the law. <br>

            PT. GDPS is present in meeting international and national regulations as a manager and provider of airport security services, to help carry out flight security and safety and smooth service.</p>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0 order-md-2">
              <img src="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/azmi/8.jpeg'?>" alt="Image" class="img-fluid img-shadow">
            </a>
          </div>
          <div class="col-lg-5 mr-auto order-md-1  mb-5 mb-lg-0">
            <h2 class="section-title mb-3">Office & Building Management</h2>
            <p class="lead" style="font-size: 15px;">PT. GDPS provides services to support the competence of a company where starting from cleanliness, comfort, and safety are things that must be owned by a company to maintain maximum quality work, the services provided include: <br>
            ⊙ Maintenance Helper <br>
            ⊙ Houskeeping <br>
            ⊙ Office Boy | Office Girl<br>
            ⊙ Messenger<br>
            ⊙ Cleaning Service</p>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0">
              <img src="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/azmi/9.jpeg'?>" alt="Image" class="img-fluid img-shadow">
            </a>
          </div>
          <div class="col-lg-5 ml-auto">
            <h2 class="section-title mb-3">Security Guard</h2>
            <p class="lead" style="font-size: 15px;">In an environment needed a feeling of security and comfort where there is a state free from danger. The word danger which in this context refers to acts of crime, accidents and other acts that are intentional or not. <br>

            PT. GDPS works with you to jointly create and build measurable security measures. We are committed to safeguarding our future from various security threats that occur now and later.</p>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0 order-md-2">
              <img src="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/azmi/10.jpeg'?>" alt="Image" class="img-fluid img-shadow">
            </a>
          </div>
          <div class="col-lg-5 mr-auto order-md-1  mb-5 mb-lg-0">
            <h2 class="section-title mb-3">IT Support</h2>
            <p class="lead" style="font-size: 15px;">Every company for process automation needs support personnel who are experts in the field of information technology. We have experienced experts and experts in their fields. Some areas in IT support are IT helpdesk, Data Entry, Programmer and others.</p>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0">
              <img src="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/azmi/13.jpeg'?>" alt="Image" class="img-fluid img-shadow">
            </a>
          </div>
          <div class="col-lg-5 ml-auto">
            <h2 class="section-title mb-3">Catering</h2>
            <p class="lead" style="font-size: 15px;">To support the provision of international-level airline catering and industrial catering. We provide experts in the catering sector ranging from waiters to cookers.</p>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0 order-md-2">
              <img src="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/azmi/11.jpeg'?>" alt="Image" class="img-fluid img-shadow">
            </a>
          </div>
          <div class="col-lg-5 mr-auto order-md-1  mb-5 mb-lg-0">
            <h2 class="section-title mb-3">Medical</h2>
            <p class="lead" style="font-size: 15px;">To support your business in the health sector. We are present with professionals from nurses, pharmacists and doctors. Internalizing the attitude of our staff by upholding company values ​​is our parameter for our success in supporting customer business.</p>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0">
              <img src="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/azmi/12.jpeg'?>" alt="Image" class="img-fluid img-shadow">
            </a>
          </div>
          <div class="col-lg-5 ml-auto">
            <h2 class="section-title mb-3">Aircraft Cleanning</h2>
            <p class="lead" style="font-size: 15px;">Throughout the establishment of PT. GDPS has set and is always adjusting new standards for cleaning services, especially in the area of ​​aircraft cleaning. Our skilled and professional staff who uphold the company's values ​​are an important part of our business success.</p>
          </div>
        </div>
    </section>


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
    <script src="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'js/jquery.min.js'?>"></script>
    <script src="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'js/bootstrap.bundle.min.js'?>"></script>
    <script src="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'js/isotope.pkgd.min.js'?>"></script>
    <script src="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'js/stickyfill.min.js'?>"></script>
    <script src="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'js/jquery.fancybox.min.js'?>"></script>
    <script src="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'js/jquery.easing.1.3.js'?>"></script>
    
    <script src="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'js/jquery.waypoints.min.js'?>"></script>
    <script src="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'js/jquery.animateNumber.min.js'?>"></script>
    <script src="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'js/owl.carousel.min.js'?>"></script>
    <script src="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'js/quill.min.js'?>"></script>
    
    
    <script src="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'js/bootstrap-select.min.js'?>"></script>
    
    <script src="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'js/custom.js'?>"></script>
   
   
  </body>
</html>