<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Reservas - NEOCINE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">🎟️ Mis Reservas</h2>

        <?php if (!empty($detalles)): ?>
        <?php foreach ($detalles as $d): ?>
        <div class="card mb-3 p-3">
            <h5><?= esc($d['pelicula']['titulo']) ?></h5>
            <p><strong>Función:</strong> <?= esc($d['funcion']['fecha']) ?> <?= esc($d['funcion']['hora_inicio']) ?></p>

            <p><strong>Asientos:</strong>
                <?php if(!empty($d['asientos'])): ?>
                <?= implode(', ', array_map(fn($a) => $a['nombre'], $d['asientos'])) ?>
                <?php else: ?>
                No hay asientos registrados
                <?php endif; ?>
            </p>

            <p><strong>Total a pagar:</strong> Q<?= number_format($d['total_pagar'], 2) ?></p>

            <div class="qr-code mt-2">
                <?php if(!empty($d['codigo_qr'])): ?>
                <img src="<?= esc($d['codigo_qr']) ?>" alt="QR de reserva" width="150">
                <?php endif; ?>
            </div>
        </div>
        <?php endforeach; ?>
        <?php else: ?>
        <p class="text-center">No tienes reservas.</p>
        <?php endif; ?>

        <div class="text-center mt-4">
            <a href="<?= base_url('movies') ?>" class="btn btn-primary">Hacer otra reserva</a>
        </div>
    </div>
</body>

</html>