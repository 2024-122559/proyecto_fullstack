<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Película</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="container py-4">
<h2 class="mb-4">Agregar Película</h2>

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

<form method="post" action="<?= base_url('peliculas/guardar'); ?>" class="card p-4 shadow">
    <div class="mb-3">
        <label class="form-label">Título</label>
        <input type="text" name="titulo" class="form-control" value="<?= esc(old('titulo')) ?>" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Género ID</label>
        <input type="number" name="id_genero" class="form-control" value="<?= esc(old('id_genero')) ?>" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Duración (minutos)</label>
        <input type="number" name="duracion_minutos" class="form-control" value="<?= esc(old('duracion_minutos')) ?>" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Sinopsis</label>
        <textarea name="sinopsis" class="form-control" required><?= esc(old('sinopsis')) ?></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Poster URL</label>
        <input type="url" name="poster_url" class="form-control" value="<?= esc(old('poster_url')) ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Director</label>
        <input type="text" name="director" class="form-control" value="<?= esc(old('director')) ?>" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Clasificación</label>
        <input type="text" name="clasificacion" class="form-control" value="<?= esc(old('clasificacion')) ?>" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Fecha de Estreno</label>
        <input type="date" name="fecha_estreno" class="form-control" value="<?= esc(old('fecha_estreno')) ?>" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Estado ID</label>
        <input type="number" name="id_estado" class="form-control" value="<?= esc(old('id_estado')) ?>" required>
    </div>
    <button type="submit" class="btn btn-success">Guardar</button>
    <a href="<?= base_url('peliculas/listar'); ?>" class="btn btn-secondary">Cancelar</a>
</form>
</body>
</html>