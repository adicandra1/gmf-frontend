<?php namespace App\Views\Client\Portal;

use App\Entities\Typing\User;
use App\Libraries\BaseView;
use App\Libraries\TemplateEngine;
use App\Views\Client\Portal\Partials\HeadHTML;
use App\Views\Client\Portal\Partials\HorizontalNavbar;
use App\Views\ViewHelper;

class AppShell extends BaseView {

    protected User $user;
    protected string $title;

    public function __construct(string $htmlTitle, User $user)
    {
        $this->user = $user;
        $this->title = $htmlTitle;
    }

    protected function sectionContent() : string {
        return "";
    }

    protected function sectionJSPlugin() : string {
        return "";
    }

    protected function sectionAdditionalJS() : string {
        return "";
    }

    public function render(): string
    {
        $this->startHtmlParsing(); ?>

        <?= TemplateEngine::view(new HeadHTML($this->title)) ?>

        <body>
        <div class="container-scroller">

        <?= TemplateEngine::view(new HorizontalNavbar($this->user)) ?>

        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">
                <div class="content-wrapper">

                    <?= $this->sectionContent() ?>
                    
                </div>
            </div>
        </div>

        </div>

            <!-- base:js -->
            <script src="<?= base_url(ViewHelper::PORTAL_ASSETS_RELATIVE_PATH . 'vendors/base/vendor.bundle.base.js') ?>"></script>
            <!-- endinject -->
            <!-- Plugin js for this page-->
            <?= $this->sectionJSPlugin() ?>
            <!-- End plugin js for this page-->
            <!-- inject:js -->
            <script src="<?= base_url(ViewHelper::PORTAL_ASSETS_RELATIVE_PATH . 'js/template.js') ?>"></script>
            <!-- endinject -->

            <?= $this->sectionAdditionalJS() ?>
        </body>

        </html>

        <?php
        return $this->endParsingAndGetHtml();
    }
}