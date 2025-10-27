<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Película</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('css/forms.css') ?>" rel="stylesheet">
</head>

<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-header bg-primary text-white text-center py-4">
                        <h4 class="mb-0"><i class="bi bi-pencil-fill me-2"></i>Editar Película</h4>
                    </div>
                    <div class="card-body p-4">
                        <form action="<?= base_url('peliculas/actualizar/' . $pelicula['id']) ?>" method="post"
                            class="needs-validation" novalidate>
                            <input type="hidden" name="id" value="<?= $pelicula['id'] ?>">

                            <div class="mb-3">
                                <label for="txt_titulo" class="form-label fw-semibold">Título</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-card-text"></i></span>
                                    <input type="text" class="form-control" name="txt_titulo" id="txt_titulo"
                                        value="<?= esc($pelicula['titulo']) ?>" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="txt_genero" class="form-label fw-semibold">Género (ID)</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-tags"></i></span>
                                    <input type="number" class="form-control" name="txt_genero" id="txt_genero"
                                        value="<?= esc($pelicula['id_genero']) ?>" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="txt_duracion" class="form-label fw-semibold">Duración (minutos)</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-clock"></i></span>
                                    <input type="number" class="form-control" name="txt_duracion" id="txt_duracion"
                                        value="<?= esc($pelicula['duracion_minutos']) ?>" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="txt_director" class="form-label fw-semibold">Director</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-person-badge"></i></span>
                                    <input type="text" class="form-control" name="txt_director" id="txt_director"
                                        value="<?= esc($pelicula['director']) ?>" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="txt_clasificacion" class="form-label fw-semibold">Clasificación</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-shield-fill-check"></i></span>
                                    <input type="text" class="form-control" name="txt_clasificacion"
                                        id="txt_clasificacion" value="<?= esc($pelicula['clasificacion']) ?>" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="txt_fecha_estreno" class="form-label fw-semibold">Fecha Estreno</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-calendar-date"></i></span>
                                    <input type="date" class="form-control" name="txt_fecha_estreno"
                                        id="txt_fecha_estreno" value="<?= esc($pelicula['fecha_estreno']) ?>" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="txt_sinopsis" class="form-label fw-semibold">Sinopsis</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-journal-text"></i></span>
                                    <textarea class="form-control" name="txt_sinopsis" id="txt_sinopsis" rows="4"
                                        required><?= esc($pelicula['sinopsis']) ?></textarea>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="txt_poster_url" class="form-label fw-semibold">URL Poster</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-image"></i></span>
                                    <input type="text" class="form-control" name="txt_poster_url" id="txt_poster_url"
                                        value="<?= esc($pelicula['poster_url']) ?>">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="txt_estado" class="form-label fw-semibold">Estado</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-toggle-on"></i></span>
                                    <select class="form-select" name="txt_estado" id="txt_estado">
                                        <option value="1" <?= $pelicula['id_estado'] == 1 ? 'selected' : '' ?>>Activo
                                        </option>
                                        <option value="0" <?= $pelicula['id_estado'] == 0 ? 'selected' : '' ?>>Inactivo
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div
                                class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-3 mt-4 px-2">
                                <div class="d-flex gap-2 w-100 w-md-auto justify-content-center">
                                    <a href="<?= base_url('peliculas') ?>" class="btn btn-secondary w-50 w-md-auto">
                                        <i class="bi bi-arrow-left-circle me-2"></i>Regresar
                                    </a>
                                    <a href="<?= base_url('peliculas') ?>"
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