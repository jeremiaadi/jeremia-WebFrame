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

$routes->get('/detail/(:any)', 'Home::detail/$1');

// admin 
$routes->get('admin','Blog::index');
$routes->get('/admin/detail/(:any)','Blog::detail/$1');
$routes->get('create','Blog::create');
$routes->post('admin/save','Blog::save');
$routes->delete('admin/(:num)', 'Blog::delete/$1');
$routes->get('admin/edit/(:segment)', 'Blog::edit/$1');
$routes->post('admin/edit/(:num)', 'Blog::update/$1');




