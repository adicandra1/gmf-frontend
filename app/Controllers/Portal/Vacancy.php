<?php 

namespace App\Controllers\Portal;

use App\Entities\Typing\User;
use App\Entities\Typing\Vacancy as VacancyData;
use App\Helpers\Auth;
use App\Libraries\TemplateEngine;
use CodeIgniter\Controller;
use App\Models;
use App\Views\Portal\Vacancy as PortalVacancy;
use App\Views\Portal\VacancyDetail;


class Vacancy extends Controller {

    private $model;

    public function __construct()
    {
        $this->model = new Models\Portal\Vacancy();
        helper('view');
    }

    public function index() : string 
    {

        return TemplateEngine::view(
            new PortalVacancy(
                "Vacancy List",
                new User(Auth::user()),
                $this->model->get()
            )
        );

    }

    public function detail(string $vacancyId) : string {
        return TemplateEngine::view(
            new VacancyDetail(
                VacancyData::withMockData(),
                new User(Auth::user())
            )
        );
        //return view('client/portal/vacancy-detail', ['title' => 'Job Name Placeholder']);
    }

    public function test() : void {
        $ret = $this->model->get();
        print_r($ret);
    }

}