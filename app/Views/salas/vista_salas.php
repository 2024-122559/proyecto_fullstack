<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestión de Salas - Panel</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- CSS personalizado -->
    <link href="<?= base_url('css/tablas.css') ?>" rel="stylesheet">
    <link href="<?= base_url('css/panel.css') ?>" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="bg-dark text-light">

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

            <!-- Contenido principal -->
            <div class="flex-grow-1 p-3">
                <!-- Botón Offcanvas móvil -->
                <button class="btn btn-outline-light d-md-none mb-3" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
                    <i class="bi bi-list"></i> Menú
                </button>
            </div>

            <!-- Encabezado -->
            <div class="mb-4">
                <h2><i class="bi bi-film me-2"></i>Gestión de Salas</h2>
                <p>Administra todas las salas de cine disponibles en tu plataforma</p>
            </div>

            <!-- Tarjeta Salas -->
            <div class="card card-shadow">
                <div class="card-header d-flex justify-content-between align-items-center flex-wrap gap-2">
                    <h5 class="mb-0"><i class="bi bi-list-ul me-2"></i>Listado de Salas</h5>
                    <a href="<?= base_url('salas/crear'); ?>" class="btn btn-success btn-sm btn-lg shadow">
                        <i class="bi bi-plus-circle-fill me-2"></i>Nueva Sala
                    </a>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center flex-wrap mb-4">
                        <div>
                            <h6 class="text-white mb-1">Total de salas</h6>
                            <h2 class="fw-bold text-info"><?= count($salas) ?></h2>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover align-middle text-center table-usuarios w-100">
                            <thead>
                                <tr class="table-dark">
                                    <th>Sala ID</th>
                                    <th>Nombre</th>
                                    <th>Filas</th>
                                    <th>Asientos por Fila</th>
                                    <th>Capacidad</th>
                                    <th>Tipo de Sala</th>
                                    <th>¿Está Funcionando?</th>
                                    <th>Inauguración</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($salas as $sala): ?>
                                <tr>
                                    <td><?= $sala['sala_id']; ?></td>
                                    <td class="text-start"><?= esc($sala['nombre']); ?></td>
                                    <td><?= $sala['filas']; ?></td>
                                    <td><?= $sala['asientos_por_fila']; ?></td>
                                    <td><?= $sala['capacidad']; ?></td>
                                    <td><span class="badge bg-info"><?= esc($sala['tipo_sala']); ?></span></td>
                                    <td>
                                        <?php if ($sala['activa']): ?>
                                        <span class="badge bg-success"><i
                                                class="bi bi-check-circle me-1"></i>Activa</span>
                                        <?php else: ?>
                                        <span class="badge bg-danger"><i class="bi bi-x-circle me-1"></i>Inactiva</span>
                                        <?php endif; ?>
                                    </td>
                                    <td><?= esc($sala['fecha_creacion']); ?></td>
                                    <td>
                                        <div class="d-flex justify-content-center gap-2">
                                            <a href="<?= base_url('salas/editar/'.$sala['sala_id']); ?>"
                                                class="action-link link-primary" title="Editar"><i
                                                    class="bi bi-pencil-fill"></i></a>
                                            <a href="<?= base_url('salas/eliminar/'.$sala['sala_id']); ?>"
                                                class="action-link link-danger" title="Eliminar"><i
                                                    class="bi bi-trash-fill"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

    <!-- SweetAlert2 alerta -->
    <?php if(session()->getFlashdata('mensajin')): ?>
    <script>
    let mensajin = "<?= session()->getFlashdata('mensajin') ?>";
    let textin = '';
    if (mensajin === 'agregado') {
        textin = 'Se agregó la sala correctamente';
    } else if (mensajin === 'actualizado') {
        textin = 'Se actualizó la sala correctamente';
    } else if (mensajin === 'eliminado') {
        textin = 'Se eliminó la sala correctamente';
    } else {
        textin = 'Operación realizada';
    }
    Swal.fire({
        icon: 'success',
        title: 'Éxito',
        text: textin,
        timer: 2500,
        showConfirmButton: false
    });
    </script>
    <?php endif; ?>

</body>

</html>