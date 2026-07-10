<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('productos', 'Products::index');
$routes->get('productos/(:segment)', 'Products::show/$1');
$routes->get('modo-uso/(:segment)', 'Products::usage/$1');
