<?php namespace App\Views\Client\Portal;

use App\Entities\Typing\User;

class Vacancy extends AppShell {

    private $vacancy;

    public function __construct(string $htmlTitle, User $user, array $vacancy)
    {
        $this->vacancy = $vacancy;
        parent::__construct($htmlTitle, $user);
    }

    protected function sectionContent(): string
    {
        $this->startHtmlParsing(); ?>

            <div class="container">
                <ul class="job-listings mb-5">

                    <?php foreach ($this->vacancy as $vacancyItem) : ?>
                        <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">

                            <a class="primary" href="<?= route_to('detail', $vacancyItem['id']) ?>"></a>


                            <div class="job-listing-logo">
                                <img src="<?= $vacancyItem['image'] ?>" alt="Image" class="img-fluid">
                            </div>

                            <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                                <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                                    <h2><?= $vacancyItem['profession'] ?></h2>
                                    <strong><?= $vacancyItem['company'] ?></strong>

                                    <h4>Test</h4>
                                </div>
                                <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                                    <span class="icon-room"></span> New York, New York
                                </div>
                                <div class="job-listing-meta">
                                    <span class="badge badge-danger"><?= $vacancyItem['type'] ?></span>
                                </div>
                            </div>

                        </li>
                    <?php endforeach ?>


                </ul>

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