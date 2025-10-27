<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Reserva</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-4">

<h2 class="mb-4">Editar Reserva</h2>

<form method="post" action="<?= base_url('reservas/actualizar/'.$reserva['reserva_id']); ?>" class="card p-4 shadow">
    <div class="mb-3">
        <label class="form-label">Usuario ID</label>
        <input type="number" name="usuario_id" value="<?= $reserva['usuario_id']; ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Función ID</label>
        <input type="number" name="funcion_id" value="<?= $reserva['funcion_id']; ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Total</label>
        <input type="number" step="0.01" name="total" value="<?= $reserva['total']; ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Fecha Reserva</label>
        <input type="date" name="fecha_reserva" value="<?= $reserva['fecha_reserva']; ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Código QR</label>
        <input type="text" name="codigo_qr" value="<?= $reserva['codigo_qr']; ?>" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Actualizar</button>
    <a href="<?= base_url('reservas/listar'); ?>" class="btn btn-secondary">Cancelar</a>
</form>

</body>
</html>