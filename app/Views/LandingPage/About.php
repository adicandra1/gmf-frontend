<?php

namespace App\Views\LandingPage;

use App\Views\LandingPage\Base\AppShell;
use App\Views\ViewHelper;

class About extends AppShell
{

    function mainContent(): string
    {
        $this->startHtmlParsing(); ?>

        <!-- HOME -->
        <section class="section-hero overlay inner-page bg-image" style="background-image: url('<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/azmi/hanggar1.jpeg') ?>');" id="home-section">
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

        <section class="py-5 bg-image overlay-primary fixed overlay" id="next" style="background-image: url('<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/azmi/hanggar2.jpeg') ?>');">
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
                            <img src="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/budi.png') ?>" alt="Image" class="img-fluid mb-0">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5 bg-image overlay-primary fixed overlay" id="next" style="background-image: url('<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/hero_1.jpg') ?>');">
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
                        <a class="block__16443 text-center d-block">
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
                        <img src="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/azmi/profesional.jpg') ?>" alt="Image" class="img-fluid img-shadow">
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
                        <img src="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/azmi/real.jpg') ?>" alt="Image" class="img-fluid img-shadow">
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
                        <img src="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/azmi/integrity.jpg') ?>" alt="Image" class="img-fluid img-shadow">
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
                        <img src="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/azmi/maximize.jpg') ?>" alt="Image" class="img-fluid img-shadow">
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
                        <img src="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/azmi/energik.jpg') ?>" alt="Image" class="img-fluid img-shadow">
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


<?php return $this->endParsingAndGetHtml();
    }
}
