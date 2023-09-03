<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// REGISTER
$routes->post('/register', 'Auth::register');

// LOGIN
$routes->post('/login', 'Auth::login');

// DASHBOARD
$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'auth']);

// REPORTS
$routes->get('/report', 'Report::index', ['filter' => 'auth']);
$routes->get('/report-detail/(:num)', 'Report::detail/$1', ['filter' => 'auth']);
$routes->get('/report-show/(:num)', 'Report::show/$1', ['filter' => 'auth']);
$routes->post('/create-report', 'Report::create', ['filter' => 'auth']);
$routes->post('/edit-report/(:num)', 'Report::edit/$1', ['filter' => 'auth']);
$routes->post('/edit-image-report/(:num)', 'Report::editImage/$1', ['filter' => 'auth']);
