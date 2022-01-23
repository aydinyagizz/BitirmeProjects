<?php

namespace App\Models;
use CodeIgniter\Model;

class YaziModel extends Model
{
    protected $table = 'motivasyon';
    protected $primaryKey = 'motivasyon_id';

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['motivasyon_content','motivasyon_author','motivasyon_job'];

    protected $useTimestamps = false;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;


    public function YaziEkle($data){
        $builder = $this->builder($this->table);

        return $builder->insert($data);

    }

    public function GetAll(){

        $builder = $this->builder($this->table);

        return $builder->get()->getResult();

    }

}