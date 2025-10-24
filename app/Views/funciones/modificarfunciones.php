<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Función</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="container py-4">

<h2 class="mb-4">Editar Función</h2>

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

<form method="post" action="<?= base_url('funciones/actualizar/'.$funcion['funcion_id']); ?>" class="card p-4 shadow">
    <div class="mb-3">
        <label class="form-label">Película ID</label>
        <input type="number" name="pelicula_id" value="<?= esc($funcion['pelicula_id']); ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Sala ID</label>
        <input type="number" name="sala_id" value="<?= esc($funcion['sala_id']); ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Fecha</label>
        <input type="date" name="fecha" value="<?= esc($funcion['fecha']); ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Hora Inicio</label>
        <input type="time" name="hora_inicio" value="<?= esc($funcion['hora_inicio']); ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Hora Fin</label>
        <input type="time" name="hora_fin" value="<?= esc($funcion['hora_fin']); ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Precio Base</label>
        <input type="number" step="0.01" name="precio_base" value="<?= esc($funcion['precio_base']); ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Estado</label>
        <select name="estado" class="form-control" required>
            <option value="activo" <?= $funcion['estado'] == 'activo' ? 'selected' : '' ?>>Activo</option>
            <option value="inactivo" <?= $funcion['estado'] == 'inactivo' ? 'selected' : '' ?>>Inactivo</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Actualizar</button>
    <a href="<?= base_url('funciones/listar'); ?>" class="btn btn-secondary">Cancelar</a>
</form>

</body>
</html>