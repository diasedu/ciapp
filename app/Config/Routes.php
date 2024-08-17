<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/artigo', 'Artigo::index');
$routes->get('/artigo2', 'Artigo2::index');
$routes->get('/artigo/mostrar/(:num)', 'Artigo::mostrar/$1');
$routes->get('/artigo/inserir', 'Artigo::inserir');
$routes->post('/artigo/criar', 'Artigo::criar');
$routes->get('/artigo/editar/(:num)', 'Artigo::editar/$1');