<?php

namespace App\Models;

use CodeIgniter\Model;

class SolusiModel extends Model
{
    protected $table            = 'solusi';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['kodeSolusi', 'namaSolusi'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function saveSolusi($data){
        $this->insert($data);
    }

    public function getSolusi($id = null){
        if($id != null){
            return $this->find($id);
        }
        return $this->findAll();
    }

    public function updateSolusi($data, $id){
        return $this->update($id, $data);
    }

    public function deleteSolusi($id){
        return $this->delete($id);
    }
}
