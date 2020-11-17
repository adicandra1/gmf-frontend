<?php

namespace App\Views\LandingPage;

use App\Views\LandingPage\Base\AppShell;
use App\Views\ViewHelper;

class Career extends AppShell
{
    private array $vacancy;

    public function __construct(array $vacancy)
    {
        $this->vacancy = $vacancy;
    }

    function mainContent(): string
    {
        $this->startHtmlParsing(); ?>

        <!-- HOME -->
        <section class="section-hero home-section overlay inner-page bg-image" style="background-image: url('<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/azmi/person.jpeg') ?>');" id="home-section">

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
                            <img src="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/job_logo_1.jpg') ?>" alt="Image" class="img-fluid">
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
                    <?php foreach ($this->vacancy as $vacancyItem) : ?>
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

        <section class="py-5 bg-image overlay-primary fixed overlay" id="next" style="background-image: url('<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/azmi/hanggar2.jpeg') ?>');">
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

<?php return $this->endParsingAndGetHtml();
    }
}
