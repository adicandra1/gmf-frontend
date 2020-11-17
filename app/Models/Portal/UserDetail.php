<?php

namespace App\Models\Portal;

use App\Entities\Typing\BasicInfo;
use App\Entities\Typing\User;
use CodeIgniter\Model;

class UserDetail extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllDetails(?string $userId) {
        /*$data = array();
        if ($userId === false) {
            $data = $this->findAll();
        } else {
            $data = $this->find(['id' => $userId]);
        }
        return $data;
        */

        
        return $this->db->table([User::TABLE_METADATA['table'], BasicInfo::TABLE_METADATA['table']])
            ->select($this->compileColumnSelectClause(User::TABLE_METADATA, BasicInfo::TABLE_METADATA))
            ->where(User::TABLE_METADATA['table'] . ".id", $userId)
            //->join('basic_info', "users.id = basic_info.userId", 'left')
            //->join('experience as exp', "u.id = exp.id_pelamar", 'left')
            //->join('education as ed', "u.id = ed.id_pelamar", 'left')
            //->getCompiledSelect();
            ->get()
            ->getResultArray();
            
    }

    public function getBasicInfo() {}

    public function getExperience() {}

    public function getEducation() {}

    public function getSkills() {}

    public function getAdditionalInfo() {}

    public static function compileColumnSelectClause(array ...$tableMetadatas) {
        //Add caching strategy for this function call
        //cache invalidated when arguments data changed,
        
        $selectClause = '';
        foreach($tableMetadatas as $table) {
            
            foreach($table['column'] as $column) {
                $selectClause .= $table['table'] . "." . $column . ' as ' . $table['table'] . '_' . $column;
                $selectClause .= ", ";
            }
        }
        $selectClause = rtrim($selectClause, ', ');

        return $selectClause;
    }
}