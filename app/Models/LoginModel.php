<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'admin';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['admin_id', 'admin_kadi', 'admin_sifre'];

    protected $useTimestamps = false;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [
        'admin_kadi' => 'required',
        'admin_sifre' => 'required'
    ];
    protected $validationMessages = [
        'admin_kadi' => 'Kullanıcı Adı Boş Geçilemez',
        'admin_sifre' => 'Şifre Boş Geçilemez.'
    ];
    protected $skipValidation = false;


    public function girisYap($kadi, $sifre)
    {
        $kullanici_adi = htmlspecialchars(trim($kadi));
        $admin_sifre = htmlspecialchars(trim(md5($sifre)));
        //   $admin_sifre = htmlspecialchars(trim(password_hash($sifre, PASSWORD_DEFAULT )));

        $builder = $this->builder($this->table);

        $builder = $builder->where([
            'admin_kadi' => $kullanici_adi,
            'admin_sifre' => $admin_sifre
        ]);

        $builder = $builder->get();

        return $builder->getRow();

    }
}