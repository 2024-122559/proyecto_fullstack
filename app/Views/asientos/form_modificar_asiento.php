<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Asiento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('css/forms.css') ?>" rel="stylesheet">
</head>

<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-header bg-dark text-white text-center py-4">
                        <h4 class="mb-0"><i class="bi bi-person-lines-fill me-2"></i>Actualizar Asiento</h4>
                    </div>
                    <div class="card-body p-4">
                        <form action="<?= base_url('asientos/editar/') ?>" method="post" class="needs-validation"
                            novalidate>
                            <input type="hidden" name="asiento_id" value="<?=$datos['asiento_id'];?>">

                            <div class="mb-3">
                                <label for="txt_id" class="form-label fw-semibold">ID</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-hash"></i></span>
                                    <input type="number" name="txt_id" id="txt_id" class="form-control"
                                        value="<?=$datos['asiento_id'];?>" readonly>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="txt_sala" class="form-label fw-semibold">Sala ID</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-easel"></i></span>
                                    <input type="number" name="txt_sala" id="txt_sala" class="form-control"
                                        value="<?=$datos['sala_id'];?>" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="txt_fila" class="form-label fw-semibold">Fila</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-grid-3x3-gap"></i></span>
                                    <input type="text" name="txt_fila" id="txt_fila" class="form-control"
                                        value="<?=$datos['fila'];?>" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="txt_numero" class="form-label fw-semibold">Número</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-hash"></i></span>
                                    <input type="number" name="txt_numero" id="txt_numero" class="form-control"
                                        value="<?=$datos['numero'];?>" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="txt_tipo" class="form-label fw-semibold">Tipo</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                                    <input type="text" name="txt_tipo" id="txt_tipo" class="form-control"
                                        value="<?=$datos['tipo'];?>" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="txt_activo" class="form-label fw-semibold">Activo</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-toggle-on"></i></span>
                                    <select name="txt_activo" id="txt_activo" class="form-select" required>
                                        <option value="1" <?=$datos['activo'] == 1 ? 'selected' : ''?>>Activo</option>
                                        <option value="0" <?=$datos['activo'] == 0 ? 'selected' : ''?>>Inactivo</option>
                                    </select>
                                </div>
                            </div>

                            <div
                                class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-3 mt-4 px-2">
                                <div class="d-flex gap-2 w-100 w-md-auto justify-content-center">
                                    <a href="<?= base_url('asientos') ?>" class="btn btn-secondary w-50 w-md-auto">
                                        <i class="bi bi-arrow-left-circle me-2"></i>Regresar
                                    </a>
                                    <a href="<?= base_url('asientos') ?>" class="btn btn-outline-danger w-50 w-md-auto">
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