<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <h1>Actualizar Detalle de Reserva</h1>
                <form action="<?=base_url('modificar_detalles_reservas/')?>" method="post">
                    <label for="txt_id" class="form-label">Id</label>
                    <input type="number" name="txt_id" id="txt_id" class="form-control"
                        value="<?=$datos['detalle_id'];?>" readonly>

                    <label for="txt_asiento" class="form-label">Asiento Id</label>
                    <input type="number" name="txt_asiento" id="txt_asiento" class="form-control"
                        value="<?=$datos['asiento_id'];?>">

                    <label for="txt_reserva" class="form-label">Reserva Id</label>
                    <input type="text" name="txt_reserva" id="txt_reserva" class="form-control"
                        value="<?=$datos['reserva_id'];?>">

                    <label for="txt_precio" class="form-label">Precio Unitario</label>
                    <input type="number" name="txt_precio" id="txt_precio" class="form-control"
                        value="<?=$datos['precio_unitario'];?>">

                    <label for="txt_ticket" class="form-label">Numero Ticket</label>
                    <input type="text" name="txt_ticket" id="txt_ticket" class="form-control"
                        value="<?=$datos['numero_ticket'];?>">

                    <button type="submit" class="form-control btn btn-dark mt-3">Guardar</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>

</html>