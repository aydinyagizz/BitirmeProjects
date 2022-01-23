<?php

namespace App\Models;
use CodeIgniter\Model;

class IletisimModel extends Model
{
    protected $table = 'ayarlar';
    protected $primaryKey = 'site_id';

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['site_mail','site_adres','site_tel'];

    protected $useTimestamps = false;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;


    public function IletisimDuzenle($data){
        $builder = $this->builder($this->table);

        return $builder->update($data);

    }

    public function GetAll(){

        $builder = $this->builder($this->table);

        return $builder->get()->getRow();

    }

}