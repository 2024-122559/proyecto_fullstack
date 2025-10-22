<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestión de Usuarios - Panel</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- CSS personalizado -->
    <link href="<?= base_url('css/tablas.css') ?>" rel="stylesheet">
    <link href="<?= base_url('css/panel.css') ?>" rel="stylesheet">
</head>

<body class="bg-dark text-light">

    <!-- Sidebar Offcanvas para móviles -->
    <div class="offcanvas offcanvas-start text-light bg-dark" tabindex="-1" id="offcanvasSidebar"
        aria-labelledby="offcanvasSidebarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasSidebarLabel">Panel de Control</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                aria-label="Cerrar"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="#">
                        <i class="bi bi-house-door-fill me-2"></i>Inicio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="<?= base_url('usuarios') ?>">
                        <i class="bi bi-speedometer2 me-2"></i>Usuarios
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="d-flex">
        <!-- Sidebar Desktop -->
        <div class="sidebar col-md-3 col-lg-2 p-3 d-none d-md-block bg-dark text-light">
            <h4 class="mb-4 border-bottom pb-2">Panel de Control</h4>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="#">
                        <i class="bi bi-house-door-fill me-2"></i>Inicio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="<?= base_url("usuarios") ?>">
                        <i class="bi bi-speedometer2 me-2"></i>Usuarios
                    </a>
                </li>
            </ul>
        </div>

        <!-- Contenido principal -->
        <div class="flex-grow-1 p-3">

            <!-- Botón Offcanvas móvil -->
            <button class="btn btn-outline-light d-md-none mb-3" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
                <i class="bi bi-list"></i> Menú
            </button>

            <!-- Encabezado -->
            <div class="mb-4">
                <h2><i class="bi bi-people-fill me-2"></i>Gestión de Usuarios</h2>
                <p>Administra y controla todos los usuarios de tu plataforma</p>
            </div>

            <!-- Tarjeta usuarios -->
            <div class="card card-shadow">
                <div class="card-header d-flex justify-content-between align-items-center flex-wrap gap-2">
                    <h5 class="mb-0"><i class="bi bi-list-ul me-2"></i>Listado de Usuarios</h5>
                    <button type="button" class="btn btn-warning btn-sm btn-lg shadow" data-bs-toggle="modal"
                        data-bs-target="#modalAgregar">
                        <i class="bi bi-plus-circle-fill me-2"></i>Nuevo Usuario
                    </button>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center flex-wrap mb-4">
                        <div>
                            <h6 class="text-white mb-1">Total de usuarios</h6>
                            <h2 class="fw-bold text-info"><?= count($datos) ?></h2>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover align-middle text-center table-usuarios w-100">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre Completo</th>
                                    <th>Email</th>
                                    <th>Teléfono</th>
                                    <th>Tipo</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($datos as $usuario): ?>
                                <tr>
                                    <td><strong><?= $usuario['usuario_id'] ?></strong></td>
                                    <td class="text-start">
                                        <div class="d-flex align-items-center">
                                            <div class="user-avatar me-3">
                                                <?= strtoupper(substr($usuario['nombre'], 0, 1)) ?>
                                            </div>
                                            <div>
                                                <div class="fw-bold">
                                                    <?= esc($usuario['nombre']) . ' ' . esc($usuario['apellido']) ?>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><i class="bi bi-envelope me-2 text-muted"></i><?= esc($usuario['email']) ?></td>
                                    <td><i class="bi bi-telephone me-2 text-muted"></i><?= esc($usuario['telefono']) ?>
                                    </td>
                                    <td><span class="badge bg-info"><?= esc($usuario['tipo_usuario']) ?></span></td>
                                    <td>
                                        <?php if ($usuario['activo']): ?>
                                        <span class="badge bg-success"><i
                                                class="bi bi-check-circle me-1"></i>Activo</span>
                                        <?php else: ?>
                                        <span class="badge bg-danger"><i class="bi bi-x-circle me-1"></i>Inactivo</span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center gap-2">
                                            <a href="<?= base_url('usuarios/editar/' . $usuario['usuario_id']) ?>"
                                                class="action-link link-primary" title="Editar"><i
                                                    class="bi bi-pencil-fill"></i></a>
                                            <a href="<?= base_url('usuarios/eliminar/' . $usuario['usuario_id']) ?>"
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

    <!-- Modal Agregar Usuario (Responsive) -->
    <div class="modal fade" id="modalAgregar" tabindex="-1" aria-labelledby="modalAgregarLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header bg-gradient"
                    style="background: linear-gradient(135deg, #667eea, #764ba2); color: #fff;">
                    <h5 class="modal-title" id="modalAgregarLabel"><i class="bi bi-person-plus-fill me-2"></i>Agregar
                        Nuevo Usuario</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('usuarios/agregar') ?>" method="post">
                        <div class="row g-3">
                            <div class="col-12 col-md-6">
                                <label for="txt_id" class="form-label"><i class="bi bi-hash me-2"></i>ID Usuario</label>
                                <input type="number" name="txt_id" id="txt_id" class="form-control" required
                                    placeholder="Ingrese ID">
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="txt_tipo" class="form-label"><i class="bi bi-person-badge me-2"></i>Tipo de
                                    Usuario</label>
                                <input type="text" name="txt_tipo" id="txt_tipo" class="form-control" required
                                    placeholder="Admin, Usuario">
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="txt_nombre" class="form-label"><i
                                        class="bi bi-person me-2"></i>Nombre</label>
                                <input type="text" name="txt_nombre" id="txt_nombre" class="form-control" required
                                    placeholder="Ingrese nombre">
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="txt_apellido" class="form-label"><i
                                        class="bi bi-person me-2"></i>Apellido</label>
                                <input type="text" name="txt_apellido" id="txt_apellido" class="form-control" required
                                    placeholder="Ingrese apellido">
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="txt_email" class="form-label"><i
                                        class="bi bi-envelope me-2"></i>Email</label>
                                <input type="email" name="txt_email" id="txt_email" class="form-control" required
                                    placeholder="usuario@ejemplo.com">
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="txt_password" class="form-label"><i
                                        class="bi bi-lock me-2"></i>Contraseña</label>
                                <input type="password" name="txt_password" id="txt_password" class="form-control"
                                    required placeholder="••••••••">
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="txt_telefono" class="form-label"><i
                                        class="bi bi-telephone me-2"></i>Teléfono</label>
                                <input type="text" name="txt_telefono" id="txt_telefono" class="form-control"
                                    placeholder="+502 1234-5678">
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="select_tipo_usuario" class="form-label"><i
                                        class="bi bi-person-badge me-2"></i>Selecciona Tipo de Usuario</label>
                                <select id="select_tipo_usuario" name="select_tipo_usuario" class="form-select">
                                    <option selected>Elige un tipo de usuario</option>
                                    <option value="1">Administrador</option>
                                    <option value="2">Usuario</option>
                                    <option value="3">Invitado</option>
                                </select>
                            </div>
                        </div>

                        <div class="d-flex gap-3 justify-content-end mt-4">
                            <button type="button" class="btn btn-outline-danger btn-lg px-4" data-bs-dismiss="modal">
                                <i class="bi bi-x-circle me-2"></i>Cancelar
                            </button>
                            <button type="submit" class="btn btn-success btn-lg px-4">
                                <i class="bi bi-save me-2"></i>Guardar Usuario
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>