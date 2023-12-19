<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/', 'Home::index');
$routes->get('/sign_in', 'Home::login');
$routes->get('/sign_up', 'Home::register');

//admin
$routes->get('/admin', 'AkunController::dashboard_admin', ['filter' => 'role:admin']);
$routes->get('/gejala', 'GejalaController::index', ['filter' => 'role:admin']);
$routes->get('/kerusakan', 'KerusakanController::index', ['filter' => 'role:admin']);
$routes->get('/solusi', 'SolusiController::index', ['filter' => 'role:admin']);
$routes->get('/akun', 'AkunController::akun', ['filter' => 'role:admin']);
$routes->resource('api', ['controller' => 'ArtikelController']);
$routes->get('/artikel', 'ArtikelController::lihat', ['filter' => 'role:admin']);
$routes->get('/lihat_artikel/(:any)', 'ArtikelController::lihat_artikel/$1', ['filter' => 'role:admin']);

//crud gejala
$routes->get('/gejala/tambah_gejala', 'GejalaController::tambah', ['filter' => 'role:admin']);
$routes->post('/gejala/tambah_gejala/store', 'GejalaController::store', ['filter' => 'role:admin']);
$routes->get('/gejala/datagejala', 'GejalaController::index', ['filter' => 'role:admin']);
$routes->get('/gejala/datagejala/(:any)/edit', 'GejalaController::edit/$1');
$routes->put('/gejala/datagejala/(:any)', 'GejalaController::update/$1');
$routes->delete('/gejala/datagejala/(:any)', 'GejalaController::destroy/$1');

//crud kerusakan
$routes->get('/kerusakan/tambah_kerusakan', 'KerusakanController::tambah', ['filter' => 'role:admin']);
$routes->post('/kerusakan/tambah_kerusakan/store', 'KerusakanController::store', ['filter' => 'role:admin']);
$routes->get('/kerusakan/datakerusakan', 'KerusakanController::index', ['filter' => 'role:admin']);
$routes->get('/kerusakan/datakerusakan/(:any)/edit', 'KerusakanController::edit/$1');
$routes->put('/kerusakan/datakerusakan/(:any)', 'KerusakanController::update/$1');
$routes->delete('/kerusakan/datakerusakan/(:any)', 'KerusakanController::destroy/$1');

//crud solusi
$routes->get('/solusi/tambah_solusi', 'SolusiController::tambah', ['filter' => 'role:admin']);
$routes->post('/solusi/tambah_solusi/store', 'SolusiController::store', ['filter' => 'role:admin']);
$routes->get('/solusi/datasolusi', 'SolusiController::index', ['filter' => 'role:admin']);
$routes->get('/solusi/datasolusi/(:any)/edit', 'SolusiController::edit/$1');
$routes->put('/solusi/datasolusi/(:any)', 'SolusiController::update/$1');
$routes->delete('/solusi/datasolusi/(:any)', 'SolusiController::destroy/$1');

//user
$routes->get('/user', 'UserController::dashboard_user', ['filter' => 'role:user']);
$routes->get('/konsultasi', 'UserController::konsultasi', ['filter' => 'role:user']);
$routes->get('/riwayathasil', 'UserController::riwayathasil', ['filter' => 'role:user']);
$routes->get('/hasil', 'UserController::hasil', ['filter' => 'role:user']);
$routes->get('/article', 'ArtikelController::lihat2', ['filter' => 'role:user']);
$routes->get('/lihat_article/(:any)', 'ArtikelController::lihat_article/$1', ['filter' => 'role:user']);