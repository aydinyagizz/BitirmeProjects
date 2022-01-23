<?php

namespace App\Models;
use CodeIgniter\Model;

class HakkimizdaModel extends Model
{
    protected $table = 'hakkimizda';
    protected $primaryKey = 'hakkimizda_id';

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['hakkimizda_misyon','hakkimizda_amac','hakkimizda_tarihce'];

    protected $useTimestamps = false;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;


    public function HakkimizdaDuzenle($data){
        $builder = $this->builder($this->table);

        return $builder->update($data);

    }

    public function GetAll(){

        $builder = $this->builder($this->table);

        return $builder->get()->getRow();

    }

}