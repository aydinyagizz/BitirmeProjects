<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list' => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    //--------------------------------------------------------------------
    // Rules
    //--------------------------------------------------------------------

    public $login = [
        'admin_kadi' => [
            'rules' => 'required|string',
            'errors' => [
                'required' => 'Kullanıcı Adınızı Lütfen Boş Bırakmayınız.',
                'string' => 'Lütfen Sadece Alfa Numerik Karakter Giriniz.'
            ]
        ],
        'admin_sifre' =>[
            'rules' => 'required',
            'errors'=>[
                'required' => 'Şifre Alanını Lütfen Boş Bırakmayınız.'
            ]
        ]
    ];
    public $DuyuruEkle = [
        'yazi_title' => [
            'rules' => 'required|string',
            'errors' => [
                'required' => 'Duyuru Başlık Alanını Lütfen Boş Bırakmayınız.',
                'string' => 'Duyuru Başlık Alanına Lütfen Sadece Alfa Numerik Karakter Giriniz.'
            ]
        ],
        'yazi_icerik' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Duyuru İçerik Alanını Lütfen Boş Bırakmayınız.'
            ]
        ],
    ];

    public $EgitimEkle = [
        'egitim_title' => [
            'rules' => 'required|string',
            'errors' => [
                'required' => 'Duyuru Başlık Alanını Lütfen Boş Bırakmayınız.',
                'string' => 'Duyuru Başlık Alanına Lütfen Sadece Alfa Numerik Karakter Giriniz.'
            ]
        ],
        'egitim_icerik' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Duyuru İçerik Alanını Lütfen Boş Bırakmayınız.'
            ]
        ],
    ];

    public $UrunEkle = [
        'urun_foto' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Ürün Fotoğraf Alanını Lütfen Boş Bırakmayınız.',
            ]
        ],
        'urun_title' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Ürün Başlık Alanını Lütfen Boş Bırakmayınız.',
            ]
        ],
        'urun_icerik' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Ürün İçerik Alanını Lütfen Boş Bırakmayınız.'
            ]
        ],
        'urun_icon' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Ürün İcon Alanını Lütfen Boş Bırakmayınız.'
            ]
        ],
    ];

    public $YaziEkle = [

        'motivasyon_content' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Yazı İçerik Alanını Lütfen Boş Bırakmayınız.'
            ]
        ]

    ];

    public $HakkimizdaDuzenle = [

        'hakkimizda_misyon' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Misyon Alanını Lütfen Boş Bırakmayınız.'
            ]
        ],
        'hakkimizda_amac' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Amaç Alanını Lütfen Boş Bırakmayınız.'
            ]
        ],
        'hakkimizda_tarihce' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Tarihçe Alanını Lütfen Boş Bırakmayınız.'
            ]
        ],
    ];

    public $IletisimDuzenle = [

        'site_mail' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Mail Alanını Lütfen Boş Bırakmayınız.'
            ]
        ],
        'site_adres' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Adres Alanını Lütfen Boş Bırakmayınız.'
            ]
        ],
        'site_tel' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Telefon Alanını Lütfen Boş Bırakmayınız.'
            ]
        ],
    ];

    public $fatihOzkaynakDuzenle = [

        'ozkaynak_adres' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Adres Alanını Lütfen Boş Bırakmayınız.'
            ]
        ],
        'ozkaynak_tel' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Telefon Alanını Lütfen Boş Bırakmayınız.'
            ]
        ],
        'ozkaynak_mail' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Mail Alanını Lütfen Boş Bırakmayınız.'
            ]
        ],
        'ozkaynak_icerik' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'İçerik Alanını Lütfen Boş Bırakmayınız.'
            ]
        ],
    ];

}
