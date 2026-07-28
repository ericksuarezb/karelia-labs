<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('serum-antiedad-efecto-tensor', 'Products::seoImagePage/serum-antiedad-efecto-tensor');
$routes->get('serum-crema-reafirmante-peptidos', 'Products::seoImagePage/serum-crema-reafirmante-peptidos');
$routes->get('serum-regenerador-hidratacion', 'Products::seoImagePage/serum-regenerador-hidratacion');
$routes->get('crema-concha-nacar-arroz', 'Products::seoImagePage/crema-concha-nacar-arroz');
$routes->get('crema-hidratante-niacinamida', 'Products::seoImagePage/crema-hidratante-niacinamida');
$routes->get('crema-tatuajes-mujer-pantenol', 'Products::seoImagePage/crema-tatuajes-mujer-pantenol');
$routes->get('crema-tatuajes-hombre-pantenol', 'Products::seoImagePage/crema-tatuajes-hombre-pantenol');
$routes->get('gel-botanico-arnica-calendula-romero', 'Products::seoImagePage/gel-botanico-arnica-calendula-romero');
$routes->get('serum-capilar-mujer-minoxidil-5-keratina', 'Products::seoImagePage/serum-capilar-mujer-minoxidil-5-keratina');
$routes->get('serum-capilar-hombre-minoxidil-5-barba', 'Products::seoImagePage/serum-capilar-hombre-minoxidil-5-barba');
$routes->get('productos', 'Products::index');
$routes->get('productos/(:segment)', 'Products::show/$1');
$routes->get('modo-uso/(:segment)', 'Products::usage/$1');
