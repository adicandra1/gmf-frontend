<?php namespace App\Views\Client\Portal\Profile\Edit;

use App\Entities\Typing\Education as EducationData;
use App\Libraries\BaseView;

class Education extends BaseView {

    /** @var EducationData[] */
    private $educations;

    public function __construct(EducationData ...$educations)
    {
        $this->educations = $educations;
    }

    private function formTemplate(?EducationData $education) : string {
        $this->startHtmlParsing(); ?>
            <div class="form-group row">
                <label for="university" class="col-sm-2 col-form-label">Institute/University</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="university" name="university[]" placeholder="University" value="<?= $education->university ?? '' ?>">
                    <small class="form-error text-danger pl-3 university"></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="date" class="col-sm-2 col-form-label">Graduation Date</label>
                <div class="col-sm-2">
                    <select id="inputState" class="form-control" name="grad-date_month[]">
                        <option>Januari</option>
                        <option>Februari</option>
                        <option>Maret</option>
                        <option>April</option>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select id="inputState" class="form-control" name="grad_date_year[]">
                    <!-- TODO: Supply this field-->
                        <option>2018</option>
                        <option>2019</option>
                        <option>2020</option>
                        <option>2021</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="major" class="col-sm-2 col-form-label">Major</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="major" name="major[]" placeholder="Major" value="<?= $education->major ?? '' ?>">
                    <small class="form-error text-danger pl-3 major"></small>
                </div>
            </div>

            <div class="form-group row">
                <label for="additional_info" class="col-sm-2 col-form-label">Additional Information</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control" placeholder="Additional Information" id="additional_info" name="additional_info[]" value="<?= $education->decription ?? '' ?>"></textarea>
                    <small class="form-error text-danger pl-3 additional_info"></small>
                </div>
            </div>
        <?php return $this->endParsingAndGetHtml();
    }

    public function render(): string
    {
        $this->startHtmlParsing(); ?>

            <form id="education" name="education">

            <!-- 
                TODO: 
                    addForm button from javascript?
            -->

            <?php 
            if (empty($this->educations)) :
                echo $this->formTemplate(null);
            else :

                foreach($this->educations as $edu) : 
                    echo $this->formTemplate($edu);
                endforeach;

            endif;
            ?>

            </form>

        <?php
        return $this->endParsingAndGetHtml();
    }


}