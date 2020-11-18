<?php namespace App\Views\Portal\Profile\Edit;

use App\Entities\Typing\Experience as ExperienceData;
use App\Libraries\BaseView;

class Experience extends BaseView {

    /** @var ExperienceData[] */
    private $experiences;

    public function __construct(ExperienceData ...$experiences)
    {
        $this->experiences = $experiences;
    }

    private function formTemplate(?ExperienceData $experience) : string {
        $this->startHtmlParsing(); ?>
            <div class="template">
                <div class="row">
                    <div class="col-12 text-right">
                        <button type="button" class="close" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="profession" class="col-sm-2 col-form-label">Position Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="profession[]" placeholder="Profesion" value="<?= $experience->role ?? '' ?>">
                        <small class="form-error text-danger pl-3 profession"></small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="company" class="col-sm-2 col-form-label">Company Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="company[]" placeholder="Company" value="<?= $experience->company ?? '' ?>">
                        <small class="form-error text-danger pl-3 company"></small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="date" class="col-sm-2 col-form-label">Join Duration</label>
                    <div class="col-sm-3">
                        <input name="join_date[]" type="date" data-format="DD-MM-YYYY" class="form-control" placeholder="Join date" value="<?= ($experience != null) ? $experience->joinDate->format('dd/mm/yyyy') : '' ?>">
                        <small class="form-error text-danger pl-3 join_date"></small>
                    </div>To
                    <div class="col-sm-3">
                        <input name="resign_date[]" type="date" class="form-control" placeholder="Resign date" value="<?= ($experience != null) ? $experience->endDate->format('dd/mm/yyyy') : '' ?>">
                        <small class="form-error text-danger pl-3 resign_date"></small>
                    </div>
                </div>
    
                <div class="form-group row">
                    <label for="job_description" class="col-sm-2 col-form-label">Experience Description</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" placeholder="job description!" id="job_description" name="job_description[]" value="<?= $experience->description ?? '' ?>"></textarea>
                        <small class="form-error text-danger pl-3 job_description"></small>
                    </div>
                </div>
            </div>
                
        <?php return $this->endParsingAndGetHtml();
    }

    public function render(): string
    {
        $this->startHtmlParsing(); ?>
            <style>
                .double-bar {
                    padding-bottom: 0.4rem;
                    margin-bottom: 2rem;
                }
                .double-bar::before {
                    content: "";
                    border-top: 1px solid black;
                    border-bottom: 1px solid black;
                    width: 100%;
                    height: 0.4rem;
                    position: absolute;
                    left: 0;
                }
            </style>
        
            <div id="template" hidden>
                <?= $this->formTemplate(null) ?>
            </div>

            <!-- TODO polish edit load data from previous state -->
            <form id="experience" name="experience">

            <?php 
            if (empty($this->experiences)) :
                echo $this->formTemplate(null);
            else : 

                foreach ($this->experiences as $experienceData) : 
            
                    echo $this->formTemplate($experienceData);

                endforeach;

            endif ?>

            </form>

            <button id="addForm" class="btn btn-outline-primary">Add Form</button>

            <script>
                document.querySelector('button#addForm').addEventListener("click", (e) => {
                    let template = document.querySelector('#template > .template');
                    let cloned = template.cloneNode(true);

                    let separator = document.createElement("div");
                    separator.className = "double-bar";
                    document.querySelector("form#experience").appendChild(cloned);
                    document.querySelector("form#experience").insertBefore(separator, cloned);
                });
            </script>
        <?php 
        return $this->endParsingAndGetHtml();
    }
}