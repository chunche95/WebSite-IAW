<?php require_once INCLUDES.'inc_header.php'; ?>

<div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="<?php echo IMAGES.'hc3.PNG' ?>" alt="<?php echo get_sitename() ?>" width="150">
    <h2>Ingresa a tu cuenta</h2>
    <p class="lead">Zona de login para trabajadores de HC3 medical services.</p>
  </div>

  <div class="row">
    <div class="col-12">
      <?php echo Flasher::flash(); ?>
    </div>

    <!-- formulario -->
    <div class="col-xl-12">
      <div class="card">
        <div class="card-header">
          <h4>Ingresa a tu cuenta</h4>
        </div>
        <div class="card-body">
          <form action="login/post_login" method="post" novalidate>
            <?php echo insert_inputs(); ?>
            
            <div class="form-group row">
              <div class="col-xl-6">
                <label for="usuario">Usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Walter White" required>
                <small class="text-muted">Ingresa bee</small>
              </div>
              <div class="col-xl-6">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" required>
              </div>
            </div>

            <button class="btn btn-primary btn-lg btn-block" type="submit">Ingresar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require_once INCLUDES.'inc_footer_v2.php'; ?>

