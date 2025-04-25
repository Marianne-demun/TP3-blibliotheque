<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['filter' => \App\Filters\IsLoggedin::class]);
$routes->get('/home', 'Home', ['filter' => \App\Filters\IsLoggedin::class]);
$routes->get('/login', 'Connection::index');
$routes->post('/login', 'Connection::attemptLogin'); 
$routes->post('/aboutus', 'Connection::aboutus');
$routes->get('/aboutus', 'Connection::aboutus');