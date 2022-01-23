<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;
use CodeIgniter\Session\Session;

class fatihOzkaynak extends BaseController
{
    private $fatihOzkaynakModel;
    protected $validation;
    protected $session;

    public function __construct()
    {
        $this->validation = \Config\Services::validation();
        $this->session = \Config\Services::session();
        helper(['form', 'url']);
        $this->fatihOzkaynakModel = new \App\Models\fatihOzkaynakModel();
    }


    public function fatihOzkaynakDuzenle()
    {

        if ($this->request->getMethod() == 'post') {
            $img = $this->request->getFile('ozkaynak_foto');

            $data = [
                'ozkaynak_foto' => $img->getName() . "_" . $img->getRandomName(),
                'ozkaynak_adres' => $this->request->getPost('ozkaynak_adres'),
                'ozkaynak_tel' => $this->request->getPost('ozkaynak_tel'),
                'ozkaynak_fax' => $this->request->getPost('ozkaynak_fax'),
                'ozkaynak_mail' => $this->request->getPost('ozkaynak_mail'),
                'ozkaynak_icerik' => $this->request->getPost('ozkaynak_icerik'),

            ];


            if (!$this->validation->run($data, 'fatihOzkaynakDuzenle')) {
                $this->session->setFlashdata(['errors' => $this->validation->getErrors()]);
                return redirect()->to(route_to('admin_fatihOzkaynak_duzenle'));
            } else {
                //TODO:Resim var mı var ise aşağıdakileri yap
                if ($img->isValid() && !$img->hasMoved()) {
                    $img->move('assets/Backend/images/fatihOzkaynak/', $data['ozkaynak_foto']);

                    //TODO: ekleme yeri
                    $countUpdate = $this->fatihOzkaynakModel->fatihOzkaynakDuzenle($data);

                    if ($countUpdate) {
                        $this->session->setFlashdata('success', 'Tebrikler Bilgiler Başarıyla Eklendi.');
                        return redirect()->to(route_to('admin_fatihOzkaynak_duzenle'));
                    } else {
                        $this->session->setFlashdata(['errors' => 'Beklenmedik bir hata oluştu daha sonra tekrar deneyiniz.']);
                        return redirect()->to(route_to('admin_fatihOzkaynak_duzenle'));
                    }
                }
            }
        }

        $data = [
            'record' => $this->fatihOzkaynakModel->GetAll()
        ];

        return view('Backend/fatihOzkaynakView', $data);
    }


}