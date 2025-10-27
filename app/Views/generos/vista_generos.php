<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Géneros - Panel de Control</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <!-- CSS personalizado -->
    <link href="<?= base_url('css/panel.css') ?>" rel="stylesheet">
    <link href="<?= base_url('css/tablas.css') ?>" rel="stylesheet">
    <!-- SweetAlert y jQuery -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
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
                    <a class="nav-link text-secondary" href="<?= base_url('cine_index') ?>">
                        <i class="bi bi-house-door-fill me-2"></i>Inicio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="<?= base_url('usuarios') ?>">
                        <i class="bi bi-speedometer2 me-2"></i>Usuarios
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white" href="<?= base_url('generos') ?>">
                        <i class="bi bi-bookmark-fill me-2"></i>Géneros
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
                    <a class="nav-link text-secondary" href="<?= base_url('cine_index') ?>">
                        <i class="bi bi-house-door-fill me-2"></i>Inicio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="<?= base_url('usuarios') ?>">
                        <i class="bi bi-speedometer2 me-2"></i>Usuarios
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white" href="<?= base_url('generos') ?>">
                        <i class="bi bi-bookmark-fill me-2"></i>Géneros
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
                <h2><i class="bi bi-bookmark-fill me-2"></i>Gestión de Géneros</h2>
                <p>Administra todos los géneros disponibles en tu plataforma</p>
            </div>

            <!-- Tarjeta Géneros -->
            <div class="card card-shadow">
                <div class="card-header d-flex justify-content-between align-items-center flex-wrap gap-2">
                    <h5 class="mb-0"><i class="bi bi-list-ul me-2"></i>Listado de Géneros</h5>
                    <a href="<?= base_url('generos/crear'); ?>" class="btn btn-success btn-sm btn-lg shadow">
                        <i class="bi bi-plus-circle-fill me-2"></i>Agregar Género
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle text-center table-striped table-bordered w-100">
                            <thead class="table-dark">
                                <tr>
                                    <th>Código</th>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($generos as $genero): ?>
                                <tr>
                                    <td><?= $genero['id_genero']; ?></td>
                                    <td><?= esc($genero['nombre']); ?></td>
                                    <td><?= esc($genero['descripcion']); ?></td>
                                    <td>
                                        <div class="d-flex justify-content-center gap-2">
                                            <a href="<?= base_url('generos/editar/'.$genero['id_genero']); ?>"
                                                class="btn btn-sm btn-info">
                                                <i class="bi bi-pencil-fill"></i>
                                            </a>
                                            <a href="<?= base_url('generos/eliminar/'.$genero['id_genero']); ?>"
                                                class="btn btn-sm btn-danger"
                                                onclick="return confirm('¿Desea eliminar este género?')">
                                                <i class="bi bi-trash-fill"></i>
                                            </a>
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

    <!-- SweetAlert mensajes -->
    <?php if (session()->getFlashdata('mensaje')): ?>
    <script>
    let mensaje = "<?= session()->getFlashdata('mensaje') ?>";
    let texto = mensaje == 'agregado' ? 'Se agregó el género correctamente' :
        mensaje == 'error' ? 'No se puede repetir' :
        mensaje == 'se jue' ? 'Se eliminó el género correctamente' :
        'Acción completada';
    Swal.fire({
        icon: 'success',
        title: 'Éxito',
        text: texto,
        timer: 2000,
        showConfirmButton: false
    });
    </script>
    <?php endif; ?>

</body>

</html>