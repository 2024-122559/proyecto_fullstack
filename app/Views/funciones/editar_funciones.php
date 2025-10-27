<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Función</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('css/forms.css') ?>" rel="stylesheet">
</head>

<body>
    <div class=" container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-header bg-primary text-white text-center py-4">
                        <h4 class="mb-0"><i class="bi bi-pencil-fill me-2"></i>Editar Función</h4>
                    </div>
                    <div class="card-body p-4">
                        <form action="<?= base_url('funciones/actualizar/' . $funcion['funcion_id']) ?>" method="post"
                            class="needs-validation" novalidate>
                            <input type="hidden" name="funcion_id" value="<?= $funcion['funcion_id'] ?>">

                            <div class="mb-3">
                                <label for="txt_pelicula_id" class="form-label fw-semibold">ID Película</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-film"></i></span>
                                    <input type="number" class="form-control" name="txt_pelicula_id"
                                        id="txt_pelicula_id" value="<?= esc($funcion['pelicula_id']) ?>" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="txt_sala_id" class="form-label fw-semibold">ID Sala</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-easel"></i></span>
                                    <input type="number" class="form-control" name="txt_sala_id" id="txt_sala_id"
                                        value="<?= esc($funcion['sala_id']) ?>" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="txt_fecha" class="form-label fw-semibold">Fecha</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-calendar-date"></i></span>
                                    <input type="date" class="form-control" name="txt_fecha" id="txt_fecha"
                                        value="<?= esc($funcion['fecha']) ?>" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="txt_hora_inicio" class="form-label fw-semibold">Hora Inicio</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-clock"></i></span>
                                    <input type="time" class="form-control" name="txt_hora_inicio" id="txt_hora_inicio"
                                        value="<?= esc($funcion['hora_inicio']) ?>" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="txt_hora_fin" class="form-label fw-semibold">Hora Fin</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-clock-history"></i></span>
                                    <input type="time" class="form-control" name="txt_hora_fin" id="txt_hora_fin"
                                        value="<?= esc($funcion['hora_fin']) ?>" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="txt_precio_base" class="form-label fw-semibold">Precio Base</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-currency-dollar"></i></span>
                                    <input type="number" step="0.01" class="form-control" name="txt_precio_base"
                                        id="txt_precio_base" value="<?= esc($funcion['precio_base']) ?>" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="txt_estado" class="form-label fw-semibold">Estado</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-toggle-on"></i></span>
                                    <select name="txt_estado" id="txt_estado" class="form-select" required>
                                        <option value="activo" <?= $funcion['estado'] == 'activo' ? 'selected' : '' ?>>
                                            Activo</option>
                                        <option value="inactivo"
                                            <?= $funcion['estado'] == 'inactivo' ? 'selected' : '' ?>>
                                            Inactivo</option>
                                    </select>
                                </div>
                            </div>

                            <div
                                class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-3 mt-4 px-2">
                                <div class="d-flex gap-2 w-100 w-md-auto justify-content-center">
                                    <a href="<?= base_url('funciones') ?>" class="btn btn-secondary w-50 w-md-auto">
                                        <i class="bi bi-arrow-left-circle me-2"></i>Regresar
                                    </a>
                                    <a href="<?= base_url('funciones') ?>"
                                        class="btn btn-outline-danger w-50 w-md-auto">
                                        <i class="bi bi-x-circle-fill me-2"></i>Cancelar
                                    </a>
                                </div>
                                <button type="submit" class="btn btn-success w-100 w-md-auto">
                                    <i class="bi bi-save-fill me-2"></i>Guardar Cambios
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>