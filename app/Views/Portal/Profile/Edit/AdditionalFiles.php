<?php namespace App\Views\Portal\Profile\Edit;

use App\Libraries\BaseView;

class AdditionalFiles extends BaseView {

    private array $formFields;

    public function __construct()
    {

        //TODO: replace the dummy data;
        $this->formFields = [
            [
                'wrapperId' => 'KTP',
                'text' => 'KTP',
                'name'=> 'ktp',
                'data' => [
                    'type' => 'img',
                    'filename' => 'oke.jpg'
                ]
            ],
            [
                'wrapperId' => 'CV',
                'text' => 'CV',
                'name'=> 'cv',
                'data' => [
                    'type' => 'pdf',
                    'filename' => 'krs2020.pdf'
                ]
            ],
            [
                'wrapperId' => 'PasFoto',
                'text' => 'Pas Foto',
                'name'=> 'pas_foto',
                'data' => [
                    'type' => 'img',
                    'filename' => '16030066.jpg'
                ]
            ],
            [
                'wrapperId' => 'CoverLetter',
                'text' => 'Cover Letter',
                'name'=> 'cover_letter',
                'data' => [
                    'type' => 'pdf',
                    'filename' => 'krs2020.pdf'
                ]
            ]
        
        ];
    }

    public function render(): string
    {
        $this->startHtmlParsing(); ?>

            <form id="additionalFiles" name="additionalFiles">
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                        
                            <?php foreach ($this->formFields as $field): ?>
                                
                            
                            <div class="card mb-4">
                                <div class="card-header" id="<?= "heading{$field['wrapperId']}" ?>">
                                    <h5 class="mb-0">
                                        <a class="btn btn-link" data-toggle="collapse" href="<?= "#content{$field['wrapperId']}" ?>" aria-expanded="true" aria-controls="<?= "content{$field['wrapperId']}" ?>">
                                            Upload <?= $field['text'] ?>
                                        </a>
                                    </h5>
                                </div>
                                
                                
                                <div id="<?= "content{$field['wrapperId']}" ?>" class="collapse show" aria-labelledby="<?= "heading{$field['wrapperId']}" ?>" > <!-- deleted data-parent="#accordion" to change behavior from accordion to collapsible -->
                                    <div class="card-body row">
                                        <?php if($field['data']['type'] == 'img'): ?>
                                            <div class="col-md-7 text-center">

                                                <div class="card shadow-sm">
                                                    
                                                    <img src="<?= base_url("/uploads/resume/{$field['data']['filename']}") ?>" class="card-img-top img-thumbnail">
                                                    
                                                    <div class="card-footer">
                                                        <label for="<?= $field['name'] ?>" class="btn btn-outline-primary btn-icon-text">
                                                            <i class="mdi mdi-upload btn-icon-prepend"></i>
                                                            <input type="file" class="custom-file-input" id="<?= $field['name'] ?>" name="<?= $field['name'] ?>" style="display: none;">
                                                            Upload File
                                                        </label>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="col-md-5 ktp-upload-rules">
                                                Test rule: <br>
                                                1. this is rule number 1
                                            </div>

                                        <?php else : ?>
                                            <div class="col-md-12 text-center">
                                                <div class="card shadow-sm">
                                                    
                                                    <object data="<?= base_url("/uploads/resume/{$field['data']['filename']}") ?>" type="application/pdf" width="100%" height="500">
                                                        alt : <a href="<?= base_url("/uploads/resume/{$field['data']['filename']}") ?>">test.pdf</a>
                                                    </object>
                                                    
                                                    <div class="card-footer">
                                                        <label for="<?= $field['name'] ?>" class="btn btn-outline-primary btn-icon-text">
                                                            <i class="mdi mdi-upload btn-icon-prepend"></i>
                                                            <input type="file" class="custom-file-input" id="<?= $field['name'] ?>" name="<?= $field['name'] ?>" style="display: none;">
                                                            Upload File
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php endif ?>
                                    </div>
                                </div>
                            </div>

                            <?php endforeach ?>

                    
                </div>
            </form>
        <?php 
        return $this->endParsingAndGetHtml();
    }
}