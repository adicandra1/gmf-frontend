<?php namespace App\Views\Portal;

use App\Entities\Typing\User;
use App\Libraries\TemplateEngine;
use App\Views\Portal\Partials\VacancyList;

class Vacancy extends AppShell {

    private array $vacancy;

    public function __construct(string $htmlTitle, User $user, array $vacancy)
    {
        $this->vacancy = $vacancy;
        parent::__construct($htmlTitle, $user);
    }

    protected function sectionContent(): string
    {
        $this->startHtmlParsing(); ?>

            <div class="container">
                <?= TemplateEngine::view(new VacancyList($this->vacancy)) ?>

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

        <?php
        return $this->endParsingAndGetHtml();
    }
}