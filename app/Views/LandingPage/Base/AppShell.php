<?php namespace App\Views\LandingPage\Base;

use App\Libraries\BaseView;
use App\Libraries\TemplateEngine;
use App\Views\LandingPage\Partials\Footer;
use App\Views\LandingPage\Partials\Navbar;
use App\Views\ViewHelper;

abstract class AppShell extends BaseView {

    abstract function mainContent() : string;

    public function render(): string
    {
        $this->startHtmlParsing() ?>
            <!doctype html>
            <html lang="en">

            <head>
                <title>JobBoard &mdash; Website Template by Colorlib</title>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


                <link rel="stylesheet" href="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'css/custom-bs.css') ?>">
                <link rel="stylesheet" href="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'css/jquery.fancybox.min.css') ?>">
                <link rel="stylesheet" href="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'css/bootstrap-select.min.css') ?>">
                <link rel="stylesheet" href="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'fonts/icomoon/style.css') ?>">
                <link rel="stylesheet" href="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'fonts/line-icons/style.css') ?>">
                <link rel="stylesheet" href="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'css/owl.carousel.min.css') ?>">
                <link rel="stylesheet" href="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'css/animate.min.css') ?>">
                <link rel="stylesheet" href="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'css/quill.snow.css') ?>">


                <!-- MAIN CSS -->
                <link rel="stylesheet" href="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'css/style.css') ?>">
            </head>

            <body id="top">

                <div class="site-wrap">

                    <div class="site-mobile-menu site-navbar-target">
                    <div class="site-mobile-menu-header">
                        <div class="site-mobile-menu-close mt-3">
                        <span class="icon-close2 js-menu-toggle"></span>
                        </div>
                    </div>
                    <div class="site-mobile-menu-body"></div>
                    </div> <!-- .site-mobile-menu -->

                    <?= TemplateEngine::view(new Navbar()) ?>

                    <?= $this->mainContent() ?>

                    <?= TemplateEngine::view(new Footer()) ?>

                </div>

                <!-- SCRIPTS -->
                <script src="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'js/jquery.min.js') ?>"></script>
                <script src="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'js/bootstrap.bundle.min.js') ?>"></script>
                <script src="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'js/isotope.pkgd.min.js') ?>"></script>
                <script src="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'js/stickyfill.min.js') ?>"></script>
                <script src="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'js/jquery.fancybox.min.js') ?>"></script>
                <script src="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'js/jquery.easing.1.3.js') ?>"></script>

                <script src="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'js/jquery.waypoints.min.js') ?>"></script>
                <script src="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'js/jquery.animateNumber.min.js') ?>"></script>
                <script src="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'js/owl.carousel.min.js') ?>"></script>
                <script src="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'js/quill.min.js') ?>"></script>


                <script src="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'js/bootstrap-select.min.js') ?>"></script>

                <script src="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'js/custom.js') ?>"></script>

            </body>
            </html>


        <?php return $this->endParsingAndGetHtml();
    }
}