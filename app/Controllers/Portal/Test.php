<?php
namespace App\Controllers\Portal;

use CodeIgniter\Controller;

class Test extends Controller
{

    public function __construct()
    {
        helper('auth');
    }


    public function index() {
        echo user_id();
    }
}