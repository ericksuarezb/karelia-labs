<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('serum-antiedad-efecto-tensor', 'Products::seoImagePage/serum-antiedad-efecto-tensor');
$routes->get('serum-crema-reafirmante-peptidos', 'Products::seoImagePage/serum-crema-reafirmante-peptidos');
$routes->get('serum-regenerador-hidratacion', 'Products::seoImagePage/serum-regenerador-hidratacion');
$routes->get('productos', 'Products::index');
$routes->get('productos/(:segment)', 'Products::show/$1');
$routes->get('modo-uso/(:segment)', 'Products::usage/$1');
