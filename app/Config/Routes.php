<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');  // Default route
$routes->get('products', 'ProductController::index');
$routes->get('product/(:num)', 'ProductController::show/$1');
$routes->get('test', 'TestController::index');
// ... any other routes involving product actions ...