<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEOCINE - el mejor cine de guate</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">

    <style>
    .display {
        overflow: hidden;
        width: 100%;
        height: auto;
        padding: 20px 0;
        background-color: rgba(0, 0, 0, 0.8);
    }

    .moviegrid {
        display: flex;
        gap: 20px;
        animation: slide 20s linear infinite;
        white-space: nowrap;
        min-width: 100%;
    }

    .todaslaspelis {
        display: inline-block;
        text-align: center;
        width: 200px;
        flex-shrink: 0;
    }

    .btn-reservar {
        position: absolute;
        bottom: 70px;
        left: 50%;
        transform: translateX(-50%);
        background-color: #6e108b;
        color: white;
        border: none;
        padding: 8px 16px;
        font-family: "Japanese Robot";
        font-size: 16px;
        border-radius: 5px;
        text-decoration: none;
        opacity: 0.8;
        transition: opacity 0.3s ease;
    }

    .postersitos {
        width: 100%;
        max-width: 200px;
        height: auto;
        border-radius: 5px;
    }

    .movie-title {
    font-family: "Asiana";
        color: white;
        font-size: 16px;
        margin: 10px 0;
        white-space: normal;
    }

    .scriptin {
        color: white;
        text-align: center;
        padding: 20px;
    }

    @keyframes slide {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-100%);
        }
    }

    .moviegrid:hover {
        animation-play-state: paused;
    }
    </style>

</head>

<body>

    <script>

    </script>
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


                    <a class="nav-link" href="<?= base_url('iniciar_sesion'); ?>">Iniciar Sesion</a>

                    <a class="nav-link" href="<?= base_url('movies'); ?>">Reservar</a>
                </div>

            </div>
        </nav>

        <div class="vineta">
            <span>Estreno</span>
            <p>プレミア</p>
        </div>

        <div class="img-estreno">
            <img src="https://i.ibb.co/39t0n54H/estreno.png" class="animate__animated animate__fadeInDown" alt="Estreno"
                class="header-image" width="100%">
        </div>

        <div class="text-center">
            <a href="#" class="btn btn-success btn-lg mt-3">Reservar</a>
        </div>

        <div class="vineta">
            <span>Peliculas</span>
            <p>映画</p>
        </div>

        <div class="display">
            <?php if (session()->has('error')): ?>
            <div class="scriptin">
                <p class="text-danger"><?= session('error') ?></p>
            </div>
            <?php endif; ?>
            <div class="moviegrid">
                <?php if (!empty($peliculas)): ?>
                <?php foreach ($peliculas as $pelicula): ?>
                <div class="todaslaspelis">
                    <img src="<?= esc($pelicula['poster_url']) ?>" alt="<?= esc($pelicula['titulo']) ?>"
                        class="postersitos">
                    <div class="movie-title"><?= esc($pelicula['titulo']) ?></div>
                    <a href="<?= base_url('reservar/' . $pelicula['id']) ?>"
                        class="btn btn-success btn-reservar">Reservar</a>
                </div>
                <?php endforeach; ?>
                <?php else: ?>
                <div class="scriptin">
                    <p>No hay películas disponibles.</p>
                </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="piecito">
            <div class="cine-header">
                <img src="https://i.ibb.co/spP1PCZN/piecito.png" alt="Cine Header" class="header-image" width="100%">

            </div>

        </div>

</body>

</html>