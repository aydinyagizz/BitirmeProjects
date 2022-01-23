<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;
use CodeIgniter\Session\Session;

class Iletisim extends BaseController
{
    private $iletisimModel;
    protected $validation;
    protected $session;

    public function __construct()
    {
        $this->validation = \Config\Services::validation();
        $this->session = \Config\Services::session();
        helper(['form', 'url']);
        $this->iletisimModel = new \App\Models\IletisimModel();
    }



    public function iletisimDuzenle()
    {

        if ($this->request->getMethod() == 'post') {

            $data = [
                'site_mail' => $this->request->getPost('site_mail'),
                'site_adres' => $this->request->getPost('site_adres'),
                'site_tel' => $this->request->getPost('site_tel'),
            ];

            if (!$this->validation->run($data, 'IletisimDuzenle')) {
                $this->session->setFlashdata(['errors' => $this->validation->getErrors()]);
                return redirect()->to(route_to('admin_iletisim_duzenle'));
            } else {

                //TODO: Duyuru ekleme yeri
                $countUpdate = $this->iletisimModel->IletisimDuzenle($data);

                if ($countUpdate) {
                    $this->session->setFlashdata('success', 'Tebrikler İletişim Bilgileri Başarıyla Eklendi.');
                    return redirect()->to(route_to('admin_iletisim_duzenle'));
                } else {
                    $this->session->setFlashdata(['errors' => 'Beklenmedik bir hata oluştu daha sonra tekrar deneyiniz.']);
                    return redirect()->to(route_to('admin_iletisim_duzenle'));
                }

            }

        }

        $data = [
            'record' => $this->iletisimModel->GetAll()
        ];

        return view('Backend/IletisimDuzenleView',$data);
    }


}