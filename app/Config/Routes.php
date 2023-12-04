<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/', 'Home::index');
$routes->get('/sign_in', 'Home::login');
$routes->get('/sign_up', 'Home::register');

//admin


//admin
$routes->get('/admin', 'Home::dashboard_admin', ['filter' => 'role:admin']);
$routes->get('/gejala', 'GejalaController::admin_datagejala', ['filter' => 'role:admin']);
$routes->get('/kerusakan', 'KerusakanController::admin_datakerusakan', ['filter' => 'role:admin']);
$routes->get('/solusi', 'SolusiController::admin_datasolusi', ['filter' => 'role:admin']);
$routes->get('/akun', 'Home::akun');
$routes->get('/artikel', 'ArtikelController::artikel');

//crud gejala
$routes->get('/gejala/tambah', 'GejalaController::tambah');
$routes->get('/gejala/edit', 'GejalaController::edit');

//crud kerusakan
$routes->get('/kerusakan/tambah', 'KerusakanController::tambah');
$routes->get('/kerusakan/edit', 'KerusakanController::edit');

//crud solusi
$routes->get('/solusi/tambah', 'SolusiController::tambah');
$routes->get('/solusi/edit', 'SolusiController::edit');

//crud artikel

//user
// $routes->get('/', 'UserController::index');
$routes->get('/user', 'UserController::dashboard_user', ['filter' => 'role:user']);
$routes->get('/konsultasi', 'UserController::konsultasi', ['filter' => 'role:user']);
$routes->get('/riwayathasil', 'UserController::riwayathasil', ['filter' => 'role:user']);
$routes->get('/hasil', 'UserController::hasil', ['filter' => 'role:user']);