<?php namespace App\Libraries;

class TestView extends BaseView {

    private string $title;

    public function __construct(string $title = "YESS")
    {
        $this->title = $title;
    }

    public function render() : string {
        $this->startHtmlParsing();
        ?>
            <html>
                <body>
                    <?= $this->title ?>
                </body>
            </html>
        <?php
        return $this->endParsingAndGetHtml();
    }
    
}