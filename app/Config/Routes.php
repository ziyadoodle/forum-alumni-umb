<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');

// $routes->post('/login', 'Auth::index');
// $routes->get('/registration', 'Auth::registration');
// $routes->post('/auth/save', 'Auth::save');

$routes->get('/home', 'Pages::index');
