<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/example', 'Home::example');
$routes->get('login', 'Auth::login');
$routes->post('login', 'Auth::authenticate');
$routes->get('logout', 'Auth::logout');
$routes->group('users', static function ($routes) {
    $routes->get('/', 'Users::index');
    $routes->get('create', 'Users::create');
    $routes->post('store', 'Users::store');
    $routes->get('edit/(:num)', 'Users::edit/$1');
    $routes->post('update/(:num)', 'Users::update/$1');
    $routes->get('delete/(:num)', 'Users::delete/$1');
});
$routes->group('mikrotik-devices', static function ($routes) {
    $routes->get('/', 'MikrotikDevices::index');
    $routes->get('create', 'MikrotikDevices::create');
    $routes->post('store', 'MikrotikDevices::store');
    $routes->get('edit/(:num)', 'MikrotikDevices::edit/$1');
    $routes->post('update/(:num)', 'MikrotikDevices::update/$1');
    $routes->get('delete/(:num)', 'MikrotikDevices::delete/$1');
    $routes->get('dashboard', 'MikrotikDevices::dashboard');
});
