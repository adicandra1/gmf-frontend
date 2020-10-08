<?php 

namespace App\Controllers\Portal;

use CodeIgniter\Controller;

class Dashboard extends Controller {

    public function __construct()
    {
        helper('view');
    }

    public function index() 
    {
        //login
        return view('client/portal/dashboard', ['title' => 'Dashboard']);
    }
}