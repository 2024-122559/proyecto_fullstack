<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('css/forms.css') ?>" rel="stylesheet">
</head>

<body class="bg-dark">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-header bg-dark text-white text-center py-4">
                        <h4 class="mb-0"><i class="bi bi-person-lines-fill me-2"></i>Editar Usuario</h4>
                    </div>
                    <div class="card-body p-4">
                        <form action="<?= base_url('usuarios/actualizar/' . $usuario['usuario_id']) ?>" method="post"
                            class="needs-validation" novalidate>
                            <input type="hidden" name="usuario_id" value="<?= $usuario['usuario_id'] ?>">

                            <div class="mb-3">
                                <label for="txt_nombre" class="form-label fw-semibold">Nombre</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-person"></i></span>
                                    <input type="text" name="txt_nombre" id="txt_nombre" class="form-control"
                                        value="<?= $usuario['nombre'] ?>" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="txt_apellido" class="form-label fw-semibold">Apellido</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-person-badge"></i></span>
                                    <input type="text" name="txt_apellido" id="txt_apellido" class="form-control"
                                        value="<?= $usuario['apellido'] ?>" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="txt_email" class="form-label fw-semibold">Correo Electrónico</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                    <input type="email" name="txt_email" id="txt_email" class="form-control"
                                        value="<?= $usuario['email'] ?>" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="txt_telefono" class="form-label fw-semibold">Teléfono</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                                    <input type="text" name="txt_telefono" id="txt_telefono" class="form-control"
                                        value="<?= $usuario['telefono'] ?>" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="txt_tipo" class="form-label fw-semibold">Tipo de Usuario</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-person-gear"></i></span>
                                    <select name="txt_tipo" id="txt_tipo" class="form-select" required>
                                        <option value="admin"
                                            <?= $usuario['tipo_usuario'] == 'admin' ? 'selected' : '' ?>>Administrador
                                        </option>
                                        <option value="invitado"
                                            <?= $usuario['tipo_usuario'] == 'invitado' ? 'selected' : '' ?>>Invitado
                                        </option>
                                        <option value="usuario"
                                            <?= $usuario['tipo_usuario'] == 'usuario' ? 'selected' : '' ?>>Usuario
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="txt_password" class="form-label fw-semibold">Contraseña (opcional)</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                    <input type="password" name="txt_password" id="txt_password" class="form-control"
                                        placeholder="Dejar en blanco si no deseas cambiarla">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="txt_activo" class="form-label fw-semibold">Estado</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-toggle-on"></i></span>
                                    <select name="txt_activo" id="txt_activo" class="form-select">
                                        <option value="1" <?= $usuario['activo'] ? 'selected' : '' ?>>Activo</option>
                                        <option value="0" <?= !$usuario['activo'] ? 'selected' : '' ?>>Inactivo</option>
                                    </select>
                                </div>
                            </div>

                            <div
                                class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-3 mt-4 px-2">
                                <div class="d-flex gap-2 w-100 w-md-auto justify-content-center">
                                    <a href="javascript:history.back()" class="btn btn-secondary w-50 w-md-auto">
                                        <i class="bi bi-arrow-left-circle me-2"></i>Regresar
                                    </a>
                                    <a href="<?= base_url('usuarios') ?>" class="btn btn-outline-danger w-50 w-md-auto">
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