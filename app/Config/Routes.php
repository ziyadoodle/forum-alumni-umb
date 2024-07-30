<?php

namespace Myth\Auth\Config;

use CodeIgniter\Router\RouteCollection;
use Myth\Auth\Config\Auth as AuthConfig;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->get('/home', 'Pages::index');

$routes->get('/alumni', 'Pages::alumni');
$routes->get('/alumni/(:num)', 'Pages::alumniDetail/$1');

$routes->get('/berita', 'Pages::berita');
$routes->get('/berita/(:num)', 'Pages::beritaDetail/$1');

$routes->get('/donasi', 'Pages::donasi');

$routes->get('/profile', 'Pages::profile');
$routes->get('/profile/edit/(:num)', 'Pages::editProfile/$1');
$routes->get('/profile/update/(:num)', 'Pages::update/$1');
$routes->post('/profile/update/(:num)', 'Pages::update/$1');

$routes->group('/admin', ['filter' => 'role:admin'], function ($routes) {
    $routes->get('/', 'Admin::index');
    $routes->get('index', 'Admin::index');
    $routes->get('(:num)', 'Admin::detail/$1');
    $routes->get('berita', 'Admin::berita');
    $routes->get('berita/(:num)', 'Admin::beritaDetail/$1');
});
