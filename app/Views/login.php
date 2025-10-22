<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iniciar Sesión</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background: #1e1e2f;
        color: #fff;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .card {
        background: #2c2c3c;
        border-radius: 12px;
        padding: 2rem;
        width: 100%;
        max-width: 400px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    }

    .form-control {
        background: #1e1e2f;
        color: #fff;
        border: 1px solid #444;
    }

    .form-control:focus {
        border-color: #58a6ff;
        box-shadow: 0 0 5px #58a6ff;
    }

    .btn-primary {
        background: #58a6ff;
        border: none;
    }

    .btn-primary:hover {
        background: #3992ff;
    }

    .alert {
        font-size: 0.9rem;
    }

    h2 {
        text-align: center;
        margin-bottom: 1.5rem;
        color: #58a6ff;
    }
    </style>
</head>

<body>
    <div class="card">
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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>