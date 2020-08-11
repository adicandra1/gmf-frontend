<?php

namespace App\Models\Api;

use CodeIgniter\Model;

class Vacancy extends Model
{

    protected $table = 'vacancy';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['name', 'email']; //TODO change

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function get($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->find(['id' => $id]);
        }
    }

    //All insert, update, delete is automatically created / same as parent method (Model).
}
