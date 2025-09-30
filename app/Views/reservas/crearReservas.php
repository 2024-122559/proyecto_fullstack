<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Reserva</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="container py-4">
<h2 class="mb-4">Agregar Reserva</h2>

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
</body>
</html>