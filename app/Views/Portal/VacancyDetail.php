<?php namespace App\Views\Portal;

use App\Entities\Typing\User;
use App\Entities\Typing\Vacancy;
use App\Views\ViewHelper;

class VacancyDetail extends AppShell {

    private Vacancy $vacancy;

    public function __construct(Vacancy $vacancy, User $user)
    {
        $this->vacancy = $vacancy;

        parent::__construct($this->vacancy->role, $user);
    }

    protected function sectionContent(): string
    {
        $this->startHtmlParsing(); ?>

            <div class="container">

            <ul class="job-listings mb-5">

                <li class="job-listing job-listing-fix d-flex align-items-center">

                    <div class="job-listing-logo job-listing-logo-fix">
                        <div class="image-container d-flex align-items-center justify-content-center" style="height: 150px; width: 150px;">
                            <img src="<?= base_url(ViewHelper::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/job_logo_1.jpg') ?>" alt="Image" class="img-fluid">
                        </div>
                    </div>

                    <div class="job-listing-about job-listing-about-fix d-sm-flex justify-content-between align-items-center mx-4">
                        <div class="job-listing-position flex-w-50 mb-3 mb-sm-0">
                            <h2><?= $this->vacancy->role ?></h2>
                            <strong><?= $this->vacancy->company ?></strong> - <?= $this->vacancy->location ?>
                            <h5><?= $this->vacancy->rate ?> • ac</h5>
                        </div>
                        <div class="job-listing-meta align-items-center mb-3 mb-sm-0">
                            <a href="#" class="btn btn-1rem btn-primary btn-icon-text"><i class="mdi mdi-launch btn-icon-prepend"></i>Apply</a>
                            <button href="#" class="btn btn-1rem btn-outline-primary">Save</button>
                            <button class="btn btn-sm btn-lg btn-outline-primary btn-icon-text"><i class="mdi mdi-dots-horizontal size-md"></i></button>
                        </div>
                        
                    </div>

                </li>

                <li class="job-listing d-block p-3 align-items-center">

                    <p class="mb-3"><i class="mdi mdi-clock pr-2"></i>Posted <?= $this->vacancy->dateCreated->format('D, d M Y') ?> </p>

                    <div class="section mb-4">
                        <h3 class="text-header font-weight-bold">About this job</h3>
                        <p><b>Type</b>: Full-time</p>
                        <p><b>Experience level</b>: Mid-Level</p>
                        <p><b>Role</b>: Frontend Developer</p>
                    </div>

                    <div class="section mb-4">
                        <h3 class="text-header font-weight-bold">Requirement </h3>

                        <div class="sub-section">
                            <h4 class="text-header font-weight-bold">Technologies </h4>

                            <a href="#" class="badge badge-info">react</a>
                            <a href="#" class="badge badge-info">php</a>

                        </div>

                        <div class="sub-section">
                            <h4 class="text-header font-weight-bold"> Documents needed </h4>
                            <span class="badge badge-info">CV</span>
                            <span class="badge badge-info">KTP</span>
                        </div>

                        <div class="sub-section">
                            <h4 class="text-header font-weight-bold">Gender </h4>
                            <a href="#" class="badge badge-info">All</a>
                        </div>

                        <div class="sub-section">
                            <h4 class="text-header font-weight-bold">Skills </h4>
                            <ul>
                                <li>Great Attitude</li>
                                <li>Strong understanding of HTML, CSS, JS</li>
                            </ul>
                        </div>
                    </div>

                    <div class="section">
                        <h3 class="text-header font-weight-bold">Job description</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley not only five centuries,</p>

                        <div class="sub-section">
                            <h4 class="text-header font-weight-bold">Stack</h4>
                            <ul>
                                <li>React</li>
                                <li>PHP</li>
                                <li>MySQL</li>
                            </ul>
                        </div>

                        <div class="sub-section">
                            <h4 class="text-header font-weight-bold">What you will work on</h4>
                            <ul>
                                <li>Building Websites</li>
                                <li>Fixing Bugs</li>
                                <li>Make great lead</li>
                            </ul>
                        </div>

                        <div class="sub-section">
                            <h4 class="text-header font-weight-bold">Benefit</h4>
                            <ul>
                                <li>Great hardware</li>
                                <li>Weekend vacation</li>
                                <li>Free snack</li>
                            </ul>
                        </div>


                    </div>

                </li>
            </ul>

            </div>
        <?php
        return $this->endParsingAndGetHtml();
    }
}