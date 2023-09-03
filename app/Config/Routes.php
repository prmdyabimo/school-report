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
