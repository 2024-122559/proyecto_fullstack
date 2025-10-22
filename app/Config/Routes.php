<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
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

/**genero */
$routes->get('generos', 'GenerosController::index');
$routes->post('agregar_generos', 'GenerosController::agregarGeneros');
$routes->get('eliminar_generos', 'GenerosController::eliminarGeneros');
$routes->post('modificar_generos', 'GenerosController::modificarGeneros');
$routes->get('buscar_generos', 'GenerosController::buscarGeneros');

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
$routes->get('reservas', 'ReservasController::index');
$routes->post('agregar_reservas', 'ReservasController::agregarReservas');
$routes->get('eliminar_reservas', 'ReservasController::eliminarReservas');
$routes->post('modificar_reservas', 'ReservasController::modificarReservas');
$routes->get('buscar_reservas', 'ReservasController::buscarReservas');

/**salas */
$routes->get('salas', 'SalasController::index');
$routes->post('agregar_salas', 'SalasController::agregarSalas');
$routes->get('eliminar_salas', 'SalasController::eliminarSalas');
$routes->post('modificar_salas', 'SalasController::modificarSalas');
$routes->get('buscar_salas', 'SalasController::buscarSalas');

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

$routes->get('/reservas', 'ReservasController::index');
$routes->get('/admin', 'AdminController::index');