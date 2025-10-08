<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

/*agregado por abe*/
$routes->get('cine', 'CineController::index');


$routes->get('iniciar_sesion', 'LoginController::index');
$routes->post('login/login', 'LoginController::login');
$routes->get('logout', 'LoginController::logout');
$routes->get('movies', 'MoviesController::index');


/** asientos */
$routes->get('asientos', 'AsientosControlller::index');
$routes->post('agregar_asientos', 'AsientosController::agregarAsientos');
$routes->get('eliminar_asientos', 'AsientosController::eliminarAsientos');
$routes->post('modificar_asientos', 'AsientosController::modificarAsientos');
$routes->get('buscar_asientos', 'AsientosController::buscarAsientos');

/**configuracion */
$routes->get('configuracion', 'ConfiguracionController::index');
$routes->post('agregar_configuracion', 'ConfiguracionController::agregarConfiguracion');
$routes->get('eliminar_configuracion', 'ConfiguracionController::eliminarConfiguracion');
$routes->post('modificar_configuracion', 'ConfiguracionController::modificarConfiguracion');
$routes->get('buscar_configuracion', 'ConfiguracionController::buscarConfiguracion');

/**detalle reservas */
$routes->get('detalles_reservas', 'Detalles_reservasController::index');
$routes->post('agregar_detalles_reservas', 'Detalles_reservasController::agregarDetalles_reservas');
$routes->get('eliminar_detalles_reservas', 'Detalles_reservasController::eliminarDetalles_reservas');
$routes->post('modificar_detalles_reservas', 'Detalles_reservasController::modificarDetalles_reservas');
$routes->get('buscar_detalles_reservas', 'Detalles_reservasController::buscarDetalles_reservas');

/**estados */
$routes->get('estados', 'EstadosController::index');
$routes->post('agregar_estados', 'EstadosController::agregarEstados');
$routes->get('eliminar_estados', 'EstadosController::eliminarEstados');
$routes->post('modificar_estados', 'EstadosController::modificarEstados');
$routes->get('buscar_estados', 'EstadosController::buscarEstados');

/**funciones */
$routes->get('funciones', 'FuncionesController::index');
$routes->post('agregar_funciones', 'FuncionesController::agregarFunciones');
$routes->get('eliminar_funciones', 'FuncionesController::eliminarFunciones');
$routes->post('modificar_funciones', 'FuncionesController::modificarFunciones');
$routes->get('buscar_funciones', 'FuncionesController::buscarFunciones');

/**genero editado por abe*/

$routes->get('generos/listar', 'GenerosController::listar');
$routes->get('generos/crear', 'GenerosController::crear');
$routes->post('generos/guardar', 'GenerosController::guardar');
$routes->get('generos/editar/(:num)', 'GenerosController::editar/$1');
$routes->post('generos/actualizar/(:num)', 'GenerosController::actualizar/$1');
$routes->get('generos/eliminar/(:num)', 'GenerosController::eliminar/$1');

/**pagos */
$routes->get('pagos', 'PagosController::index');
$routes->post('agregar_pagos', 'PagosController::agregarPagos');
$routes->get('eliminar_pagos', 'PagosController::eliminarPagos');
$routes->post('modificar_pagos', 'PagosController::modificarPagos');
$routes->get('buscar_pagos', 'PagosController::buscarPagos');

/**peliculas */
$routes->get('peliculas', 'PeliculasController::index');
$routes->post('agregar_peliculas', 'PeliculasController::agregarPeliculas');
$routes->get('eliminar_peliculas', 'PeliculasController::eliminarPeliculas');
$routes->post('modificar_peliculas', 'PeliculasController::modificarPeliculas');
$routes->get('buscar_peliculas', 'PeliculasController::buscarPeliculas');

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

/**usuarios */
$routes->get('usuarios', 'UsuariosController::index');
$routes->post('agregar_usuarios', 'UusuariosConroller::agregarUsuarios');
$routes->get('eliminar:usuarios', 'UsuariosController::eliminarUsuarios');
$routes->post('modificar_usuarios', 'UsuariosController::modificarUsuarios');
$routes->get('buscar_usuario', 'UsuariosController::buscarUsuarios');