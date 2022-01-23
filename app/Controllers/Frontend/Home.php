<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;
use function PHPUnit\Framework\isNull;

class Home extends BaseController
{
    private $duyuruModel;
    private $egitimModel;
    private $ayarlarModel;
    private $yaziModel;
    private $hakkimzdaModel;
    private $urunModel;
    private $iletisimModel;


    public function __construct()
    {
        $this->duyuruModel = new \App\Models\DuyuruModel();
        $this->egitimModel = new \App\Models\EgitimModel();
        $this->ayarlarModel = new \App\Models\AyarlarModel();
        $this->yaziModel = new \App\Models\YaziModel();
        $this->hakkimzdaModel = new \App\Models\HakkimizdaModel();
        $this->urunModel = new \App\Models\UrunModel();
        $this->iletisimModel = new \App\Models\IletisimModel();
    }

    public function index(string $locale = null)
    {

        if (is_null($locale)) {
            return redirect()->to("/tr/");
        }

        $this->setLocale();

        $locale = $this->request->getLocale();

        $data = [
            'locale' => $locale,
            'record' => $this->yaziModel->GetAll(),
            'duyurular' => $this->duyuruModel->GetByLastThree(),
        ];

        return view('Frontend/HomeView', [
            'data' => $data,
        ]);

    }

    public function duyurular(string $locale)
    {

        $this->setLocale();

        $locale = $this->request->getLocale();

//        $data['record'] = $this->model->paginate();
//        $data['pager'] = $this->model->pager;
        $data = [

            'record' => $this->duyuruModel->paginate(9),
            'pager' => $this->duyuruModel->pager,
            'locale' => $locale,
        ];


        return view('Frontend/DuyurularView', [
            'data' => $data
        ]);

    }

    public function duyurudetay(string $locale, string $url)
    {
        $this->setLocale();

        $locale = $this->request->getLocale();
        if (isNull($url)) {

            $data = [
                'record' => $this->duyuruModel->getSingleDuyuru($url),
                'locale' => $locale,
            ];
            return view('Frontend/DuyuruDetayView', [
                'data' => $data
            ]);


        }
    }

    public function products(string $locale)
    {
        $this->setLocale();

        $locale = $this->request->getLocale();

        $data = [
            'locale' => $locale,
            'record' => $this->urunModel->GetAll()
        ];
        return view('Frontend/ProductsView', [
            'data' => $data
        ]);
    }

    public function productsDetail(string $locale, string $id)
    {

        $this->setLocale();
        $locale = $this->request->getLocale();
        if (isNull($id)) {

            $data = [
                'locale' => $locale,
                'record' => $this->urunModel->getSingleUrun($id),
            ];
            return view('Frontend/ProductsDetailView', [
                'data' => $data
            ]);
        }
    }

    public function education(string $locale)
    {
        $this->setLocale();

        $locale = $this->request->getLocale();

        $data = [
            'locale' => $locale,
            'record' => $this->egitimModel->paginate(4),
            'pager' => $this->egitimModel->pager
        ];
        return view('Frontend/EducationView', [
            'data' => $data
        ]);
    }

    public function educationDetail(string $locale, string $id)
    {

        $this->setLocale();
        $locale = $this->request->getLocale();
        if (isNull($id)) {

            $data = [
                'record' => $this->egitimModel->getSingleEgitim($id),
                'locale' => $locale,

            ];
            return view('Frontend/EducationDetailView', [
                'data' => $data
            ]);
        }
    }

    public function about(string $locale)
    {
        $this->setLocale();

        $locale = $this->request->getLocale();

        $data = [
            'locale' => $locale,
            'record' => $this->hakkimzdaModel->GetAll()
        ];
        return view('Frontend/AboutView', [
            'data' => $data
        ]);

    }

    public function message()
    {
        print_r($_POST);
        die();
    }

    public function contact(string $locale)
    {
        $this->setLocale();

        $locale = $this->request->getLocale();


        $data = [
            'locale' => $locale,
            'record' => $this->iletisimModel->GetAll()
        ];
        return view('Frontend/ContactView', [
            'data' => $data
        ]);

    }

    public function announcement(string $locale)
    {
        $this->setLocale();

        $locale = $this->request->getLocale();

        $data = [
            'locale' => $locale,
            'record' => $this->duyuruModel->paginate(6),
            'pager' => $this->duyuruModel->pager
        ];
        return view('Frontend/AnnouncementView', [
            'data' => $data
        ]);

    }

    public function announcementDetail(string $locale, string $id)
    {

        $this->setLocale();
        $locale = $this->request->getLocale();
        if (isNull($id)) {

            $data = [
                'record' => $this->duyuruModel->getSingleDuyuru($id),
                'locale' => $locale,

            ];
            return view('Frontend/AnnouncementDetailView', [
                'data' => $data
            ]);
        }
    }

    public function fatihozkaynak(string $locale)
    {
        $this->setLocale();

        $locale = $this->request->getLocale();

        $data = [
            'locale' => $locale,
        ];
        return view('Frontend/FatihozkaynakView', [
            'data' => $data
        ]);

    }


    public function setLocale()
    {

        $locale = $this->request->uri->getSegment(1);

        if (in_array($locale, ['en', 'tr'])) {

            $this->request->setLocale($locale);

            return $locale;

        } else {

            $path = $this->request->getPath();

            return redirect()->to("/tr/" . $path);
        }

    }

}