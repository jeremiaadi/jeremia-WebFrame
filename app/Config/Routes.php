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
$routes->get('/blogdetail', 'Home::blogDetail');
$routes->get('/blogdetail2', 'Home::blogDetail2');
$routes->get('/blogdetail3', 'Home::blogDetail3');
$routes->get('/adminblog', 'AdminBlog::index');
$routes->get('/adminblog/create', 'AdminBlog::create');
$routes->post('/adminblog/store', 'AdminBlog::store');
$routes->get('/adminblog/delete/(:num)', 'AdminBlog::delete/$1');
$routes->get('/adminblog/edit/(:num)', 'AdminBlog::edit/$1');
$routes->post('/adminblog/update/(:num)', 'AdminBlog::update/$1');
$routes->get('/blog', 'Blog::index');
$routes->get('/blog/(:num)', 'Blog::detail/$1');
$routes->post('adminblog/create', 'AdminBlog::create');

