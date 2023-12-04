<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/sign_in', 'Home::login');
$routes->get('/sign_up', 'Home::register');

//admin
$routes->get('/admin', 'Home::dashboard_admin', ['filter' => 'role:admin']);
$routes->get('/admin/gejala', 'Home::admin_datagejala', ['filter' => 'role:admin']);
$routes->get('/admin/kerusakan', 'Home::admin_datakerusakan', ['filter' => 'role:admin']);
$routes->get('/admin/solusi', 'Home::admin_datasolusi', ['filter' => 'role:admin']);

//user
// $routes->get('/', 'UserController::index');
$routes->get('/user', 'UserController::dashboard_user', ['filter' => 'role:user']);
$routes->get('/konsultasi', 'UserController::konsultasi', ['filter' => 'role:user']);
$routes->get('/riwayathasil', 'UserController::riwayathasil', ['filter' => 'role:user']);
$routes->get('/hasil', 'UserController::hasil', ['filter' => 'role:user']);