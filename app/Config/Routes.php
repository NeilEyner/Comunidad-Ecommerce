<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
<<<<<<< HEAD
$routes->get('/', 'Inicio::index');
=======
$routes->get('/', 'Home::index');
$routes->get('/nosotros', 'Home::nosotros');
$routes->get('/tienda', 'Home::tienda');
$routes->get('/contacto', 'Home::contacto');
$routes->get('/comunidades', 'Home::comunidades');

>>>>>>> 08a335672d36af016a584860d7058d65f8d17e96
$routes->get('register', 'AuthController::register');
$routes->post('register', 'AuthController::do_register');
$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::do_login');
$routes->get('logout', 'AuthController::logout');

$routes->get('dashboard/artesano', 'DashboardController::artesano');
$routes->get('dashboard/cliente', 'DashboardController::cliente');
$routes->get('dashboard/delivery', 'DashboardController::delivery');
$routes->get('dashboard/admin', 'DashboardController::admin');
$routes->get('dashboard/admin_usuarios', 'DashboardController::admin_user');
$routes->get('dashboard/admin_comunidades', 'DashboardController::admin_comunidad');