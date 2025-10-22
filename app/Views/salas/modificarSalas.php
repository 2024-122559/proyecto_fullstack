<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php foreach($salas as $sala): ?>
    <title>Modificar Sala <?=$sala['nombre'];?> </title>
    <?php endforeach; ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="container py-4">

    <?php foreach($salas as $sala): ?>
    <h2 class="mb-4">Editar <?=$sala['nombre'];?> </h2>
    <?php endforeach; ?>

    <form method="post" action="<?= base_url('salas/actualizar/').$sala['sala_id'];?>" class="card p-4 shadow">

        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" value="<?= $sala['nombre']; ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Filas</label>
            <input type="number" name="filas" value="<?= $sala['filas']; ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Asientos for Fila</label>
            <input type="number" name="asientos" value="<?= $sala['asientos_por_fila']; ?>" class="form-control"
                required>
        </div>
        <div class="mb-3">
            <label class="form-label">Capacidad</label>
            <input type="text" name="capacidad" value="<?= $sala['capacidad']; ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Tipo de Sala</label>
            <select name="tipo_sala" id="tipo_sala" value="<?= $sala['tipo_sala']; ?>" class="form-control" required
                required>
                <option value="Normal">Normal</option>
                <option value="3D">3D</option>
                <option value="IMAX">Imax</option>
                <option value="VIP">VIP</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">¿Funciona?</label>
            <select name="activa" id="activa" value="<?= $sala['activa']; ?>" class="form-control" required>
                <option value="Si">Sí</option>
                <option value="No">No</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Capacidad</label>
            <input type="date" name="date" value="<?= $sala['fecha_creacion']; ?>" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="<?= base_url('salas/listar'); ?>" class="btn btn-secondary">Cancelar</a>
    </form>

</body>

</html>