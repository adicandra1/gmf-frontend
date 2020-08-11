<?php 

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;
use App\Models;

class Vacancy extends ResourceController
{
    protected $format       = 'json';
    protected $modelName    = 'App\Models\Api\Vacancy';

    public function index()
    {
        return $this->respond($this->model->findAll(), 200);
    }
}