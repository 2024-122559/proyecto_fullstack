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
                <h1>Actualizar Estado</h1>
                <form action="<?=base_url('editar_estado')?>" method="post">
                    <label for="txt_id" class="form-label">Id</label>
                    <input type="number" name="txt_id" id="txt_id" class="form-control"
                        value="<?=$datos['id_estado'];?>" readonly>

                    <label for="txt_nombre" class="form-label">Nombre</label>
                    <input type="number" name="txt_nombre" id="txt_nombre" class="form-control"
                        value="<?=$datos['nombre'];?>">

                    <label for="txt_descripcion" class="form-label">Descripcion</label>
                    <input type="text" name="txt_descripcion" id="txt_descripcion" class="form-control"
                        value="<?=$datos['descripcion'];?>">

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