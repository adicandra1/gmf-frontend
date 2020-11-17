<?php

namespace App\Views\LandingPage\Partials;

use App\Libraries\BaseView;
use App\Views\ViewHelper;
use Config\RoutesConstant;

class Navbar extends BaseView
{

    public function render(): string
    {
        $this->startHtmlParsing() ?>

        <!-- NAVBAR -->
        <header class="site-navbar mt-3">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="site-logo col-6">
                        <img src="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/azmi/abc.png') ?>" alt="azmi">
                    </div>

                    <nav class="mx-auto site-navigation">
                        <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
                            <li><a href="<?= route_to('/') ?>">Home</a></li>
                            <li><a href="<?= route_to('about') ?>">About</a></li>
                            <li><a href="<?= route_to('services') ?>">Services</a></li>
                            <li class="has-children">
                                <a>Pages</a>
                                <ul class="dropdown">
                                    <li><a href="<?= route_to('gallery') ?>">Gallery</a></li>
                                    <li><a href="<?= route_to('news') ?>">News</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a>Jobs</a>
                                <ul class="dropdown">
                                    <li><a href="<?= route_to('career') ?>" class="">Career</a></li>
                                    <li><a href="<?= route_to(RoutesConstant::LOGIN) ?>">User Profile</a></li>
                                </ul>
                            </li>
                            <li><a href="<?= route_to('contact') ?>">Contact</a></li>

                            <li class="d-lg-none"><a href="<?= route_to(RoutesConstant::LOGIN) ?>">Log In</a></li>
                        </ul>
                    </nav>

                    <script>
                        (function() {

                            function parentOrAncestorHasClass(element, className, limitParent) {
                                if (!element || element.length === 0) {
                                    return false;
                                }
                                var parent = element;
                                do {
                                    if (parent === limitParent) {
                                        break;
                                    }
                                    if (parent.className.indexOf(className) >= 0) {
                                        return parent;
                                    }
                                } while (parent = parent.parentNode);
                                return false;
                            }

                            /**@type {NodeListOf<HTMLAnchorElement>} */
                            let navlinks = document.querySelectorAll('nav.site-navigation a');
                            let limitParent = document.querySelector('nav.site-navigation');
                            navlinks.forEach(navlink => {
                                if (navlink.href == (window.location.origin + window.location.pathname)) {
                                    navlink.className = "nav-link active"

                                    if (parentNav = parentOrAncestorHasClass(navlink, "has-children", limitParent)) {
                                        parentNav.querySelector('a').className = "nav-link active";
                                    }
                                }

                                
                            });
                        }());
                    </script>

                    <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
                        <div class="ml-auto">
                            <a href="<?= route_to(RoutesConstant::LOGIN) ?>" class="btn btn-warning border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Log In</a>
                        </div>
                        <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
                    </div>

                </div>
            </div>
        </header>

<?php return $this->endParsingAndGetHtml();
    }
}
