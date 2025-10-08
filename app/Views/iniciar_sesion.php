<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cine Estático</title>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">

  
</head>
<body>
<!-- fondito de patalla bonito -->    
 <div class="stars"></div>
<div class="shooting-star"></div>
<div class="shooting-star"></div>
<div class="shooting-star"></div>
<div class="shooting-star"></div>
<div class="shooting-star"></div>

  <div class="cine-container">
      <div class="cine-header">
        <img src="https://i.ibb.co/YFk7Dkhr/CINE.png" alt="Cine Header" class="header-image" width="100%">
    </div>

  <nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">
        <div class="buttonhead">
      
      
            <a class="nav-link" href="<?= base_url('iniciar_sesion'); ?>">Iniciar Sesion</a>
        
            <a class="nav-link" href="<?= base_url('cine'); ?>">Regresar</a>
        </div>
      
    </div>
  </nav>

    <div class="vineta">
      <span>Ingresa</span>
      <p>ログイン</p>
    </div>


     <<div class="login-form">
            <h2>Iniciar Sesión</h2>
            <?php if (session()->has('errors')): ?>
                <div class="alert alert-danger">
                    <?= session('errors') ?>
                </div>
            <?php endif; ?>
            <form action="<?= base_url('login/login?pelicula_id=' . ($pelicula_id ?? '')) ?>" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?= old('email') ?>" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-success">Ingresar</button>
            </form>
        </div>

    <div class="moviegrid">
        
    </div>

    

    <div class="piecito">
         <div class="cine-header">
        <img src="https://i.ibb.co/spP1PCZN/piecito.png" alt="Cine Header" class="header-image" width="100%">
   
    </div>

  </div>

</body>
</html>
