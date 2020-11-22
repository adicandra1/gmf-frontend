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
                <li class="job-listing d-flex pb-3 pb-sm-0 align-items-center justify-content-center" style="min-height: 150px;">
                    <a class="primary"></a>
                    <h2>No Vacancy available</h2>
                </li>

            <?php else : ?>

                <?php for ($i = 0; $i < $this->limit;  $i++) : ?>
                    <?php $vacancyItem = $this->vacancy[$i]; ?>
                    <li class="job-listing job-listing-fix d-flex align-items-center">

                        <a class="primary" href="<?= route_to('detail', $vacancyItem['id']) ?>"></a>


                        <div class="job-listing-logo job-listing-logo-fix">
                            <div class="image-container d-flex align-items-center justify-content-center" style="height: 150px; width: 150px;">
                                <img src="<?= $vacancyItem['image'] ?>" alt="Image" class="img-fluid">
                            </div>
                        </div>

                        <div class="job-listing-about job-listing-about-fix d-sm-flex justify-content-between align-items-center mx-4">
                            <div class="job-listing-position flex-w-50 mb-3 mb-sm-0">
                                <h2 class="mb-1"><?= $vacancyItem['profession'] ?></h2>
                                <h5 class="mb-1"><b>5d ago</b>  • Remote</h5>
                                <p class="mb-1">
                                    <a href="1" class="badge badge-info">react</a>
                                    <a href="2" class="badge badge-info">php</a>
                                </p>
                            </div>
                            <div class="job-listing-location mb-3 mb-sm-0 flex-w-25">
                                <span class="icon-room"></span> New York, New York
                            </div>
                            <div class="job-listing-meta mb-3 mb-sm-0">
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
