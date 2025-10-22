<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel de prueba</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="card p-4">
            <h2>Panel de prueba</h2>

            <h4>Datos de la sesión:</h4>
            <pre>
<?= print_r(session()->get(), true); ?>
            </pre>

            <p>
                <?php if(session()->get('tipo_usuario') === 'admin'): ?>
                <a href="/admin" class="btn btn-primary">Ir al Panel Admin</a>
                <?php else: ?>
                <a href="/reservas" class="btn btn-success">Ir a Reservas</a>
                <?php endif; ?>
            </p>

            <p>
                <a href="/logout" class="btn btn-danger">Cerrar sesión</a>
            </p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>