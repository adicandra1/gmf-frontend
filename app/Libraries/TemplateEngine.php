<?php namespace App\Libraries;

class TemplateEngine {

    public static function view(ViewInterface $view) : string {
        return $view->render();
    }
}