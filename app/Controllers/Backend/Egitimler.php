<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;
use CodeIgniter\Session\Session;

class Egitimler extends BaseController
{
    private $egitimModel;
    protected $validation;
    protected $session;

    public function __construct()
    {
        $this->validation = \Config\Services::validation();
        $this->session = \Config\Services::session();
        helper(['form', 'url']);
        $this->egitimModel = new \App\Models\EgitimModel();
    }

    public function index()
    {
        $data = [
            'record' => $this->egitimModel->GetAll()
        ];

        return view('Backend/EgitimlerView', $data);
    }

    public function EgitimEkle()
    {

        if ($this->request->getMethod() == 'post') {
            $img = $this->request->getFile('egitim_foto');
            $data = [
                'egitim_title' => $this->request->getPost('egitim_title'),
                'egitim_icerik' => $this->request->getPost('egitim_icerik'),
                'egitim_foto' =>  $img->getName()."_".$img->getRandomName(),
                'egitim_seolink' => url_title($this->request->getPost('egitim_title'))
            ];

            if (!$this->validation->run($data, 'EgitimEkle')) {
                $this->session->setFlashdata(['errors' => $this->validation->getErrors()]);
                return redirect()->to(route_to('admin_egitim_ekle'));
            } else {
                //TODO:Resim var mı var ise aşağıdakileri yap
                if ($img->isValid() && !$img->hasMoved()) {


                    $img->move('assets/Backend/images/egitimler/', $data['egitim_foto']);
                    //$name = $data['egitim_foto']->getName();
                    //TODO: Egitim ekleme yeri
                    $countInsert = $this->egitimModel->EgitimEkle($data);

                    if ($countInsert) {
                        $this->session->setFlashdata('success', 'Tebrikler Eğitim Başarıyla Eklendi.');
                        return redirect()->to(route_to('admin_egitim_ekle'));
                    } else {
                        $this->session->setFlashdata(['errors' => 'Beklenmedik bir hata oluştu daha sonra tekrar deneyiniz.']);
                        return redirect()->to(route_to('admin_egitim_ekle'));
                    }

                }
            }

        }


        return view('Backend/EgitimEkleView');
    }


}