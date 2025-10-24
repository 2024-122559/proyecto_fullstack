<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

/* Cine */
$routes->get('cine', 'CineController::index');

/* Películas */
$routes->get('movies', 'MoviesController::index');                 // Listado de películas
$routes->get('reservar/(:num)', 'ReservarController::index/$1');  // Ver funciones de una película

/* Selección y reserva de asientos */
$routes->get('reservas/asientos', 'ReservarController::asientos');          // Selección de asiento
$routes->post('reservas/detalle', 'ReservarController::detalle'); 








/**genero editado por abe*/

$routes->get('generos/listar', 'GenerosController::listar');
$routes->get('generos/crear', 'GenerosController::crear');
$routes->post('generos/guardar', 'GenerosController::guardar');
$routes->get('generos/editar/(:num)', 'GenerosController::editar/$1');
$routes->post('generos/actualizar/(:num)', 'GenerosController::actualizar/$1');
$routes->get('generos/eliminar/(:num)', 'GenerosController::eliminar/$1');

/** Usuarios */
$routes->get('usuarios', 'UsuariosController::vistaUsuarios');          // Lista de usuarios
$routes->post('usuarios/agregar', 'UsuariosController::agregarUsuario'); // Inserta un nuevo usuario
$routes->get('usuarios/eliminar/(:num)', 'UsuariosController::eliminarUsuario/$1'); // Elimina usuario
$routes->get('usuarios/editar/(:num)', 'UsuariosController::buscarUsuario/$1');    // Formulario de edición
$routes->post('usuarios/actualizar/(:num)', 'UsuariosController::actualizarUsuario/$1'); // Actualiza usuario

/** Panel de control */
$routes->get('panel', 'PanelController::index');
$routes->get('/login', 'LoginController::index');
$routes->post('/login/autenticar', 'LoginController::autenticar');
$routes->get('/logout', 'LoginController::logout');

$routes->get('/user', 'UserController::index');
$routes->get('/admin', 'AdminController::index');

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

/**funciones */
$routes->get('funciones', 'FuncionesController::vistaFunciones');
$routes->post('funciones/agregar', 'FuncionesController::agregarFuncion');
$routes->get('funciones/eliminar/(:num)', 'FuncionesController::eliminarFuncion/$1');
$routes->get('funciones/editar/(:num)', 'FuncionesController::buscarFuncion/$1');
$routes->post('funciones/actualizar/(:num)', 'FuncionesController::actualizarFuncion/$1');

/**peliculas */
$routes->get('peliculas', 'PeliculasController::vistaPeliculas');
$routes->post('peliculas/agregar', 'PeliculasController::agregarPelicula');
$routes->get('peliculas/eliminar/(:num)', 'PeliculasController::eliminarPelicula/$1');
$routes->get('peliculas/editar/(:num)', 'PeliculasController::buscarPelicula/$1');
$routes->post('peliculas/actualizar/(:num)', 'PeliculasController::actualizarPelicula/$1');
$routes->get('reservar/(:num)', 'PeliculasController::verReservar/$1');
