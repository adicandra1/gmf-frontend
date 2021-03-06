<?php namespace App\Libraries;

abstract class BaseView implements ViewInterface {

    protected static function startHtmlParsing() : void {
        ob_start();
    }

    protected static function endParsingAndGetHtml() : string {
        return ob_get_clean();
    }
}