<?php 

namespace App\Controllers\Portal;

use App\Entities\Typing\User;
use App\Helpers\Auth;
use App\Libraries\TemplateEngine;
use App\Models\Portal\Profile as ProfileModel;
use App\Views\Client\Portal\Profile\Edit\Index as EditView;
use App\Views\Client\Portal\Profile\Index as ProfileView;
use App\Views\Client\Portal\Profile\Index;
use CodeIgniter\Controller;
use CodeIgniter\Validation\Validation;
use Config\Services;

/** @psalm-suppress PropertyNotSetInConstructor*/
class Profile extends Controller {

    private Validation $validation;

    private ProfileModel $model;

    public function __construct()
    {
        helper(['view', 'form', 'auth']);

        $this->model = new ProfileModel();

        $this->validation =  Services::validation();
    }

    public function index() : string
    {

        

        return TemplateEngine::view(
            new Index(
                null,
                new User(Auth::user())
            )
        );
    }

    public function edit() {
        $uploadedFilesFormFields = [
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
        $dummyUserData = [
            'name' => 'Candra',
            'email' => 'candra6',
            'contact' => '+0384723894732',
            'date' => '6Ag',
            'address' => 'sadscascassnds',
            'national' => '',
            'image' => 'Eb5-ZokU0AIcE1r.jpeg'
        ];
        $dataAboutMe['user'] = $dummyUserData;
        $data = [
            'title' => 'Edit Profile',
            'dataAboutMe' => $dataAboutMe,
            'dataExperience' => $dataAboutMe,
            'dataEducation' => $dataAboutMe,
            'dataSkills' => $dataAboutMe,
            'dataFiles' => [
                'user' => $dummyUserData,
                'formFields' => $uploadedFilesFormFields
            ]
        ];
        return TemplateEngine::view(
            new EditView(
                new User(user())
            )
        );
    }

    public function skillRepo() : void
    {
        if(isset($_GET['search'])) {
            $keyword = $_GET['search'];
            $data = $this->model->skillRepo($keyword);

            $this->response->setStatusCode(200)
                    ->setJSON($data)
                    ->send();
        }
    }

    private function restructureValidationErrors(array $errors) : array {
        $proccessedData = [];

        $currentFormId = '';
        $prevFromId = '';
        $formIndex = -1;

        foreach ($errors as $key => $value) {
            $prevFromId = $currentFormId;
            
            $separator = strpos($key, '_');
            $currentFormId = substr($key, 0, $separator);
            $field = substr($key, $separator + 1, strlen($key));

            if($currentFormId != $prevFromId) {
                $formIndex = $formIndex + 1;
            }

            $proccessedData[$formIndex]['id'] = $currentFormId;
            $proccessedData[$formIndex]['fields'][] = [
                'name' => $field,
                'validationMessage' => $value
            ];

            
        }

        return $proccessedData;
    }

    public function save() : void
    {
        //process the submitted data
        if(isset($_POST) || isset($_FILES)) {

            $formFields = [
                'aboutMe' => [
                    'name' => 'aboutMe_name',
                    'date' => 'aboutMe_date',
                    'contact' => 'aboutMe_contact',
                    'address' => 'aboutMe_address',
                    'national' => 'aboutMe_national',
                    'image' => 'aboutMe_image'
                ],
                'experience' => [
                    'profession' => 'experience_profession',
                    'company' => 'experience_company',
                    'join_date' => 'experience_join_date',
                    'resign_date' => 'experience_resign_date',
                    'job_description' => 'experience_job_description',
                ],
                'education' => [
                    'university' => 'education_university',
                    'grad_date_month' => 'education_grad_date_month',
                    'grad_date_year' => 'education_grad_date_year',
                    'major' => 'education_major',
                    'additional_info' => 'education_additional_info',
                ],
                'skills' => [

                ],
                'additionalFiles' => [
                    'ktp' => 'additionalFiles_ktp',
                    'cv' => 'additionalFiles_cv',
                    'pas_foto' => 'additionalFiles_pas_foto',
                    'cover_letter' => 'additionalFiles_cover_letter',
                ]
            ];

            $validationRules = [
                $formFields['aboutMe']['name'] => 'required|string',
                $formFields['aboutMe']['date'] => 'required|valid_date',
                $formFields['aboutMe']['contact'] => 'required',
                $formFields['aboutMe']['address'] => 'string|min_length[20]',
                $formFields['aboutMe']['national'] => 'string',
                $formFields['aboutMe']['image'] => "is_image[{$formFields['aboutMe']['image']}]|mime_in[{$formFields['aboutMe']['image']},image/png,image/jpg]|max_size[{$formFields['aboutMe']['image']},512]",
                $formFields['experience']['profession'] => 'string',
                $formFields['experience']['job_description'] => 'string|min_length[20]',
                $formFields['education']['university'] => 'string',
                $formFields['education']['major'] => 'string',
                $formFields['education']['additional_info'] => 'string|min_length[20]',
                $formFields['additionalFiles']['ktp'] => "is_image[{$formFields['additionalFiles']['ktp']}]|mime_in[{$formFields['additionalFiles']['ktp']},image/png,image/jpg]",
                $formFields['additionalFiles']['cv'] => "is_image[{$formFields['additionalFiles']['cv']}]|mime_in[{$formFields['additionalFiles']['cv']},image/png,image/jpg]",
                $formFields['additionalFiles']['pas_foto'] => "required",
                $formFields['additionalFiles']['cover_letter'] => "required",
            ];

            

            /*
            ERRORNOTE: 
            - file validation cant be applied correctly if from custom data, namely, data supplied in run() function chain.
              The error was: - the rules can't read files metadata if the data originated selain dari $_FILES. (rule: mime_in, max_size, etc, error: agrument supplied must be string, array given).
            - the $_POST or $_GET data can't be read by validation if we didn't supply/chain the withRequest() func, 
              but data in $_FILES can be read. strange, but i guess, the validation for files data read directly from $_FILES, 
              without we need to explicitly tell to the codeigniter.
            */
            $validationPassed = $this->validation
                                    ->withRequest($this->request)
                                    ->setRules($validationRules)
                                    ->run();

            if($validationPassed) {
                $data = [
                    'message' => 'All data saved!'
                ];
     
                //sanitize and
                //save to database
                //if saved then:
                 
                $this->response->setStatusCode(200)
                    ->setJSON(json_encode($data))
                    ->send();
     
                //else send error cannot proccess request, contact the admin if recurring.
                // and send to the log.
                     
            } else {
                 //if any data failed in validation, send off the error message.
                 //save passed data, send error
                 
                 $data = [
                     'errors' => 
                         [
                             'message' => 'Some submitted field(s) is missing or malformed.',
                             'validation' => [
                                 'forms' => $this->restructureValidationErrors($this->validation->getErrors())
                             ],
                             
                         ]
                 ];
                 
                 $this->response->setStatusCode(400, "Bad request.")
                     ->setJSON(json_encode($data))
                     ->send();
             }
        }

        
        //fail and success follow HTTP protocol standard

        //return format in JSON.
    }

    public function downloadResume() : void
    {
        //is logged in && is authorized: DONE IN AUTH FILTER: see Config\Routes.php

        //parse downloadChoice
        if(isset($_POST)) {
            $dataSelected = $_POST['dataSelected'];
            $downloadMethod = $_POST['downloadMethodRadios'];

            if($downloadMethod == ProfileView::DOWNLOAD_RESUME_PDF) {
                //compile PDF
            } elseif ($downloadMethod == ProfileView::DOWNLOAD_RESUME_IN_ZIP) {
                //prepare ZIP
            }
        }

    }

}