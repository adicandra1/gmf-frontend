<?php

namespace App\Views\LandingPage;

use App\Views\LandingPage\Base\AppShell;
use App\Views\ViewHelper;

class Home extends AppShell
{
    function mainContent(): string
    {
        $this->startHtmlParsing(); ?>

        <!-- HOME -->
        <section class="home-section section-hero fixed overlay bg-image" style="background-image: url('<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/azmi/gmf.jpg') ?>');" id="home-section">

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

        <section class="py-5 bg-image overlay-primary fixed overlay" id="next" style="background-image: url('<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/azmi/hanggar2.jpeg') ?>');">
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
                            <img src="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/sq_img_6.jpg') ?>" alt="Image" class="img-fluid img-shadow">
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
                            <img src="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/sq_img_8.jpg') ?>" alt="Image" class="img-fluid img-shadow">
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

        <?php return $this->endParsingAndGetHtml();
    }
}
