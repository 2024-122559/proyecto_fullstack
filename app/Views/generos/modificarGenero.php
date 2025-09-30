<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Género</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-4">

<h2 class="mb-4">Editar Género</h2>

<form method="post" action="<?= base_url('generos/actualizar/'.$genero['id_genero']); ?>" class="card p-4 shadow">
    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input type="text" name="nombre" value="<?= $genero['nombre']; ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Descripción</label>
        <input type="text" name="descripcion" value="<?= $genero['descripcion']; ?>" class="form-control">
    </div>
   
    <button type="submit" class="btn btn-primary">Actualizar</button>
    <a href="<?= base_url('generos/listar'); ?>" class="btn btn-secondary">Cancelar</a>
</form>

</body>
</html>
