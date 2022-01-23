<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;
use CodeIgniter\Session\Session;

class Hakkimizda extends BaseController
{
    private $hakkimizdaModel;
    protected $validation;
    protected $session;

    public function __construct()
    {
        $this->validation = \Config\Services::validation();
        $this->session = \Config\Services::session();
        helper(['form', 'url']);
        $this->hakkimizdaModel = new \App\Models\HakkimizdaModel();
    }



    public function hakkimizdaDuzenle()
    {

        if ($this->request->getMethod() == 'post') {

            $data = [
                'hakkimizda_misyon' => $this->request->getPost('hakkimizda_misyon'),
                'hakkimizda_amac' => $this->request->getPost('hakkimizda_amac'),
                'hakkimizda_tarihce' => $this->request->getPost('hakkimizda_tarihce'),
            ];

            if (!$this->validation->run($data, 'HakkimizdaDuzenle')) {
                $this->session->setFlashdata(['errors' => $this->validation->getErrors()]);
                return redirect()->to(route_to('admin_hakkimizda_duzenle'));
            } else {

                //TODO: Duyuru ekleme yeri
                $countUpdate = $this->hakkimizdaModel->HakkimizdaDuzenle($data);

                if ($countUpdate) {
                    $this->session->setFlashdata('success', 'Tebrikler Hakkımızda Başarıyla Eklendi.');
                    return redirect()->to(route_to('admin_hakkimizda_duzenle'));
                } else {
                    $this->session->setFlashdata(['errors' => 'Beklenmedik bir hata oluştu daha sonra tekrar deneyiniz.']);
                    return redirect()->to(route_to('admin_hakkimizda_duzenle'));
                }

            }

        }

        $data = [
            'record' => $this->hakkimizdaModel->GetAll()
        ];

        return view('Backend/HakkimizdaDuzenleView',$data);
    }


}