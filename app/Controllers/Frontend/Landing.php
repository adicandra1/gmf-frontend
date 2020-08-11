<?php
defined('BASEPATH') OR exit('No direct script access allowed');

namespace App\Controllers\Frontend;

use CodeIgniter\Controller;

class Landing extends Controller
{
    public function index()
	{
        return view('client/landing_page/index');
    }

    public function about()
    {
        return view('client/landing_page/about');
    }
    
    public function services()
    {
        return view('client/landing_page/services');
    }

    public function career()
    {
        return view('client/landing_page/career');
    }

    public function contact()
    {
        return view('client/landing_page/contact');
    }

    public function gallery()
    {
        return view('client/landing_page/gallery');
    }

    public function news()
    {
        return view('client/landing_page/news');
    }
}