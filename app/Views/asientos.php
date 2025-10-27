<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleccionar Asientos - <?= esc($pelicula['titulo']) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('css/asientos.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">

</head>

<body>

    <div class="stars"></div>
    <div class="shooting-star"></div>
    <div class="shooting-star"></div>
    <div class="shooting-star"></div>
    <div class="shooting-star"></div>
    <div class="shooting-star"></div>

    <div class="container py-5">
        <h2><?= esc($pelicula['titulo']) ?></h2>
        <p>Selecciona tus asientos:</p>



        <form action="<?= base_url('reservar/detalle') ?>" method="post">
            <input type="hidden" name="usuario_id" value="<?= $usuario_id ?>">
            <input type="hidden" name="funcion_id" value="<?= $funcion_id ?>">

            <div class="pantalla">Pantalla</div>

            <div id="asientos-grid">
                <?php foreach($asientos as $asiento): 
            $clase = $asiento['activo'] ? 'btn-asiento' : 'btn-asiento ocupado';
        ?>
                <button type="button" class="<?= $clase ?>" data-id="<?= $asiento['asiento_id'] ?>">
                    <?= $asiento['fila'] . $asiento['numero'] ?>
                </button>
                <?php endforeach; ?>
            </div>

            <!-- Asientos seleccionados se insertan aquí -->
            <div id="selected-asientos"></div>

            <div class="mt-3">
                <button type="submit" class="btn btn-success">Confirmar Asientos</button>
                <button type="button" class="btn btn-secondary" onclick="window.history.back()">Cancelar</button>
            </div>
        </form>

    </div>

    <script>
    const selectedDiv = document.getElementById('selected-asientos');

    document.querySelectorAll('.btn-asiento').forEach(button => {
        if (!button.classList.contains('ocupado')) {
            button.addEventListener('click', () => {
                button.classList.toggle('selected');

                // Actualizar los asientos seleccionados en el form
                selectedDiv.innerHTML = '';
                document.querySelectorAll('.btn-asiento.selected').forEach(b => {
                    const input = document.createElement('input');
                    input.type = 'hidden';
                    input.name = 'asiento_seleccionado[]';
                    input.value = b.dataset.id;
                    selectedDiv.appendChild(input);
                });
            });
        }
    });
    </script>
</body>

</html>