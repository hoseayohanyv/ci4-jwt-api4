<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Default home
$routes->get('/', 'Home::index');

// CRUD Mahasiswa (tanpa proteksi)
$routes->get('/mahasiswa', 'Mahasiswa::index');
$routes->get('/mahasiswa/create', 'Mahasiswa::create');
$routes->post('/mahasiswa/store', 'Mahasiswa::store');
$routes->get('/mahasiswa/edit/(:num)', 'Mahasiswa::edit/$1');
$routes->post('/mahasiswa/update/(:num)', 'Mahasiswa::update/$1');
$routes->get('/mahasiswa/delete/(:num)', 'Mahasiswa::delete/$1');

// JWT Auth login (API)
$routes->post('api/login', 'Auth::login');
$routes->post('login', 'Auth::login'); // opsional buat web

// API Mahasiswa dengan JWT Token
$routes->group('api', ['filter' => 'auth'], function($routes) {
    $routes->get('mahasiswa', 'Api\Mahasiswa::index');
    $routes->post('mahasiswa', 'Api\Mahasiswa::create');
    $routes->put('mahasiswa/(:num)', 'Api\Mahasiswa::update/$1');
    $routes->delete('mahasiswa/(:num)', 'Api\Mahasiswa::delete/$1');
});


// Contoh endpoint yang butuh token
$routes->get('api/mahasiswa', 'Api\Mahasiswa::index', ['filter' => 'auth']);
