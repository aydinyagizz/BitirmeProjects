<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;

class Login extends BaseController
{
    private $adminModel;
    protected $validation;
    protected $session;

    public function __construct()
    {
        $this->validation = \Config\Services::validation();
        $this->session = \Config\Services::session();
        helper(['form', 'url']);
        $this->adminModel = new \App\Models\LoginModel();
    }

    public function index()
    {

        if ($this->request->getMethod() == 'post') {
            $data = [
                'admin_kadi' => $this->request->getPost('admin_kadi'),
                'admin_sifre' => $this->request->getPost('admin_sifre'),

            ];

            if (!$this->validation->run($data, 'login')) {
                $this->session->setFlashdata(['errors' => $this->validation->getErrors()]);
                return redirect()->to(route_to('admin_login'));
            } else {
                $result = $this->adminModel->girisYap($data['admin_kadi'], $data['admin_sifre']);

                if (!$result) {
                    $this->session->setFlashdata(['errors' => 'Kullanıcı Adı Veya Şifre Hatalı']);
                    return redirect()->to(route_to('admin_login'));

                } else {
                    
                    $this->session->set([
                        'isLogin' => true,
                        'userData' => [
                            'id' => $result->admin_id,
                            'kullaniciAdi' => $result->admin_kadi
                        ]
                    ]);
                    return redirect()->to(route_to('admin_index'));

                }
            }
        }
        return view('Backend/LoginView');


    }

    public function logout(){
        $this->session->destroy();
        return redirect()->to(route_to('admin_login'));
    }


}