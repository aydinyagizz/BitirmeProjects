<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;
use CodeIgniter\Session\Session;

class Yazi extends BaseController
{
    private $yaziModel;
    protected $validation;
    protected $session;

    public function __construct()
    {
        $this->validation = \Config\Services::validation();
        $this->session = \Config\Services::session();
        helper(['form', 'url']);
        $this->yaziModel = new \App\Models\YaziModel();
    }

    public function index()
    {
        $data = [
            'record' => $this->yaziModel->GetAll()
        ];


        return view('Backend/YaziView', $data);
    }

    public function yaziEkle()
    {

        if ($this->request->getMethod() == 'post') {

            $data = [
                'motivasyon_content' => $this->request->getPost('motivasyon_content'),
                'motivasyon_author' => $this->request->getPost('motivasyon_author'),
                'motivasyon_job' => $this->request->getPost('motivasyon_job'),
            ];

            if (!$this->validation->run($data, 'YaziEkle')) {
                $this->session->setFlashdata(['errors' => $this->validation->getErrors()]);
                return redirect()->to(route_to('admin_yazi_ekle'));
            } else {

                    //TODO: Duyuru ekleme yeri
                    $countInsert = $this->yaziModel->YaziEkle($data);

                    if ($countInsert) {
                        $this->session->setFlashdata('success', 'Tebrikler Yazı Başarıyla Eklendi.');
                        return redirect()->to(route_to('admin_yazi_ekle'));
                    } else {
                        $this->session->setFlashdata(['errors' => 'Beklenmedik bir hata oluştu daha sonra tekrar deneyiniz.']);
                        return redirect()->to(route_to('admin_yazi_ekle'));
                    }

            }

        }


        return view('Backend/YaziEkleView');
    }


}