<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;
use CodeIgniter\Session\Session;

class Urunler extends BaseController
{
    private $urunModel;
    protected $validation;
    protected $session;

    public function __construct()
    {
        $this->validation = \Config\Services::validation();
        $this->session = \Config\Services::session();
        helper(['form', 'url']);
        $this->urunModel = new \App\Models\UrunModel();
    }

    public function index()
    {
        $data = [
            'record' => $this->urunModel->GetAll()
        ];

        return view('Backend/UrunlerView', $data);
    }

    public function UrunEkle()
    {

        if ($this->request->getMethod() == 'post') {
            $img = $this->request->getFile('urun_foto');
            $imgName =$this->request->getFile('urun_foto');
            if($img->isValid()){
               $imgName= $img->getName()."_".$img->getRandomName();
            }
            else{
                $imgName = null;
            }
            $data = [
                'urun_title' => $this->request->getPost('urun_title'),
                'urun_icerik' => $this->request->getPost('urun_icerik'),
                'urun_icon' => $this->request->getPost('urun_icon'),
                'urun_foto' => $imgName,
            ];


            if (!$this->validation->run($data, 'UrunEkle')) {
                $this->session->setFlashdata(['errors' => $this->validation->getErrors()]);
                return redirect()->to(route_to('admin_urun_ekle'));
            } else {
                //TODO:Resim var mı var ise aşağıdakileri yap
                if ($img->isValid() && !$img->hasMoved()) {


                    $img->move('assets/Backend/images/urunler/', $data['urun_foto']);
                    //$name = $data['egitim_foto']->getName();
                    //TODO: Egitim ekleme yeri
                    $countInsert = $this->urunModel->UrunEkle($data);

                    if ($countInsert) {
                        $this->session->setFlashdata('success', 'Tebrikler Ürünler Başarıyla Eklendi.');
                        return redirect()->to(route_to('admin_urun_ekle'));
                    } else {
                        $this->session->setFlashdata(['errors' => 'Beklenmedik bir hata oluştu daha sonra tekrar deneyiniz.']);
                        return redirect()->to(route_to('admin_urun_ekle'));
                    }

                }
            }

        }


        return view('Backend/UrunEkleView');
    }


}