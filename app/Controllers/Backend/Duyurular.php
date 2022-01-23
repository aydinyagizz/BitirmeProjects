<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;
use CodeIgniter\Session\Session;

class Duyurular extends BaseController
{
    private $duyuruModel;
    protected $validation;
    protected $session;

    public function __construct()
    {
        $this->validation = \Config\Services::validation();
        $this->session = \Config\Services::session();
        helper(['form', 'url']);
        $this->duyuruModel = new \App\Models\DuyuruModel();
    }

    public function index()
    {
        $data = [
            'record' => $this->duyuruModel->GetAll()
        ];

        return view('Backend/DuyurularView', $data);
    }

    public function duyuruEkle()
    {

        if ($this->request->getMethod() == 'post') {
            $img = $this->request->getFile('yazi_foto');
            $data = [
                'yazi_title' => $this->request->getPost('yazi_title'),
                'yazi_icerik' => $this->request->getPost('yazi_icerik'),
                'yazi_foto' =>  $img->getName()."_".$img->getRandomName(),
                'yazi_seolink' => url_title($this->request->getPost('yazi_title'))
            ];

            if (!$this->validation->run($data, 'DuyuruEkle')) {
                $this->session->setFlashdata(['errors' => $this->validation->getErrors()]);
                return redirect()->to(route_to('admin_duyuru_ekle'));
            } else {
                //TODO:Resim var mı var ise aşağıdakileri yap
                if ($img->isValid() && !$img->hasMoved()) {


                    $img->move('assets/Backend/images/duyurular/', $data['yazi_foto']);
                    //$name = $data['yazi_foto']->getName();
                    //TODO: Duyuru ekleme yeri
                    $countInsert = $this->duyuruModel->DuyuruEkle($data);

                    if ($countInsert) {
                        $this->session->setFlashdata('success', 'Tebrikler Duyuru Başarıyla Eklendi.');
                        return redirect()->to(route_to('admin_duyuru_ekle'));
                    } else {
                        $this->session->setFlashdata(['errors' => 'Beklenmedik bir hata oluştu daha sonra tekrar deneyiniz.']);
                        return redirect()->to(route_to('admin_duyuru_ekle'));
                    }

                }
            }

        }


        return view('Backend/DuyuruEkleView');
    }


}