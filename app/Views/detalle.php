<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de Reserva - NOCINE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Detalle de tu reserva</h2>

        <?php if(isset($reserva) && $reserva): ?>
            <div class="card p-4 shadow">
                <p><strong>Película:</strong> <?= esc($reserva['titulo_pelicula']) ?></p>
                <p><strong>Función:</strong> <?= esc($reserva['hora_inicio']) ?> - <?= esc($reserva['hora_fin']) ?> (Sala <?= esc($reserva['sala_id']) ?>)</p>
                <p><strong>Asiento:</strong> <?= esc($reserva['asiento_seleccionado']) ?></p>
                <p><strong>Total:</strong> Q<?= esc($reserva['total']) ?></p>
                <p><strong>Fecha de reserva:</strong> <?= esc($reserva['fecha_reserva']) ?></p>
                <p><strong>Código QR:</strong> <?= esc($reserva['codigo_qr']) ?></p>

                <a href="<?= base_url('movies'); ?>" class="btn btn-primary mt-3">Volver a películas</a>
            </div>
        <?php else: ?>
            <p>No se encontró la reserva.</p>
        <?php endif; ?>
    </div>
</body>
</html>
