<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salas de Cine</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

</body class="container py-4">

//aca va la alertita

<?php if(session()->getFlashdata('mensajin')): ?>
<script>
    let mensajin = "<?= session()->getFlashdata('mensajin') ?>";

    let textin = '';
    if (mensajin === 'agregado') {
        textin = 'Se agregó eso';
    } else if (mensajin === 'actualizado') {
        textin = 'Se actualizó eso';
    } else if (mensajin === 'eliminado') {
        textin = 'Se eliminó eso';
    } else {
        textin = 'Ves que si sirve';
    }

    Swal.fire({
        icon: 'success',
        title: '¡Operación exitosa!',
        text: textin,
        timer: 2500,
        showConfirmButton: false
    });
</script>
<?php endif; ?>



<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Salas de Cine</h2>
    <a href="<?= base_url('salas/crear'); ?>" class="btn btn-success">+ Agregar Sala</a>
</div>

<table class="table table-bordered table-striped table-hover">
    <thead class="table-dark">
        <tr>
            <th>Sala ID</th>
            <th>Nombre</th>
            <th>Filas</th>
            <th>Asientos por Fila</th>
            <th>Capacidad</th>
            <th>Tipo de Sala</th>
            <th>¿Esta Funcionando?</th>
            <th>Inauguración</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($salas as $sala): ?>
        <tr>
            <td><?=$sala['sala_id']; ?></td>
            <td><?=$sala['nombre']; ?></td>
            <td><?=$sala['filas']; ?></td>
            <td><?=$sala['asientos_por_fila']; ?></td>
            <td><?=$sala['capacidad']; ?></td>
            <td><?=$sala['tipo_sala']; ?></td>
            <td><?=$sala['activa']; ?></td>
            <td><?=$sala['fecha_creacion']; ?> </td>
            <td>
                <a href="<?= base_url('salas/editar/'.$sala['sala_id']); ?>" class="btn btn-sm btn-info">Editar</a>
                <a href="<?= base_url('salas/eliminar/'.$sala['sala_id']); ?>" class="btn btn-sm btn-danger"
                    onclick="return confirm('No se borrará pero sí se eliminará')">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>




</html>