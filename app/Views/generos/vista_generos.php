<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Géneros</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="container py-4">
<?php if (session()->getFlashdata('mensaje')): ?>
<script>
let mensaje = "<?= session()->getFlashdata('mensaje') ?>";
let texto = mensaje == 'agregado' ? 'Se agregó el género correctamente' :
            mensaje == 'error' ? 'no se puede repetir' :
            mensaje == 'se jue' ? 'Se eliminó el género correctamente' :
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
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Lista de Géneros</h2>
    <a href="<?= base_url('generos/crear'); ?>" class="btn btn-success">+ Agregar Género</a>
</div>
<table class="table table-bordered table-striped table-hover">
    <thead class="table-dark">
        <tr>
            <th>Código</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($generos as $genero): ?>
        <tr>
            <td><?= $genero['id_genero']; ?></td>
            <td><?= $genero['nombre']; ?></td>
            <td><?= $genero['descripcion']; ?></td>
            <td>
                <a href="<?= base_url('generos/editar/'.$genero['id_genero']); ?>" class="btn btn-sm btn-info">Editar</a>
                <a href="<?= base_url('generos/eliminar/'.$genero['id_genero']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Desea eliminar este género?')">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>