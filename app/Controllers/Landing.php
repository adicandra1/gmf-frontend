<?php
namespace App\Controllers;

use App\Libraries\TemplateEngine;
use CodeIgniter\Controller;
use App\Models;
use App\Views\LandingPage;

class Landing extends Controller
{

    private Models\Landing\Career $model;

    public function __construct()
    {
        $this->model = new Models\Landing\Career();
        helper('view');
    }

    public function index() : string
	{
        return TemplateEngine::view(new LandingPage\Home());
    }

    public function about() : string
    {
        return TemplateEngine::view(new LandingPage\About());
    }
    
    public function services() : string
    {
        return TemplateEngine::view(new LandingPage\Services());
    }

    public function career() : string
    {
        $data['vacancy'] = $this->model->get();
        return TemplateEngine::view(new LandingPage\Career($data['vacancy']));
    }

    public function contact() : string
    {
        return TemplateEngine::view(new LandingPage\Contact());
    }

    public function gallery() : string
    {
        return TemplateEngine::view(new LandingPage\Gallery());
    }

    public function news() : string
    {
        return TemplateEngine::view(new LandingPage\News());
    }
}