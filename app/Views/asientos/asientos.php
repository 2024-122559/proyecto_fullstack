<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Asientos - Panel</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
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
                <h2><i class="bi bi-columns-gap me-2"></i>Gestión de Asientos</h2>
                <p>Administra y controla todos los asientos de las salas</p>
            </div>

            <!-- Tarjeta Asientos -->
            <div class="card card-shadow">
                <div class="card-header d-flex justify-content-between align-items-center flex-wrap gap-2">
                    <h5 class="mb-0"><i class="bi bi-list-ul me-2"></i>Listado de Asientos</h5>
                    <button type="button" class="btn btn-success btn-sm btn-lg shadow" data-bs-toggle="modal"
                        data-bs-target="#modalAgregar">
                        <i class="bi bi-plus-circle-fill me-2"></i>Nuevo Asiento
                    </button>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center flex-wrap mb-4">
                        <div>
                            <h6 class="text-white mb-1">Total de asientos</h6>
                            <h2 class="fw-bold text-info"><?= count($datos) ?></h2>
                        </div>
                    </div>

                    <!-- Tabla de asientos -->
                    <div class="table-responsive">
                        <table class="table table-hover align-middle text-center table-usuarios w-100">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Sala</th>
                                    <th>Fila</th>
                                    <th>Número</th>
                                    <th>Tipo</th>
                                    <th>Activo</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($datos as $asiento): ?>
                                <tr>
                                    <td><strong><?= $asiento['asiento_id'] ?></strong></td>
                                    <td><?= $asiento['sala_id'] ?></td>
                                    <td><?= esc($asiento['fila']) ?></td>
                                    <td><?= $asiento['numero'] ?></td>
                                    <td><?= esc($asiento['tipo']) ?></td>
                                    <td>
                                        <?php if ($asiento['activo']): ?>
                                        <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i>Sí</span>
                                        <?php else: ?>
                                        <span class="badge bg-danger"><i class="bi bi-x-circle me-1"></i>No</span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center gap-2">
                                            <a href="<?= base_url('asientos/buscar/'.$asiento['asiento_id']); ?>"
                                                class="action-link btn btn-sm btn-info" title="Editar"><i
                                                    class="bi bi-pencil-fill"></i></a>
                                            <a href="<?= base_url('asientos/eliminar/'.$asiento['asiento_id']); ?>"
                                                class="action-link btn btn-sm btn-danger" title="Eliminar"
                                                onclick="return confirm('¿Desea eliminar este asiento?')"><i
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

            <!-- Modal Agregar Asiento -->
            <div class="modal fade" id="modalAgregar" tabindex="-1" aria-labelledby="modalAgregarLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg modal-fullscreen-sm-down">
                    <div class="modal-content">
                        <div class="modal-header bg-gradient"
                            style="background: linear-gradient(135deg, #28a745, #218838); color: #fff;">
                            <h5 class="modal-title" id="modalAgregarLabel"><i
                                    class="bi bi-plus-circle-fill me-2"></i>Agregar Nuevo Asiento</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                aria-label="Cerrar"></button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url('asientos/agregar') ?>" method="post">
                                <div class="row g-3">
                                    <div class="col-12 col-md-6">
                                        <label for="txt_id" class="form-label">ID Asiento</label>
                                        <input type="number" name="txt_id" id="txt_id" class="form-control" required>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="txt_sala" class="form-label">Sala ID</label>
                                        <input type="number" name="txt_sala" id="txt_sala" class="form-control"
                                            required>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="txt_fila" class="form-label">Fila</label>
                                        <input type="text" name="txt_fila" id="txt_fila" class="form-control" required>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="txt_numero" class="form-label">Número</label>
                                        <input type="number" name="txt_numero" id="txt_numero" class="form-control"
                                            required>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="txt_tipo" class="form-label">Tipo</label>
                                        <input type="text" name="txt_tipo" id="txt_tipo" class="form-control" required>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="txt_activo" class="form-label">Activo</label>
                                        <select name="txt_activo" id="txt_activo" class="form-select">
                                            <option value="1">Sí</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="d-flex gap-3 justify-content-end mt-4">
                                    <button type="button" class="btn btn-outline-danger btn-lg px-4"
                                        data-bs-dismiss="modal">
                                        <i class="bi bi-x-circle me-2"></i>Cancelar
                                    </button>
                                    <button type="submit" class="btn btn-success btn-lg px-4">
                                        <i class="bi bi-save me-2"></i>Guardar Asiento
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>