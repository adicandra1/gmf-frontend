<?php namespace App\Views\Client\Portal\Profile\Partials;

use App\Libraries\BaseView;

class NoDataView extends BaseView{

    private string $message;
    private string $actionLink;

    public function __construct(string $message, string $actionLink)
    {
        $this->message = $message;
        $this->actionLink = $actionLink;
    }

    public function render(): string
    {
        $this->startHtmlParsing(); ?>
            <div class="no-content">
                <?= $this->message ?>   
                <span><a class="btn btn-info" href="<?= $this->actionLink ?>"> Add </a></span>
            </div>
        <?php return $this->endParsingAndGetHtml();
    }

}