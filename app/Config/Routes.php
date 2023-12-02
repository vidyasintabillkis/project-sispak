<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Home::login');
$routes->get('/register', 'Home::register');
$routes->get('/admin', 'Home::dashboard_admin');
$routes->get('/admin/gejala', 'Home::admin_datagejala');
$routes->get('/admin/kerusakan', 'Home::admin_datakerusakan');
$routes->get('/admin/solusi', 'Home::admin_datasolusi');

//user
$routes->get('/', 'UserController::index');
$routes->get('/user', 'UserController::dashboard_user');
$routes->get('/konsultasi', 'UserController::konsultasi');
$routes->get('/riwayathasil', 'UserController::riwayathasil');
$routes->get('/hasil', 'UserController::hasil');