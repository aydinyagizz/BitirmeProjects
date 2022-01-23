<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;
use CodeIgniter\Session\Session;

class Home extends BaseController
{
    private $duyuruModel;
    private $egitimModel;
    private $yaziModel;

    public function __construct()
    {
        $this->duyuruModel = new \App\Models\DuyuruModel();
        $this->egitimModel = new \App\Models\EgitimModel();
        $this->yaziModel = new \App\Models\YaziModel();
    }

    public function index()
    {


        $data = [
            'duyuruCount' => $this->duyuruModel->countAll(),
            'egitimCount' => $this->egitimModel->countAll(),
            'yaziCount' => $this->yaziModel->countAll()
        ];
        return view('Backend/HomeView', [
            'data' => $data
        ]);
    }


}