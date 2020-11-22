<?php 

namespace App\Controllers\Portal;

use App\Entities\Typing\User;
use App\Libraries\TemplateEngine;
use App\Views\Portal\Dashboard as PortalDashboard;
use CodeIgniter\Controller;
use App\Helpers\Auth;
use App\Models\Portal\Vacancy as VacancyModel;

/** @psalm-suppress PropertyNotSetInConstructor */
class Dashboard extends Controller {

    private $model;

    public function __construct()
    {
        $this->model = new VacancyModel();
        helper(['view', 'auth']);
    }

    public function index() : string
    {
        return TemplateEngine::view(
            new PortalDashboard(
                "Dashboard",
                new User(Auth::user()),
                $this->model->get()
            )
        );
    }
}