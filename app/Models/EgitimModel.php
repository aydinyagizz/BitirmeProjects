<?php

namespace App\Models;

use CodeIgniter\Model;

class EgitimModel extends Model
{
    protected $table = 'egitim';
    protected $primaryKey = 'egitim_id';

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['egitim_foto', 'egitim_title', 'egitim_icerik'];

    protected $useTimestamps = false;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;

    public function getSingleEgitim($id)
    {

        $builder = $this->builder($this->table);

        $builder = $builder->where('egitim_id', $id);

        $builder = $builder->get();

        return $builder->getRow();
    }

    public function EgitimEkle($data)
    {
        $builder = $this->builder($this->table);

        return $builder->insert($data);

    }

    public function GetAll()
    {

        $builder = $this->builder($this->table);

        return $builder->get()->getResult();

    }

    public function GetByLastThree()
    {

        $builder = $this->builder($this->table);

        $builder->orderBy('egitim_id', 'DESC');
        $builder->limit(3);
        return $builder->get()->getResult();

    }

}