<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel de Control - NEOCINE</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS personalizado -->
    <link href="<?= base_url('css/panel.css') ?>" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>

<body>
    <div class="dark-mode d-flex">

        <!-- Sidebar para pantallas grandes -->
        <div class="sidebar col-md-3 col-lg-2 p-3 d-none d-md-block bg-dark text-light">
            <h4 class="mb-4 border-bottom pb-2">Panel de Control</h4>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active text-white" href="<?= base_url('cine_index') ?>">
                        <i class="bi bi-house-door-fill me-2"></i>Inicio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="<?= base_url('usuarios') ?>">
                        <i class="bi bi-speedometer2 me-2"></i>Usuarios
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="<?= base_url('reservas/listar') ?>">
                        <i class="bi bi-ticket-fill me-2"></i>Reservas
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="<?= base_url('generos/listar') ?>">
                        <i class="bi bi-bookmark-fill me-2"></i>Géneros
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="<?= base_url('salas/listar') ?>">
                        <i class="bi bi-bookmark-fill me-2"></i>Salas
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="<?= base_url('funciones') ?>">
                        <i class="bi bi-bookmark-fill me-2"></i>Funciones
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="<?= base_url('peliculas') ?>">
                        <i class="bi bi-bookmark-fill me-2"></i>Peliculas
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="<?= base_url('asientos') ?>">
                        <i class="bi bi-bookmark-fill me-2"></i>Asientos
                    </a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="<?= base_url('estados') ?>">
                        <i class="bi bi-bookmark-fill me-2"></i>Estados
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="<?= base_url('detalles_reservas') ?>">
                        <i class="bi bi-bookmark-fill me-2"></i>Detalle Reservas
                    </a>
                </li>
            </ul>
        </div>

        <!-- Contenido principal -->
        <div class="main-content flex-grow-1 p-4">

            <!-- Botón para móviles -->
            <button class="btn btn-outline-light d-md-none mb-3" type="button" data-bs-toggle="collapse"
                data-bs-target="#sidebarCollapse" aria-expanded="false" aria-controls="sidebarCollapse">
                <i class="bi bi-list"></i> Menú
            </button>

            <!-- Sidebar colapsable para móviles -->
            <div class="collapse d-md-none" id="sidebarCollapse">
                <div class="sidebar p-3 mb-3 bg-dark text-light">
                    <h4 class="mb-4 border-bottom pb-2">Panel de Control</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="<?= base_url('cine_index') ?>">
                                <i class="bi bi-house-door-fill me-2"></i>Inicio
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="<?= base_url('usuarios') ?>">
                                <i class="bi bi-speedometer2 me-2"></i>Usuarios
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="<?= base_url('reservas/listar') ?>">
                                <i class="bi bi-ticket-fill me-2"></i>Reservas
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="<?= base_url('generos/listar') ?>">
                                <i class="bi bi-bookmark-fill me-2"></i>Géneros
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="<?= base_url('salas/listar') ?>">
                                <i class="bi bi-bookmark-fill me-2"></i>Salas
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="<?= base_url('funciones') ?>">
                                <i class="bi bi-bookmark-fill me-2"></i>Funciones
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="<?= base_url('peliculas') ?>">
                                <i class="bi bi-bookmark-fill me-2"></i>Peliculas
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="<?= base_url('asientos') ?>">
                                <i class="bi bi-bookmark-fill me-2"></i>Asientos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="<?= base_url('asientos') ?>">
                                <i class="bi bi-bookmark-fill me-2"></i>Asientos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="<?= base_url('estados') ?>">
                                <i class="bi bi-bookmark-fill me-2"></i>Estados
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="<?= base_url('detalles_reservas') ?>">
                                <i class="bi bi-bookmark-fill me-2"></i>Detalle Reservas
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Contenido principal de la página -->
            <div class="contenido-principal">
                <h1 class="text-light">Bienvenido al Panel de NEOCINE</h1>
                <p class="text-secondary">
                    Selecciona una opción del menú para gestionar Usuarios, Reservas o Géneros.
                </p>

                <!-- Ejemplo de tarjeta -->
                <div class="p-3 bg-secondary bg-opacity-10 text-white rounded mt-4">
                    <p>Esta área se puede reemplazar con la vista correspondiente según la sección seleccionada.</p>
                </div>
            </div>

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>