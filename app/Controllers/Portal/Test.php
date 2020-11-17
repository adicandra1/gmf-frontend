<?php
namespace App\Controllers\Portal;

use App\Models\Portal\UserDetail;
use App\Entities\Typing\BasicInfo;
use App\Entities\Typing\User;
use CodeIgniter\Controller;
use CodeIgniter\Events\Events;

class Test extends Controller
{
    private UserDetail $model;

    public function __construct()
    {
        $this->model = new UserDetail();
        helper('auth');
    }


    public function index() : void{
        
        $userInfoMap = array(
            'table' => 'users',
            'column' => array_keys(get_class_vars(User::class))
        );

        /*
        
        $basicInfoMap = array(
            'table' => 'basic_info',
            'column' => array_keys(get_class_vars(BasicInfo::class))
        );
        

        // print_r($userInfoMap);

        $selectClause = '';
        foreach (array($userInfoMap, $basicInfoMap) as $table) {
            
            foreach($table['column'] as $column) {
                $selectClause .= $table['table'] . "." . $column;
                $selectClause .= ", ";
            }
        }

        echo $selectClause;

        */

        //echo UserDetail::compileColumnSelectClause(BasicInfo::TABLE_METADATA, $userInfoMap);

        //print_r(array_merge($userInfoMap, $basicInfoMap));
        //print_r($this->model->getAllDetails(user_id()));

        //Events::trigger('updateNotif');
    }
}