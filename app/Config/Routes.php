<?php

namespace Config;

// Create a new instance of our RouteCollection class.
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
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/home/index', 'Home::index');
$routes->get('/home/dashboard', 'Home::dashboard');
$routes->get('/home/login', 'Home::login');
$routes->add('/home/aksi_login', 'Home::aksi_login');
$routes->get('/home/logout', 'Home::logout');
$routes->get('/home/signup', 'Home::signup');
$routes->add('/home/aksi_signup', 'Home::aksi_signup');
$routes->get('/home/profil', 'Home::profil');
$routes->get('/home/order', 'Home::order');

$routes->get('/home/setting', 'Home::setting');
$routes->add('/home/aksi_setting', 'Home::aksi_setting');
$routes->get('/home/barang', 'Home::barang');
$routes->get('/home/tambahbarang', 'Home::tambahbarang');
$routes->post('/home/aksi_t_barang/(:num)', 'Home::aksi_e_barang/$1');
$routes->get('/home/editbarang/(:num)', 'Home::editbarang/$1');
$routes->post('home/aksi_e_barang', 'Home::aksi_e_barang');

$routes->get('/home/hapus_barang/(:num)', 'Home::hapus_barang/$1');
$routes->get('home/restore/(:num)', 'Home::restore/$1');
$routes->get('home/rbarang', 'Home::rbarang');
$routes->get('home/hapus_permanen/(:num)', 'Home::hapus_permanen/$1');

$routes->get('/home/user', 'Home::user');
$routes->get('/home/tambahuser', 'Home::tambahuser');
$routes->post('/home/aksi_t_user/(:num)', 'Home::aksi_e_user/$1');
$routes->get('/home/edituser/(:num)', 'Home::edituser/$1');
$routes->post('home/aksi_e_user', 'Home::aksi_e_user');
$routes->get('/home/hapus_user/(:num)', 'Home::hapus_user/$1');
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
