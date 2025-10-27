<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de Reserva - <?= esc($pelicula['titulo']) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('css/detalle.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
</head>

<body>
    <div class="stars"></div>
    <div class="shooting-star"></div>
    <div class="shooting-star"></div>
    <div class="shooting-star"></div>
    <div class="shooting-star"></div>
    <div class="shooting-star"></div>

    <div class="container py-5">
        <div class="detalle-reserva">
            <h2 class="text-center mb-4">🎟️ Detalle de tu reserva</h2>

            <div class="card p-4">
                <h4><?= esc($pelicula['titulo']) ?></h4>
                <ul>
                    <li><strong>Función:</strong> <?= esc($funcion['fecha']) ?> - <?= esc($funcion['hora_inicio']) ?>
                    </li>
                    <li><strong>Precio base función:</strong> Q<?= number_format($precio_funcion, 2) ?></li>
                    <li><strong>Fecha de reserva:</strong> <?= esc($fecha_reserva) ?></li>
                    <li><strong>Código QR:</strong><br>
                        <img src="<?= esc($codigo_qr) ?>" alt="QR de la reserva" width="150">
                    </li>
                </ul>

                <div class="asientos-seleccionados">
                    <h5>Asientos seleccionados y precios:</h5>
                    <div class="asientos-lista">
                        <?php foreach($asientos as $a): ?>
                        <div class="asiento-item">
                            <?= esc($a['fila'] . $a['numero']) ?> - Q<?= number_format($a['precio'], 2) ?>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <p class="mt-3"><strong>Total asientos:</strong> Q<?= number_format($total_asientos, 2) ?></p>
                    <p class="mt-1"><strong>Total a pagar:</strong> Q<?= number_format($total_pagar, 2) ?></p>
                </div>

                <div class="mt-4 text-center">
                    <a href="<?= base_url('/') ?>" class="btn btn-success btn-volver">Hacer otra reserva</a>
                </div>
            </div>
        </div>
    </div>


</body>

</html>