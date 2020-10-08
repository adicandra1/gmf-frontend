<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models;

class Landing extends Controller
{

    private $model;

    public function __construct()
    {
        $this->model = new Models\Landing\Career();
        helper('view');
    }

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
        $data['vacancy'] = $this->model->get();
        return view('client/landing_page/career', $data);
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