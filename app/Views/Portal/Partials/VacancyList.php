<?php

namespace App\Views\Portal\Partials;

use App\Libraries\BaseView;

class VacancyList extends BaseView
{
    private array $vacancy;

    private int $limit;

    public function __construct(array $vacancy, int $limit = 0)
    {
        $this->vacancy = $vacancy;
        if ($limit == 0) {
            $limit = count($vacancy);
        }
        $this->limit = $limit;
    }

    public function render(): string
    {
        $this->startHtmlParsing(); ?>

        <ul class="job-listings mb-3">
            
            <?php if (empty($this->vacancy)) : ?>
                <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center justify-content-center" style="min-height: 150px;">
                    <a class="primary"></a>
                    <h2>No Vacancy available</h2>
                </li>

            <?php else : ?>

                <?php for ($i = 0; $i < $this->limit;  $i++) : ?>
                    <?php $vacancyItem = $this->vacancy[$i]; ?>
                    <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">

                        <a class="primary" href="<?= route_to('detail', $vacancyItem['id']) ?>"></a>


                        <div class="job-listing-logo d-flex align-items-center justify-content-center" style="height: 150px; width: 150px;">
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
                <?php endfor ?>

            <?php endif ?>


        </ul>

        <?php return $this->endParsingAndGetHtml();
    }
}
