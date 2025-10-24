<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleccionar Asiento  <?= esc($pelicula['titulo'] ?? '') ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('css/asientos.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">

</head>
<body>
       <div class="stars"></div>
    <div class="shooting-star"></div>
    <div class="shooting-star"></div>
    <div class="shooting-star"></div>
    <div class="shooting-star"></div>
    <div class="shooting-star"></div>
    <br>
    <br>
    <br>
    <div class="container py-5">
        <nav class="navbar navbar-expand-lg navbar-custom">
            <div class="container">
                <div class="buttonhead">
                    <?php if(session()->get('logged_in')): ?>
                    <div class="me-3 user-avatar" title="<?= esc(session()->get('nombre')) ?>">
                        <?= esc(substr(session()->get('nombre'), 0, 1)) ?>
                    </div>

                    <a class="nav-link" href="<?= base_url('logout'); ?>">Cerrar Sesión</a>
                    <?php else: ?>
                    <a class="nav-link" href="<?= base_url('login'); ?>">Iniciar Sesión</a>
                    <a class="nav-link" href="<?= base_url('movies'); ?>">Reservar</a>
                    <?php endif; ?>
                </div>
            </div>
        </nav>
        <br>
        <br>
        <h2>Película: <?= esc($pelicula['titulo'] ?? '') ?></h2>
        <p>Selecciona tu asiento:</p>
        <div class="pantalla">PANTALLA</div>
        <div id="asientos-grid" class="d-flex flex-wrap mb-4">
            <?php
            $filas = ['A','B','C','D'];
            $columnas = 10;
            foreach ($filas as $fila):
                for ($i=1; $i<=$columnas; $i++):
                    $asiento = $fila.$i;
            ?>
                <button type="button" class="btn btn-outline-primary btn-asiento" data-asiento="<?= $asiento ?>"><?= $asiento ?></button>
            <?php
                endfor;
            endforeach;
            ?>
        </div>
<form method="post" action="<?= base_url('reservas/guardar'); ?>">
            <input type="hidden" name="usuario_id" value="<?= session()->get('id') ?>">
            <input type="hidden" name="funcion_id" value="<?= esc($funcion_id ?? '') ?>">
            <input type="hidden" name="total" value="<?= esc($total ?? '') ?>">
            <input type="hidden" name="fecha_reserva" value="<?= date('Y-m-d') ?>">
            <input type="hidden" name="codigo_qr" value="<?= uniqid('QR_') ?>">
            <input type="hidden" name="asiento_seleccionado" id="asiento_seleccionado" value="">
            <button type="submit" class="btn btn-success">Confirmar Asiento</button>
            <a href="<?= base_url('movies'); ?>" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const botones = document.querySelectorAll('.btn-asiento');
            const inputAsiento = document.getElementById('asiento_seleccionado');
            let seleccionados = [];
            botones.forEach(btn => {
                btn.addEventListener('click', function() {
                    const asiento = this.dataset.asiento;
                    if(this.classList.contains('selected')){
                        this.classList.remove('selected');
                        seleccionados = seleccionados.filter(a => a !== asiento);
                    } else {
                        this.classList.add('selected');
                        seleccionados.push(asiento);
                    }
                    inputAsiento.value = seleccionados.join(',');
                });
            });
        });
    </script>
</body>
</html>
