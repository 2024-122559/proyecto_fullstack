<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Género</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="container py-4">
<h2 class="mb-4">Agregar Género</h2>

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

<form method="post" action="<?= base_url('generos/guardar'); ?>" class="card p-4 shadow">
    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input type="text" name="nombre" class="form-control" value="<?= esc(old('nombre')) ?>" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Descripción</label>
        <input type="text" name="descripcion" class="form-control" value="<?= esc(old('descripcion')) ?>" required>
    </div>
    <button type="submit" class="btn btn-success">Guardar</button>
    <a href="<?= base_url('generos/listar'); ?>" class="btn btn-secondary">Cancelar</a>
</form>
</body>
</html>