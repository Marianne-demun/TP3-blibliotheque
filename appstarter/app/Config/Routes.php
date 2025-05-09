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
$routes->post('/espaceabonne', 'Connection::espaceabbonne');
$routes->get('/espaceabonne', 'Connexion::espaceabonne');
$routes->post('/gestion_livres','Connexion::gestion_livres');
$routes->get('/gestion_livres','Connexion::gestion_livres');
$routes->post('/gestion_abonnes','Connexion::gestion_abonnes');
$routes->get('/gestion_abonnes','Connexion::gestion_abonnes');