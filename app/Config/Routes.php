<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');  // Default route
$routes->get('products', 'Products::index'); // Products page