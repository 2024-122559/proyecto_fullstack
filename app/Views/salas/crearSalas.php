<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Sala</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container py-4">

    <h2 class="mb-4">Agregar Sala</h2>

    <form method="post" action="<?= base_url('salas/guardar'); ?>" class="card p-4 shadow">
        <div class="mb-3">
            <label clas
            s="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Filas</label>
            <input type="number" name="filas" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Asientos por fila</label>
            <input type="number" name="asientos" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Capacidad</label>
            <input type="number" name="capacidad" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Tipo de Sala</label>
            <select name="tipo_sala" id="tipo_sala">
                <option value="Normal">Normal</option>
                <option value="3D">3D</option>
                <option value="IMAX">Imax</option>
                <option value="VIP">VIP</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">¿Funciona?</label>
            <select name="activa" id="activa">
                <option value="Si">Sí</option>
                <option value="No">No</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Inauguración</label>
            <input type="date" name="fecha_creacion" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="<?= base_url('salas/listar'); ?>" class="btn btn-secondary">Cancelar</a>
    </form>

</body>

</html>