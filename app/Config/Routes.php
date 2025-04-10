<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/services', 'Home::services');
$routes->get('/portfolio', 'Home::portfolio');
$routes->get('/team', 'Home::team');
$routes->get('/blog', 'Home::blog');
$routes->get('/contact', 'Home::contact');
$routes->get('/blog-detail/(:segment)', 'Home::blogDetail/$1');