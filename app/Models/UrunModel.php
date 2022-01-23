<?php

namespace App\Models;

use CodeIgniter\Model;

class UrunModel extends Model
{
    protected $table = 'urunler';
    protected $primaryKey = 'urun_id';

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['urun_foto', 'urun_title', 'urun_icerik','urun_icon'];

    protected $useTimestamps = false;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;

    public function getSingleUrun($id)
    {

        $builder = $this->builder($this->table);

        $builder = $builder->where('urun_id', $id);

        $builder = $builder->get();

        return $builder->getRow();
    }

    public function urunEkle($data)
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

        $builder->orderBy('urun_id', 'DESC');
        $builder->limit(3);
        return $builder->get()->getResult();

    }

}