<!DOCTYPE html>
<html lang="en">
  <!-- HEAD -->
  <?php require_once("phpCompartido/head.php");?>
  <link rel="stylesheet" href="css/styleContactRegisterLogin.css">

  <body>
    <!-- HEADER -->
    <?php require_once("phpCompartido/header.php");?>

    <div id="top-bottom-login" class="container">
      <div class="row">
          <div class="col-md-6 col-md-offset-3">
              <div class="well well-sm">
                  <form class="form-horizontal" method="post">
                      <fieldset>
                          <legend class="text-center header">Inicia sesión con tu cuenta</legend>

                          <div class="form-group">
                              <span class="col-md-1 col-md-offset-2 text-center">
                                <i class="fa fa-user bigicon"></i>
                              </span>
                              <div class="col-md-8">
                                  <input id="userName" name="name" type="text" placeholder="Nombre de usuario o Email" class="form-control">
                              </div>
                          </div>

                          <div class="form-group">
                              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-lock bigicon"></i></span>
                              <div class="col-md-8">
                                  <input id="password" name="password" type="password" placeholder="Ingresa tu contraseña" class="form-control">
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="col-md-12 text-center">
                                  <button type="submit" class="btn btn-lg btn-color">Iniciar sesión</button>
                              </div>
                          </div>
                      </fieldset>
                  </form>
              </div>
          </div>
      </div>
    </div>

    <!-- FOOTER -->
    <?php require_once("phpCompartido/footer.php");?>
  </body>
</html>