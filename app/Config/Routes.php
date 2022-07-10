<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/', 'Kegiatan::listPublic');
$routes->get('/detail-kegiatan/(:num)', 'Kegiatan::detailPublic/$1');


$routes->group('', ['filter' => 'login'], function ($routes) {
    $routes->get('/daftar-kegiatan/(:num)', 'Daftar::publicView/$1');

    $routes->group('/daftar', function ($routes) {
        $routes->post('store/(:num)', 'Daftar::store');
        $routes->delete('delete/(:num)', 'Daftar::delete/$1');
    });
});

$routes->group('/cms', ['filter' => 'login'], function ($routes) {
    $routes->get('/', 'Home::index');



    // Content Management System
    // Jenis Kegiatan
    $routes->group('jenis-kegiatan', function ($routes) {
        $routes->get('/', 'JenisKegiatan::index');
        $routes->get('create', 'JenisKegiatan::create');
        $routes->post('store', 'JenisKegiatan::store');
        $routes->post('update/(:num)', 'JenisKegiatan::update/$1');
        $routes->get('edit/(:num)', 'JenisKegiatan::edit/$1');
        $routes->get('detail/(:num)', 'JenisKegiatan::detail/$1');
        $routes->get('delete/(:num)', 'JenisKegiatan::delete/$1');
    });
    // End Jenis Kegiatan

    // Kategori Peserta
    $routes->group('kategori-peserta', function ($routes) {
        $routes->get('/', 'KategoriPeserta::index');
        $routes->get('create', 'KategoriPeserta::create');
        $routes->post('store', 'KategoriPeserta::store');
        $routes->get('edit/(:num)', 'KategoriPeserta::edit/$1');
        $routes->post('update/(:num)', 'KategoriPeserta::update/$1');
        $routes->get('delete/(:num)', 'KategoriPeserta::delete/$1');
    });
    // End Kategori Peserta

    // Kegiatan
    $routes->group('kegiatan', function ($routes) {
        $routes->get('/', 'Kegiatan::index');
    });
    // End Kegiatan

    // Pendaftaran
    $routes->group('pendaftaran', function ($routes) {
        $routes->get('/', 'Pendaftaran::index');
        $routes->get('delete/(:num)', 'Pendaftaran::delete/$1');
    });
    // End Kegiatan

    // User
    $routes->group('user', function ($routes) {
        $routes->get('/', 'User::index');
        $routes->get('detail/(:num)', 'User::detail/$1');
        $routes->get('edit/(:num)', 'User::edit/$1');
        $routes->post('update/(:num)', 'User::update/$1');
    });
    // End User
    // End Content Management System
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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
