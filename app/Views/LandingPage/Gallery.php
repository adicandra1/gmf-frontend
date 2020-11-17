<?php

namespace App\Views\LandingPage;

use App\Views\LandingPage\Base\AppShell;
use App\Views\ViewHelper;

class Gallery extends AppShell
{
    function mainContent(): string
    {
        $this->startHtmlParsing(); ?>

        <!-- HOME -->
        <section class="section-hero overlay inner-page bg-image" style="background-image: url('<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/azmi/hanggar1.jpeg') ?>');" id="home-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1 class="text-white font-weight-bold">Gallery</h1>
                        <div class="custom-breadcrumbs">
                            <a href="<?= base_url(LANDINGPAGE_ROOT_PATH) . '/' . 'index' ?>">Home</a> <span class="mx-2 slash">/</span>
                            <span class="text-white"><strong>Gallery</strong></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="site-section" id="next-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4 item">
                        <a href="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/sq_img_1.jpg') ?>" class="item-wrap fancybox" data-fancybox="gallery2">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/sq_img_1.jpg') ?>">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a href="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/sq_img_2.jpg') ?>" class="item-wrap fancybox" data-fancybox="gallery2">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/sq_img_2.jpg') ?>">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a href="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/sq_img_3.jpg') ?>" class="item-wrap fancybox" data-fancybox="gallery2">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/sq_img_3.jpg') ?>">
                        </a>
                    </div>

                    <div class="col-md-6 col-lg-4 item">
                        <a href="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/sq_img_4.jpg') ?>" class="item-wrap fancybox" data-fancybox="gallery2">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/sq_img_4.jpg') ?>">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a href="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/sq_img_5.jpg') ?>" class="item-wrap fancybox" data-fancybox="gallery2">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/sq_img_5.jpg') ?>">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a href="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/sq_img_6.jpg') ?>" class="item-wrap fancybox" data-fancybox="gallery2">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/sq_img_6.jpg') ?>">
                        </a>
                    </div>

                    <div class="col-md-6 col-lg-6 item">
                        <a href="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/sq_img_11.jpg') ?>" class="item-wrap fancybox" data-fancybox="gallery2">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/sq_img_11.jpg') ?>">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-6 item">
                        <a href="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/sq_img_2.jpg') ?>" class="item-wrap fancybox" data-fancybox="gallery2">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/sq_img_2.jpg') ?>">
                        </a>
                    </div>

                    <div class="col-md-6 col-lg-4 item">
                        <a href="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/sq_img_7.jpg') ?>" class="item-wrap fancybox" data-fancybox="gallery2">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/sq_img_7.jpg') ?>">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a href="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/sq_img_8.jpg') ?>" class="item-wrap fancybox" data-fancybox="gallery2">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/sq_img_8.jpg') ?>">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a href="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/sq_img_9.jpg') ?>" class="item-wrap fancybox" data-fancybox="gallery2">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/sq_img_9.jpg') ?>">
                        </a>
                    </div>

                    <div class="col-md-6 col-lg-4 item">
                        <a href="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/sq_img_10.jpg') ?>" class="item-wrap fancybox" data-fancybox="gallery2">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/sq_img_10.jpg') ?>">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a href="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/sq_img_11.jpg') ?>" class="item-wrap fancybox" data-fancybox="gallery2">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/sq_img_11.jpg') ?>">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a href="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/sq_img_12.jpg') ?>" class="item-wrap fancybox" data-fancybox="gallery2">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/sq_img_12.jpg') ?>">
                        </a>
                    </div>

                </div>
            </div>

    <?php return $this->endParsingAndGetHtml();
    }
}
