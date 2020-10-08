<?php 

namespace App\Controllers\Portal;

use CodeIgniter\Controller;
use App\Models;


class Vacancy extends Controller {

    private $model;

    public function __construct()
    {
        $this->model = new Models\Portal\Vacancy();
        helper('view');
    }

    public function index()
    {
        $data['vacancy'] = $this->model->get();
        $data['title'] = "Vacancy List";
        return view('client/portal/vacancy', $data);
    }

    public function detail($vacancyId) {
        return view('client/portal/vacancy-detail', ['title' => 'Job Name Placeholder']);
    }

    public function test() {
        $ret = $this->model->get();
       print_r($ret);

    }

    /*
    function implicitFakeCast($myClass): \CodeIgniter\HTTP\Response
    {
        return $myClass;
    }
    */

}