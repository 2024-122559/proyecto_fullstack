<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEOCINE - iniciar</title>
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


                    <a class="nav-link" href="<?= base_url('login'); ?>">Iniciar Sesion</a>

                    <a class="nav-link" href="<?= base_url('cine'); ?>">Regresar</a>
                </div>

            </div>
        </nav>

        <div class="vineta">
            <span>Ingresa</span>
            <p>ログイン</p>
        </div>

    <div class="container">
        <div class="row">
            <div class="col-4 offset-4">
        <h2>Iniciar Sesión</h2>

        <?php if(session()->getFlashdata('error')): ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
        <?php endif; ?>

        <form action="<?= base_url('/login/autenticar') ?>" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Correo</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="usuario@ejemplo.com"
                    required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="********"
                    required>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Iniciar sesión</button>
            </div>
        </form>

        <p class="mt-3 text-center">
            ¿No tienes cuenta? <a href="<?= base_url('/registro') ?>" style="color:#58a6ff;">Regístrate</a>
        </p>
    </div>
            </div>
         
        </div>

        <div class="moviegrid">

        </div>



        <div class="piecito">
            <div class="cine-header">
                <img src="https://i.ibb.co/spP1PCZN/piecito.png" alt="Cine Header" class="header-image" width="100%">

            </div>

        </div>

</body>

</html>