<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Película</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="container py-4">

<h2 class="mb-4">Editar Película</h2>

<?php if (session()->getFlashdata('error')): ?>
    <script>
        console.log('Error detectado: <?= addslashes(session()->getFlashdata('error')) ?>');
        Swal.fire({
            title: "Error",
            text: "<?= addslashes(session()->getFlashdata('error')) ?>",
            icon: "error",
            timer: 3000,
            showConfirmButton: false
        });
    </script>
<?php endif; ?>

<form method="post" action="<?= base_url('peliculas/actualizar/'.$pelicula['id']); ?>" class="card p-4 shadow">
    <div class="mb-3">
        <label class="form-label">Título</label>
        <input type="text" name="titulo" value="<?= esc($pelicula['titulo']); ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Género ID</label>
        <input type="number" name="id_genero" value="<?= esc($pelicula['id_genero']); ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Duración (minutos)</label>
        <input type="number" name="duracion_minutos" value="<?= esc($pelicula['duracion_minutos']); ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Sinopsis</label>
        <textarea name="sinopsis" class="form-control" required><?= esc($pelicula['sinopsis']); ?></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Poster URL</label>
        <input type="url" name="poster_url" value="<?= esc($pelicula['poster_url']); ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Director</label>
        <input type="text" name="director" value="<?= esc($pelicula['director']); ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Clasificación</label>
        <input type="text" name="clasificacion" value="<?= esc($pelicula['clasificacion']); ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Fecha de Estreno</label>
        <input type="date" name="fecha_estreno" value="<?= esc($pelicula['fecha_estreno']); ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Estado ID</label>
        <input type="number" name="id_estado" value="<?= esc($pelicula['id_estado']); ?>" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Actualizar</button>
    <a href="<?= base_url('peliculas/listar'); ?>" class="btn btn-secondary">Cancelar</a>
</form>

</body>
</html>