<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOCINE - Reservar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
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
                    <a class="nav-link" href="<?= base_url('iniciar_sesion'); ?>">Iniciar Sesion</a>
                    <a class="nav-link" href="<?= base_url('movies'); ?>">Regresar</a>
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
                    <img src="<?= esc($pelicula['poster_url']) ?>" alt="<?= esc($pelicula['titulo']) ?>" class="postersitos">
                </div>
                <div class="peliculin-info">
                        <h2><?= esc($pelicula['titulo']) ?></h2>
                        
                        <p><strong>Duración:</strong> <?= esc($pelicula['duracion_minutos']) ?> minutos</p>
                        <p><strong>Director:</strong> <?= esc($pelicula['director']) ?></p>
                        <p><strong>Clasificación:</strong> <?= esc($pelicula['clasificacion']) ?></p>

                        <p><strong>Sinopsis:</strong> <?= esc($pelicula['sinopsis']) ?></p>
                       
                        <a href="<?= base_url('reservar/' . $pelicula['id']) ?>" class="btn btn-success btn-reservar">Reservar</a>
                    </div>
            <?php else: ?>
                <p>ESTE MENSAJE NUNCA VA A APARECER JEJEJE.</p>
            <?php endif; ?>
        </div>

        <div class="reserva-detalle">
            <form method="post" action="<?= base_url('reservas/guardar'); ?>" class="card p-4 shadow">
    <div class="mb-3">
        <label class="form-label">Usuario ID</label>
        <input type="number" name="usuario_id" class="form-control" value="<?= esc(old('usuario_id')) ?>" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Función ID</label>
        <input type="number" name="funcion_id" class="form-control" value="<?= esc(old('funcion_id')) ?>" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Total</label>
        <input type="number" step="0.01" name="total" class="form-control" value="<?= esc(old('total')) ?>" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Fecha Reserva</label>
        <input type="date" name="fecha_reserva" class="form-control" value="<?= esc(old('fecha_reserva')) ?>" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Código QR</label>
        <input type="text" name="codigo_qr" class="form-control" value="<?= esc(old('codigo_qr')) ?>" required>
    </div>
    <button type="submit" class="btn btn-success">Guardar</button>
    <a href="<?= base_url('reservas/listar'); ?>" class="btn btn-secondary">Cancelar</a>
</form>
        </div>

        <div class="piecito">
            <div class="cine-header">
                <img src="https://i.ibb.co/spP1PCZN/piecito.png" alt="Cine Header" class="header-image" width="100%">
            </div>
        </div>
    </div>

  
</body>
</html>