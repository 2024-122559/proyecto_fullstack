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
                    <?php if (session()->getFlashdata('error')): ?>
                    <div class="alert alert-danger">
                        <?= session()->getFlashdata('error') ?>
                    </div>
                    <?php endif; ?>
                    <?php if (session()->getFlashdata('success')): ?>
                    <div class="alert alert-success">
                        <?= session()->getFlashdata('success') ?>
                        <br>
                        <a href="<?= base_url('reservar/' . session()->get('usuario_id')) ?>"
                            class="btn btn-primary mt-2">Ir a Reservar</a>
                    </div>
                    <?php endif; ?>
                    <form action="<?= base_url('login') ?>" method="post">
                        <div class="mb-3">
                            <label for="txt_email" class="form-label">Email</label>
                            <input type="email" name="txt_email" id="txt_email" class="form-control"
                                placeholder="Ingresa tu email" required>
                        </div>
                        <div class="mb-3">
                            <label for="txt_password" class="form-label">Contraseña</label>
                            <input type="password" name="txt_password" id="txt_password" class="form-control"
                                placeholder="Ingresa tu contraseña" required>
                        </div>
                        <button type="submit" class="btn btn-primary form-control mt-2">Iniciar Sesión</button>
                    </form>
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