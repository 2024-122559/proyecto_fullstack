<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sidebar Básico Dark</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('css/panel.css') ?>" rel="stylesheet">
</head>

<body>
    <div class="dark-mode d-flex">
        <div class="sidebar col-md-3 col-lg-2 p-3 d-none d-md-block">
            <h4 class="mb-4 text-white border-bottom pb-2">Panel de Control</h4>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="#">
                        <i class="bi bi-house-door-fill me-2"></i>Inicio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="<?=base_url("usuarios")?>">
                        <i class="bi bi-speedometer2 me-2"></i>Usuarios
                    </a>
                </li>
            </ul>
        </div>

        <div class="main-content flex-grow-1 p-4">
            <button class="btn btn-outline-light d-md-none mb-3" type="button" data-bs-toggle="collapse"
                data-bs-target="#sidebarCollapse" aria-expanded="false" aria-controls="sidebarCollapse">
                <i class="bi bi-list"></i> Menú
            </button>
            <div class="collapse d-md-none" id="sidebarCollapse">
                <div class="sidebar p-3 mb-3">
                    <h4 class="mb-4 text-white border-bottom pb-2">Panel de Control</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="<?=base_url("usuarios")?>">Usuarios</a>
                        </li>
                    </ul>
                </div>
            </div>

            <h1 class="text-light">Contenido Principal</h1>
            <p class="text-secondary">Aquí va el contenido de tu página. Este diseño es responsivo y se adapta bien a
                diferentes tamaños de pantalla, ocultando el *sidebar* en móviles para maximizar el área de contenido.
            </p>
            <div class="p-3 bg-secondary bg-opacity-10 text-white rounded mt-4">
                <p>Ejemplo de tarjeta de contenido.</p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</body>

</html>