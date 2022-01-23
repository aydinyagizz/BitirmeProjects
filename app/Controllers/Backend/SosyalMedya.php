<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;
use CodeIgniter\Session\Session;

class SosyalMedya extends BaseController
{
    private $ayarlarModel;
    protected $validation;
    protected $session;

    public function __construct()
    {
        $this->validation = \Config\Services::validation();
        $this->session = \Config\Services::session();
        helper(['form', 'url']);
        $this->ayarlarModel = new \App\Models\AyarlarModel();
    }

    public function index()
    {
        if ($this->request->getMethod() == 'post') {
            $data = [
                'site_facebook' => $this->request->getPost('facebook'),
                'site_twitter' => $this->request->getPost('twitter'),
                'site_instagram' => $this->request->getPost('instagram'),
                'site_linkedin' => $this->request->getPost('linkedin'),
                'site_mail' => $this->request->getPost('mail'),
                'site_youtube' => $this->request->getPost('youtube'),

            ];


           $update = $this->ayarlarModel->SosyalMedyaDuzenle($data);

            if ($update) {
                $this->session->setFlashdata('success', 'Sosyal Medya Ayarları Başarıyla Eklendi.');
                return redirect()->to(route_to('sosyal_medya'));
            } else {
                $this->session->setFlashdata(['errors' => 'Beklenmedik bir hata oluştu daha sonra tekrar deneyiniz.']);
                return redirect()->to(route_to('sosyal_medya'));
            }
        }
        $data = [
            'record' => $this->ayarlarModel->GetAll()

        ];

        return view('Backend/SosyalMedyaView', $data);

    }


}