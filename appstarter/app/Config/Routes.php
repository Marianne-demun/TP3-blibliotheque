<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['filter' => \App\Filters\AuthenticatedFicater::class]);
$routes->get('/home', 'Home':: \App\Filters\AuthenticatedFicater::class)
$routes->get('/login', 'Connection::index');
$routes->post('/login', 'Connection::attemptLogin');
$routes->get('/aboutus', 'Connection::aboutus');
$routes->post('/aboutus', 'Connection::aboutus');
