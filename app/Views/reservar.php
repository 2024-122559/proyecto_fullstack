<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOCINE - Reservar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">

</head>

<body>
    <!-- Fondito de pantalla -->
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
                    <a class="nav-link" href="<?= base_url('movies'); ?>">Regresar</a>
                    <?php else: ?>
                    <a class="nav-link" href="<?= base_url('login'); ?>">Iniciar Sesión</a>
                    <a class="nav-link" href="<?= base_url('movies'); ?>">Regresar</a>
                    <?php endif; ?>
                </div>
            </div>
        </nav>

        <div class="vineta">
            <span>Reservar</span>
            <p>予約する</p>
        </div>

        <div class="peliculanum">
            <?php if (isset($pelicula)): ?>
            <div class="detallin">
                <img src="<?= esc($pelicula['poster_url']) ?>" alt="<?= esc($pelicula['titulo']) ?>"
                    class="postersitos">
            </div>
            <div class="peliculin-info">
                <h2><?= esc($pelicula['titulo']) ?></h2>

                <p><strong>Duración:</strong> <?= esc($pelicula['duracion_minutos']) ?> minutos</p>
                <p><strong>Director:</strong> <?= esc($pelicula['director']) ?></p>
                <p><strong>Clasificación:</strong> <?= esc($pelicula['clasificacion']) ?></p>

                <p><strong>Sinopsis:</strong> <?= esc($pelicula['sinopsis']) ?></p>
                <br>
                <br>
                <br>
                <!-- Button trigger modal -->
                <button type="button" class="btn-reservar " data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Ver Funciones
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header bg-dark text-white">
                                <h5 class="modal-title" id="exampleModalLabel">Funciones disponibles</h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                    aria-label="Cerrar"></button>
                            </div>
                            <div class="modal-body">
                                <?php if(!empty($funciones)): ?>
                                <table class="table table-hover align-middle">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>ID</th>
                                            <th>Hora</th>
                                            <th>Sala</th>
                                            <th>Precio</th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($funciones as $f): ?>
                                        <tr>
                                            <td><?= esc($f['funcion_id']) ?></td>
                                            <td><?= esc($f['hora_inicio']) ?> - <?= esc($f['hora_fin']) ?></td>
                                            <td><?= esc($f['sala_id']) ?></td>
                                            <td><?= esc($f['precio_base']) ?></td>
                                            <td>
                                                <form method="get" action="<?= base_url('reservas/asientos'); ?>">
                                                    <input type="hidden" name="usuario_id" value="<?= session()->get('id') ?>">
                                                    <input type="hidden" name="funcion_id" value="<?= esc($f['funcion_id']) ?>">
                                                    <input type="hidden" name="total"
                                                        value="<?= esc($f['precio_base']) ?>">
                                                    <input type="hidden" name="fecha_reserva"
                                                        value="<?= date('Y-m-d') ?>">
                                                    <input type="hidden" name="codigo_qr" value="<?= uniqid('QR_') ?>">
                                                    <button type="submit"
                                                        class="btn btn-success btn-sm">Seleccionar  Asiento </button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                                <?php else: ?>
                                <p>No hay funciones disponibles para esta película.</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <?php else: ?>
            <p>ESTE MENSAJE NUNCA VA A APARECER JEJEJE.</p>
            <?php endif; ?>
        </div>
        <br>
        <div class="reserva-detalle">

        </div>

        <div class="piecito">
            <div class="cine-header">
                <img src="https://i.ibb.co/spP1PCZN/piecito.png" alt="Cine Header" class="header-image" width="100%">
            </div>
        </div>
    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
    integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous">
</script>

</html>