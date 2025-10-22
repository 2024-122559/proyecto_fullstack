<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEOCINE - el mejor cine de Guate</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
</head>

<body>
    <!-- Fondito de pantalla bonito -->
    <div class="stars"></div>
    <div class="shooting-star"></div>
    <div class="shooting-star"></div>
    <div class="shooting-star"></div>
    <div class="shooting-star"></div>
    <div class="shooting-star"></div>

    <div class="cine-container">
        <div class="cine-header">
            <img src="https://i.ibb.co/YFk7Dkhr/CINE.png" alt="Cine Header" class="header-image" width="100%">
        </div>

        <nav class="navbar navbar-expand-lg navbar-custom">
            <div class="container">
                <div class="buttonhead">
                    <?php if(session()->get('logged_in')): ?>
                    <div class="me-3 user-avatar" title="<?= esc(session()->get('nombre')) ?>">
                        <?= esc(substr(session()->get('nombre'), 0, 1)) ?>
                    </div>

                    <a class="nav-link" href="<?= base_url('logout'); ?>">Cerrar Sesión</a>
                    <a class="nav-link" href="<?= base_url('movies'); ?>">Reservar</a>
                    <?php else: ?>
                    <a class="nav-link" href="<?= base_url('login'); ?>">Iniciar Sesión</a>
                    <a class="nav-link" href="<?= base_url('movies'); ?>">Reservar</a>
                    <?php endif; ?>
                </div>
            </div>
        </nav>

        <div class="vineta">
            <span>Estreno</span>
            <p>プレミア</p>
        </div>

        <div class="img-estreno">
            <img src="https://i.ibb.co/39t0n54H/estreno.png" class="animate__animated animate__fadeInDown" alt="Estreno"
                width="100%">
        </div>

        <div class="text-center">
            <a href="<?= base_url('movies'); ?>" class="btn btn-success btn-lg mt-3">Reservar</a>
        </div>

        <div class="vineta">
            <span>Películas</span>
            <p>映画</p>
        </div>

        <div class="display">
            <div class="scriptin">
                <p>Función bonita para mostrar pelis acá</p>
            </div>
        </div>

        <div class="piecito">
            <div class="cine-header">
                <img src="https://i.ibb.co/spP1PCZN/piecito.png" alt="Cine Footer" class="header-image" width="100%">
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>