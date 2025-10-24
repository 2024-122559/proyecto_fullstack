<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Funciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.4/css/dataTables.bootstrap5.min.css">

</head>
<body class="container py-4">
<?php if (session()->getFlashdata('mensaje')): ?>
<script>
let mensaje = "<?= session()->getFlashdata('mensaje') ?>";
let texto = mensaje == 'agregado' ? 'Se agregó la función correctamente' :
            mensaje == 'se jue' ? 'Se eliminó la función correctamente' :
            'Acción completada';
Swal.fire({
    icon: 'success',
    title: 'Éxito',
    text: texto,
    timer: 2000,
    showConfirmButton: false
});
</script>
<?php endif; ?>
<?php if (session()->getFlashdata('mensajes')): ?>
<script>
Swal.fire({
    title: "Éxito",
    text: "<?= session()->getFlashdata('mensajes') ?>",
    icon: "success",
    timer: 2000,
    showConfirmButton: false
});
</script>
<?php endif; ?>
<?php if (session()->getFlashdata('error')): ?>
<script>
Swal.fire({
    title: "Error",
    text: "<?= addslashes(session()->getFlashdata('error')) ?>",
    icon: "error",
    timer: 3000,
    showConfirmButton: false
});
</script>
<?php endif; ?>
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Lista de Funciones</h2>
    <a href="<?= base_url('funciones/crear'); ?>" class="btn btn-success">+ Agregar Función</a>
</div>
<table class="table table-bordered table-striped table-hover" id="myTable">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Película ID</th>
            <th>Sala ID</th>
            <th>Fecha</th>
            <th>Hora Inicio</th>
            <th>Hora Fin</th>
            <th>Precio Base</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($funciones as $funcion): ?>
        <tr>
            <td><?= $funcion['funcion_id']; ?></td>
            <td><?= $funcion['pelicula_id']; ?></td>
            <td><?= $funcion['sala_id']; ?></td>
            <td><?= $funcion['fecha']; ?></td>
            <td><?= $funcion['hora_inicio']; ?></td>
            <td><?= $funcion['hora_fin']; ?></td>
            <td><?= $funcion['precio_base']; ?></td>
            <td><?= $funcion['estado']; ?></td>
            <td>
                <a href="<?= base_url('funciones/editar/'.$funcion['funcion_id']); ?>" class="btn btn-sm btn-info">Editar</a>
                <a href="<?= base_url('funciones/eliminar/'.$funcion['funcion_id']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Desea eliminar esta función?')">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<script src="https://cdn.datatables.net/2.3.4/js/dataTables.min.js"></script>
<script src="https://cdn.datatables.net/2.3.4/js/dataTables.bootstrap5.min.js"></script>
</body>
</html>