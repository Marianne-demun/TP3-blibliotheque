<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['filter' => \App\Filters\AuthenticatedFicater::class]);
$routes->get('/home', 'Home', ['filter' => \App\Filters\AuthenticatedFicater::class]);
$routes->get('/login', 'Connection::index');
$routes->post('/login', 'Connection::attemptLogin'); 
