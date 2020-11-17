<?php 

namespace App\Controllers\Portal;

use App\Entities\Typing\User;
use App\Libraries\TemplateEngine;
use App\Views\Client\Portal\Dashboard as PortalDashboard;
use CodeIgniter\Controller;
use App\Helpers\Auth;

/** @psalm-suppress PropertyNotSetInConstructor */
class Dashboard extends Controller {

    public function __construct()
    {
        helper(['view', 'auth']);
    }

    public function index() : string
    {
        return TemplateEngine::view(
            new PortalDashboard(
                "Dashboard",
                new User(Auth::user())
            )
        );
    }
}