<?php namespace App\Views\Client\Portal\Profile;

use App\Entities\Typing\User;
use App\Libraries\TemplateEngine;
use App\Views\Client\Portal\AppShell;
use App\Views\Client\Portal\Profile\Edit\EditViewConstants;
use App\Views\Client\Portal\Profile\Partials\NoDataView;
use Config\RoutesConstant;

class Index extends AppShell {

    protected User $user;

    const DOWNLOAD_RESUME_PDF = "methodPDF";
    const DOWNLOAD_RESUME_IN_ZIP = "methodZIP";

    public function __construct(?string $htmlTitle = null, User $user)
    {
        $this->user = $user;

        parent::__construct($htmlTitle ?? $user->username, $user);
    }

    protected function sectionContent(): string
    {
        $this->startHtmlParsing(); ?>

        <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-xl-4 order-xl-2 mt-4">

            <div class="card card-profile">
                <img src="/uploads/img/profile/abc.jpg" alt="Image placeholder" class="card-img-top">
                <div class="row justify-content-center">
                <div class="col-lg-3 order-lg-2">
                    <div class="card-profile-image">
                    <a href="#">
                        <img src="<?= $this->user->basicInfo->profilePicture ?? '/assets/img/profile/Eb5-ZokU0AIcE1r.jpeg' ?>" class="rounded-circle">
                    </a>
                    </div>
                </div>
                </div>
                <div class="card-header text-center border-0 pt-5 pt-md-4 pb-0 pb-md-4">
                
                </div>
                <div class="card-body pt-4">
                <div class="row">
                    <div class="col">
                    </div>
                </div>
                <div class="text-center">
                    <h5 class="h3">
                    <?= $this->user->basicInfo->fullName ?? 'Full Name Placeholder' ?><span class="font-weight-light"></span>
                    </h5>
                    <div class="h5 font-weight-300">
                    <i class="ni location_pin mr-2"></i><?= $this->user->email ?? 'Email Placeholder' ?></div>
                    <div class="h5 mt-4">
                    <i class="ni business_briefcase-24 mr-2"></i><?= $this->user->createdDate ?? 'Join Date Placeholder' ?></div>
                </div>
                </div>
            </div>
            </div>

            <div class="col-xl-8 order-xl-1 mt-4">

            <div class="card" id="profile-card">

                <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-8">
                    <h3 class="mb-0">Resume</h3>
                    </div>
                    <div class="col-4 text-right">
                    <a href="<?= route_to(RoutesConstant::PROFILE_EDIT)?>" style="padding-right: 20px;">
                        <i class="mdi mdi-pencil text-primary pd-5" data-toggle="tooltip" data-original-title="edit"></i>
                    </a>
                    <a href="#" data-toggle="modal" data-target="#downloadModal" style="padding-right: 20px;">
                        <i class="mdi mdi-download text-primary pd-5" data-toggle="tooltip" data-original-title="download"></i>
                    </a>
                    <a href="<?= route_to(RoutesConstant::PROFILE_PRINT_RESUME)?>">
                        <i class="mdi mdi-printer" title="" data-toggle="tooltip" data-original-title="print"></i>
                    </a>
                    </div>
                </div>
                </div>

                <div class="card-body section">
                <h6 class="heading-small text-muted mb-4"><?= date('d M Y') ?></h6>
                <div class="row">
                    <div class="col-lg-3">
                    <div class="card">
                        <img class="card-img-top" src="<?= $this->user->basicInfo->profilePicture ?? '/assets/img/profile/Eb5-ZokU0AIcE1r.jpeg' ?>" alt="Card image cap">
                    </div>
                    </div>
                    <div class="col-lg-9">
                    <div class="form-group">
                        <div class="candidate-name">
                        <h2 class="text-primary"><?= $this->user->basicInfo->fullName ?? 'Full Name Placeholder' ?></h2>
                        </div>
                        <div class="highest-information">
                        <h4>Teknik Informatika</h4>
                        </div>
                        <div class="highest-information">
                        <h4>Sekolah Tinggi Teknologi Adisutjipto</h4>
                        </div>
                        <div class="highest-information">
                        <h4><?= ($this->user != null) ? "{$this->user->basicInfo->contact} | {$this->user->email}" : "Contact Person Placeholder"?></h4>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

                <div class="card-body section">

                <div class="section-head">
                    <div class="row">
                    <div class="col-8">
                        <h6 class="heading-small text-muted mb-4">About Me</h6>
                    </div>
                    <div class="col-4 text-right">
                        <a href="<?= route_to(RoutesConstant::PROFILE_EDIT) . EditViewConstants::aboutMeSectionId ?>">
                        <i class="mdi mdi-pencil text-primary pd-5" data-toggle="tooltip" data-original-title="edit"></i>
                        </a>
                    </div>
                    </div>
                </div>

                <div class="pl-lg-4">
                    <div class="row">

                    <div class="col-sm-4">
                        <div class="form-group">
                        <label for="name" name="name">Name</label>
                        </div>
                    </div>
                    <div class=" col-sm-8">
                        <div class="form-group">
                        <label class="name" for="name">: <?= $this->user->basicInfo->fullName ?? " - "?></label>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                        <label for="name" name="name">Email</label>
                        </div>
                    </div>
                    <div class=" col-sm-8">
                        <div class="form-group">
                        <label class="name" for="name">: <?= $this->user->email ?? " - " ?></label>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                        <label for="name" name="name">Contact</label>
                        </div>
                    </div>
                    <div class=" col-sm-8">
                        <div class="form-group">
                        <label class="name" for="name">: <?= $this->user->basicInfo->contact ?? " - " ?></label>
                        </div>
                    </div>


                    <div class="col-sm-4">
                        <div class="form-group">
                        <label for="name" name="name">Date of Birth</label>
                        </div>
                    </div>
                    <div class=" col-sm-8">
                        <div class="form-group">
                        <label class="name" for="name">: <?= date_create($this->user->basicInfo->dateOfBirth)->format('d M Y') ?? " - " ?></label>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                        <label for="name" name="name">Address</label>
                        </div>
                    </div>
                    <div class=" col-sm-8">
                        <div class="form-group">
                        <label class="name" for="name">: <?= $this->user->basicInfo->address ?? " - " ?></label>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                        <label for="name" name="name">Nationality</label>
                        </div>
                    </div>
                    <div class=" col-sm-8">
                        <div class="form-group">
                        <label class="name" for="name">: <?= $this->user->basicInfo->nationality ?? " - " ?></label>
                        </div>
                    </div>

                    </div>
                </div>

                </div>

                <div class="card-body section">

                <div class="section-head">
                    <div class="row">
                    <div class="col-8">
                        <h6 class="heading-small text-muted mb-4">Experience
                        <i class="mdi mdi-briefcase text-primary"></i>
                        </h6>
                    </div>
                    <div class="col-4 text-right">
                        <a href="<?= route_to(RoutesConstant::PROFILE_EDIT) . EditViewConstants::experienceSectionId ?> ">
                        <i class="mdi mdi-pencil text-primary pd-5" data-toggle="tooltip" data-original-title="edit"></i>
                        </a>
                    </div>
                    </div>

                </div>

                <div class="section-body">
                    <?php 
                    if (!$this->user->experience) : 

                        echo TemplateEngine::view(new NoDataView("No Experience Added yet!", route_to(RoutesConstant::PROFILE_EDIT) . EditViewConstants::experienceSectionId ));

                    else : ?>
                    <ul>
                        <?php foreach ($this->user->experience as $experience) : ?>

                            <li>
                                <div class="row">
                                <div class="pl-lg-4">
                                    <div>
                                    <h3 class="resume-title" id="lbl_preview_output_position_0"><?= $experience->role ?></h3>
                                    </div>
                                    <div>
                                    <span class="resume-title" id="lbl_preview_output_position_0"><?= $experience->company ?></span>
                                    </div>
                                    <div class="col-xs-12">
                                    <div class="form-group small-form-group">
                                        <p><?= $experience->joinDate ?> to <?= $experience->endDate ?></p>
                                    </div>
                                    </div>
                                    <div class="col-xs-12">
                                    <div class="form-group small-form-group">
                                        <p><?= $experience->description ?></p>
                                    </div>
                                    </div>
                                </div>
                                </div>

                            </li>

                        <?php endforeach ?>
                    </ul>
                    <?php endif ?>
                </div>

                </div>

                <div class="card-body section">
                <div class="section-head">
                    <div class="row">
                    <div class="col-8">
                        <h6 class="heading-small text-muted mb-4">Education
                        <i class="mdi mdi-school text-primary"></i>
                        </h6>
                    </div>
                    <div class="col-4 text-right">
                        <a href="<?= route_to(RoutesConstant::PROFILE_EDIT) . EditViewConstants::educationSectionId ?>">
                        <i class="mdi mdi-pencil text-primary pd-5" data-toggle="tooltip" data-original-title="edit"></i>
                        </a>
                    </div>
                    </div>

                </div>

                <div class="section-body">
                    <?php 
                    if (!$this->user->educations) : 
                        
                        echo TemplateEngine::view(new NoDataView("No Education Added yet!", route_to(RoutesConstant::PROFILE_EDIT) . EditViewConstants::educationSectionId));

                    else : ?>
                    <ul>
                        <?php foreach ($this->user->educations as $education) : ?>
                            <li>
                                <div class="row">
                                    <div class="pl-lg-4">
                                    <div>
                                        <h3 class="resume-title" id="lbl_preview_output_position_0"><?= $education->university ?></h3>
                                    </div>
                                    <div>
                                        <span class="resume-title" id="lbl_preview_output_position_0"><?= $education->major ?> | <?= $education->startDate->format('dd/mm/yyyy') . ' to ' . $education->graduationDate->format('dd/mm/yyyy') ?> </span>
                                    </div><br>
                                    <div class="col-xs-12">
                                        <div class="form-group small-form-group">
                                        <p><?= $education->decription ?></p>
                                        </div>
                                    </div>

                                    </div>
                                </div>
                            </li>
                        <?php endforeach ?>
                    </ul>
                    <?php endif ?>
                </div>
                

                </div>

                <div class="card-body section">
                <div class="section-head">
                    <div class="row">
                    <div class="col-8">
                        <h6 class="heading-small text-muted mb-4">Skills
                        <i class="mdi mdi-android-studio text-primary"></i>
                        </h6>
                    </div>
                    <div class="col-4 text-right">
                        <a href="<?= route_to(RoutesConstant::PROFILE_EDIT) . EditViewConstants::skillsSectionId ?> ">
                        <i class="mdi mdi-pencil text-primary pd-5" data-toggle="tooltip" data-original-title="edit"></i>
                        </a>
                    </div>
                    </div>

                </div>

                <div class="row">
                    <div class="pl-lg-4">
                    
                    
                    <div class="col-xs-12">
                        <div class="form-group small-form-group">
                        <p>HTML Programming, CSS, Microsoft Word, Microsoft PowerPoint</p>
                        <p>JavaScript, PHP And MySQL, Microsoft Excel</p>
                        </div>
                    </div>

                    </div>
                </div>

                </div>

                <div class="card-body section">
                <div class="section-head">
                    <div class="row">
                    <div class="col-8">
                        <h6 class="heading-small text-muted mb-4">User information</h6>
                    </div>
                    <div class="col-4 text-right">
                        <a href="<?= route_to(RoutesConstant::PROFILE_EDIT) . EditViewConstants::additionalFilesSectionId ?> ">
                        <i class="mdi mdi-pencil text-primary pd-5" data-toggle="tooltip" data-original-title="edit"></i>
                        </a>
                    </div>
                    </div>

                </div>

                <div class="pl-lg-4">
                    <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                        <label class="form-control-label" for="input-username">KTP</label>
                        <div class="data-container">
                            <?= $this->user->additionalFiles->ktp ?? 'Data not yet provided!' ?>
                        </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                        <label class="form-control-label" for="input-email">CV</label>
                        <a href=""><i class="fas fa-download text-primary pd-5" data-toggle="tooltip" data-original-title="download"></i></a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                        <label class="form-control-label" for="input-email">Pas Foto</label>
                        <a href=""><i class="fas fa-download text-primary pd-5" data-toggle="tooltip" data-original-title="download"></i></a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                        <label class="form-control-label" for="input-email">Cover Letter</label>
                        <a href=""><i class="fas fa-download text-primary pd-5" data-toggle="tooltip" data-original-title="download"></i></a>
                        </div>
                    </div>
                    </div>
                </div>

                </div>

            </div>
            </div>
        </div>
        </div>

        <div id="downloadModal" class="modal fade" tabindex="-1" role="dialog">
            <style>
                .form-check-input.fix {
                    margin-left: 0rem !important;
                }
            </style>
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Download</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form name="downloadChoice">
                            <p>Data to be downloaded:</p>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input fix" id="profileResumeCheck" name="dataSelected[]" checked>
                                <label class="form-check-label" for="profileResumeCheck">Profile Resume</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input fix" id="ktpCheck" name="dataSelected[]" checked>
                                <label class="form-check-label fix" for="ktpCheck">KTP</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input fix" id="cvCheck" name="dataSelected[]" checked>
                                <label class="form-check-label" for="cvCheck">CV</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input fix" id="pasFotoCheck" name="dataSelected[]" checked>
                                <label class="form-check-label" for="pasFotoCheck">Pas Foto</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input fix" id="coverLetterCheck" name="dataSelected[]" checked>
                                <label class="form-check-label" for="coverLetterCheck">Cover Letter</label>
                            </div>

                            <p>Download Method: </p>
                            <div class="form-check">
                                <input class="form-check-input fix" type="radio" name="downloadMethodRadios" id="exampleRadios1" value="<?= $this::DOWNLOAD_RESUME_PDF ?>" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Compiled PDF
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input fix" type="radio" name="downloadMethodRadios" id="exampleRadios2" value="<?= $this::DOWNLOAD_RESUME_IN_ZIP ?>">
                                <label class="form-check-label" for="exampleRadios2">
                                    Separated Files In Zip
                                </label>
                            </div>
                        </form>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Download Data</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
                
            </div>
        </div>

        <?php
        return $this->endParsingAndGetHtml();
    }
}