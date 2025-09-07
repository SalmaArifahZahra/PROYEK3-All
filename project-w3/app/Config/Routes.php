<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/home', 'Dosen::display');

$routes->get('/mahasiswa', 'Mahasiswa::indexMahasiswa');
$routes->get('mahasiswa/detail/(:num)', 'Mahasiswa::detail/$1');
$routes->get('/mahasiswa/tambah', 'Mahasiswa::tampilForm');



$routes->get('/', 'Auth::loginIndex');
$routes->get('/login', 'Auth::loginIndex');
$routes->post('/login', 'Auth::loginAction');
$routes->get('/logout', 'Auth::logoutAction');

$routes->get('/register', 'Auth::registerIndex');
$routes->post('/registerAction', 'Auth::registerAction');



