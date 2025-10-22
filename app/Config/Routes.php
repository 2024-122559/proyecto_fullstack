<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

/*agregado por abe*/
$routes->get('cine', 'CineController::index');
$routes->get('reservar/(:num)', 'ReservarController::index/$1');
$routes->get('reservas/listar', 'ReservasController::listar');




$routes->get('movies', 'MoviesController::index');










/**genero editado por abe*/

$routes->get('generos/listar', 'GenerosController::listar');
$routes->get('generos/crear', 'GenerosController::crear');
$routes->post('generos/guardar', 'GenerosController::guardar');
$routes->get('generos/editar/(:num)', 'GenerosController::editar/$1');
$routes->post('generos/actualizar/(:num)', 'GenerosController::actualizar/$1');
$routes->get('generos/eliminar/(:num)', 'GenerosController::eliminar/$1');




/**reservas */
$routes->get('reservas/listar', 'ReservasController::listar');
$routes->get('reservas/crear', 'ReservasController::crear');
$routes->post('reservas/guardar', 'ReservasController::guardar');
$routes->get('reservas/editar/(:num)', 'ReservasController::editar/$1');
$routes->post('reservas/actualizar/(:num)', 'ReservasController::actualizar/$1');
$routes->get('reservas/eliminar/(:num)', 'ReservasController::eliminar/$1');

/**salas */
// editato por abe
$routes->get('salas/listar', 'SalasController::listar');
$routes->get('salas/crear', 'SalasController::crear');
$routes->post('salas/guardar', 'SalasController::guardar');
$routes->get('salas/editar/(:num)', 'SalasController::editar/$1');
$routes->post('salas/actualizar/(:num)', 'SalasController::actualizar/$1');
$routes->get('salas/eliminar/(:num)', 'SalasController::eliminar/$1');

