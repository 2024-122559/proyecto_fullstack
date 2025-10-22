<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Reservas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.4/css/dataTables.dataTables.css" />
    <script src="https://cdn.datatables.net/2.3.4/js/dataTables.js"></script>
</head>

<body class="container py-4">
    <?php if (session()->getFlashdata('mensaje')): ?>
    <script>
    let mensaje = "<?= session()->getFlashdata('mensaje') ?>";
    let texto = mensaje == 'agregado' ? 'Se agregó la reserva correctamente' :
        mensaje == 'error' ? 'Error en la operación' :
        mensaje == 'eliminado' ? 'Se eliminó la reserva correctamente' :
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
        <h2>Lista de Reservas</h2>
        <a href="<?= base_url('reservas/crear'); ?>" class="btn btn-success">+ Agregar Reserva</a>
    </div>
    <table id="myTable" class="table table-bordered table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID Reserva</th>
                <th>Usuario ID</th>
                <th>Función ID</th>
                <th>Total</th>
                <th>Fecha Reserva</th>
                <th>Código QR</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($reservas as $reserva): ?>
            <tr>
                <td><?= $reserva['reserva_id']; ?></td>
                <td><?= $reserva['usuario_id']; ?></td>
                <td><?= $reserva['funcion_id']; ?></td>
                <td><?= $reserva['total']; ?></td>
                <td><?= $reserva['fecha_reserva']; ?></td>
                <td><?= $reserva['codigo_qr']; ?></td>
                <td>
                    <a href="<?= base_url('reservas/editar/'.$reserva['reserva_id']); ?>"
                        class="btn btn-sm btn-info">Editar</a>
                    <a href="<?= base_url('reservas/eliminar/'.$reserva['reserva_id']); ?>"
                        class="btn btn-sm btn-danger"
                        onclick="return confirm('¿Desea eliminar esta reserva?')">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/2.3.4/i18n/es-ES.json"
                },
                "pageLength": 10,
                "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Todas"]],
                "order": [[0, "desc"]] 
            });
        });
    </script>
</body>

</html>