<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/', 'Home::index');
$routes->get('/login', 'Home::login');
$routes->get('/register', 'Home::register');

//admin
$routes->get('/admin', 'Home::dashboard_admin');
$routes->get('/gejala', 'GejalaController::admin_datagejala');
$routes->get('/kerusakan', 'KerusakanController::admin_datakerusakan');
$routes->get('/solusi', 'SolusiController::admin_datasolusi');
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
$routes->get('/', 'UserController::index');
$routes->get('/user', 'UserController::dashboard_user');
$routes->get('/konsultasi', 'UserController::konsultasi');
$routes->get('/riwayathasil', 'UserController::riwayathasil');
$routes->get('/hasil', 'UserController::hasil');