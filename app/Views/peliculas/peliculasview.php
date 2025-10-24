<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Películas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="container py-4">
<?php if (session()->getFlashdata('mensaje')): ?>
<script>
let mensaje = "<?= session()->getFlashdata('mensaje') ?>";
let texto = mensaje == 'agregado' ? 'Se agregó la película correctamente' :
            mensaje == 'se jue' ? 'Se eliminó la película correctamente' :
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
    <h2>Lista de Películas</h2>
    <a href="<?= base_url('peliculas/crear'); ?>" class="btn btn-success">+ Agregar Película</a>
</div>
<table class="table table-bordered table-striped table-hover">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Género ID</th>
            <th>Duración (min)</th>
            <th>Sinopsis</th>
            <th>Poster URL</th>
            <th>Director</th>
            <th>Clasificación</th>
            <th>Fecha Estreno</th>
            <th>Estado ID</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($peliculas as $pelicula): ?>
        <tr>
            <td><?= $pelicula['id']; ?></td>
            <td><?= $pelicula['titulo']; ?></td>
            <td><?= $pelicula['id_genero']; ?></td>
            <td><?= $pelicula['duracion_minutos']; ?></td>
            <td><?= $pelicula['sinopsis']; ?></td>
            <td><?= $pelicula['poster_url']; ?></td>
            <td><?= $pelicula['director']; ?></td>
            <td><?= $pelicula['clasificacion']; ?></td>
            <td><?= $pelicula['fecha_estreno']; ?></td>
            <td><?= $pelicula['id_estado']; ?></td>
            <td>
                <a href="<?= base_url('peliculas/editar/'.$pelicula['id']); ?>" class="btn btn-sm btn-info">Editar</a>
                <a href="<?= base_url('peliculas/eliminar/'.$pelicula['id']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Desea eliminar esta película?')">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>