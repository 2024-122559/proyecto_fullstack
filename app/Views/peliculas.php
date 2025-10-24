<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEOCINE - peliculas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
</head>

<body>
    <!-- fondito de patalla bonito -->
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
                    <div class="me-3 user-avatar" title="<?= esc(session()->get('id')) ?>">
                        <?= esc(substr(session()->get('id'), 0, 1)) ?>
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
            <span>Peliculas</span>
            <p>映画</p>
        </div>

        <div class="moviegrid">
            <?php foreach ($peliculas as $pelicula): ?>
            <div class="todaslaspelis">
                <img src="<?= esc($pelicula['poster_url']) ?>" alt="<?= esc($pelicula['titulo']) ?>"
                    class="postersitos">
                <a href="<?= base_url('reservar/' . $pelicula['id']) ?>"
                    class="btn btn-success btn-reservar">Reservar</a>
            </div>
            <?php endforeach; ?>
        </div>



        <div class="piecito">
            <div class="cine-header">
                <img src="https://i.ibb.co/spP1PCZN/piecito.png" alt="Cine Header" class="header-image" width="100%">

            </div>

        </div>

</body>

</html>