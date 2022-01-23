<?php

namespace Config;

// Create a new instance of our RouteCollection class.
use function Aws\filter;

$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */


$routes->setDefaultNamespace('');
$routes->setDefaultController('App/Controllers/Frontend/Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

// Try again now.Okey not work

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//$routes->get('{locale}', 'Home::index');
//$routes->add('/', 'Home::index');

/*
* --------------------------------------------------------------------
 * ANASAYFA ROUTE
* --------------------------------------------------------------------
*/
$routes->get('(en|tr)', 'App\Controllers\Frontend\Home::index/$1');


/*
* --------------------------------------------------------------------
 * PANEL ANASAYFA ROUTE
* --------------------------------------------------------------------
*/


/*
* --------------------------------------------------------------------
 * PANEL ROUTE
* --------------------------------------------------------------------
*/

$routes->group('panel', ['namespace' => 'App\Controllers\Backend'], function ($routes) {
    $routes->get('anasayfa', 'Home::index', ['as' => 'admin_index']);
    $routes->match(['get', 'post'], 'login', 'Login::index', ['as' => 'admin_login']);
    $routes->get('logout', 'Login::logout', ['as' => 'admin_logout']);

    $routes->match(['get', 'post'], 'duyurular', 'duyurular::index', ['as' => 'admin_duyurular']);
    $routes->match(['get', 'post'], 'duyuru-ekle', 'duyurular::duyuruEkle', ['as' => 'admin_duyuru_ekle']);

    $routes->match(['get', 'post'], 'egitimler', 'egitimler::index', ['as' => 'admin_egitimler']);
    $routes->match(['get', 'post'], 'egitim-ekle', 'egitimler::egitimEkle', ['as' => 'admin_egitim_ekle']);

    $routes->match(['get', 'post'], 'urunler', 'urunler::index', ['as' => 'admin_urunler']);
    $routes->match(['get', 'post'], 'urun-ekle', 'urunler::urunEkle', ['as' => 'admin_urun_ekle']);

    $routes->match(['get', 'post'], 'hakkimizda-duzenle', 'hakkimizda::hakkimizdaDuzenle', ['as' => 'admin_hakkimizda_duzenle']);

    $routes->match(['get', 'post'], 'iletisim-duzenle', 'iletisim::iletisimDuzenle', ['as' => 'admin_iletisim_duzenle']);

    $routes->match(['get', 'post'], 'fatihOzkaynak-duzenle', 'fatihOzkaynak::fatihOzkaynakDuzenle', ['as' => 'admin_fatihOzkaynak_duzenle']);

    $routes->match(['get', 'post'], 'yazi', 'yazi::index', ['as' => 'admin_yazi']);
    $routes->match(['get', 'post'], 'yazi-ekle', 'yazi::yaziEkle', ['as' => 'admin_yazi_ekle']);

    $routes->match(['get', 'post'], 'sosyal-medya', 'SosyalMedya::index', ['as' => 'sosyal_medya']);
});


/*
* --------------------------------------------------------------------
 * FRONTEND
* --------------------------------------------------------------------
*/

$routes->get('/', 'App\Controllers\Frontend\Home::index');
$routes->match(['get', 'post'], 'message', 'App\Controllers\Frontend\Home::message', ['as' => 'messages1']);


$routes->group('(en|tr)', ['namespace' => 'App\Controllers\Frontend'], function ($routes) {

    $routes->get('products', 'Home::products/$1');
    $routes->get('products-detail/(:any)', 'Home::productsDetail/$1/$2');
    $routes->get('education', 'Home::education/$1');
    $routes->get('education-detail/(:any)', 'Home::educationDetail/$1/$2');
    $routes->get('about', 'Home::about/$1');
    $routes->match(['get', 'post'], 'contact', 'Home::contact/$1');
    $routes->get('announcement', 'Home::announcement/$1');
    $routes->get('announcement-detail/(:any)', 'Home::announcementDetail/$1/$2');
    $routes->get('fatihozkaynak', 'Home::fatihozkaynak/$1');
});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
