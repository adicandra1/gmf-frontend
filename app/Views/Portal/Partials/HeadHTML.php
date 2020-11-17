<?php namespace App\Views\Client\Portal\Partials;

use App\Libraries\BaseView;
use App\Views\ViewHelper;

class HeadHTML extends BaseView {

    private string $title;

    public function __construct(string $title = "")
    {
        $this->title = $title;
    }
    public function render(): string
    {
        $this->startHtmlParsing(); ?>

            <!DOCTYPE html>
            <html lang="en">

            <head>
                <!-- Required meta tags -->
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <title><?= (($this->title != "")) ? $this->title . " - GDPS" : "GPDS - Garuda Daya Pratama Sejahtera" ?></title>
                <!-- base:css -->
                <link rel="stylesheet" href="<?= base_url(ViewHelper::PORTAL_ASSETS_RELATIVE_PATH . 'vendors/mdi/css/materialdesignicons.min.css') ?>">
                <link rel="stylesheet" href="<?= base_url(ViewHelper::PORTAL_ASSETS_RELATIVE_PATH . 'vendors/base/vendor.bundle.base.css') ?>">
                <!-- endinject -->
                <!-- plugin css for this page -->
                <!-- End plugin css for this page -->
                <!-- inject:css -->
                <link rel="stylesheet" href="<?= base_url(ViewHelper::PORTAL_ASSETS_RELATIVE_PATH . 'css/style.css') ?>">
                <!-- endinject -->
                <link rel="shortcut icon" href="<?= base_url(ViewHelper::PORTAL_ASSETS_RELATIVE_PATH . 'images/favicon.png') ?>" />
            </head>

        <?php
        return $this->endParsingAndGetHtml();
    }
}