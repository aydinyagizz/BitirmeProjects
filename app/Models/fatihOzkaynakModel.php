<?php

namespace App\Models;
use CodeIgniter\Model;

class fatihOzkaynakModel extends Model
{
    protected $table = 'ozkaynak';
    protected $primaryKey = 'ozkaynak_id';

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['ozkaynak_foto','ozkaynak_adres','ozkaynak_tel','ozkaynak_fax','ozkaynak_mail','ozkaynak_icerik'];

    protected $useTimestamps = false;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;


    public function fatihOzkaynakDuzenle($data){
        $builder = $this->builder($this->table);

        return $builder->update($data);

    }

    public function GetAll(){

        $builder = $this->builder($this->table);

        return $builder->get()->getRow();

    }

}