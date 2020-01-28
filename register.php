<!DOCTYPE html>
<html lang="en">
  <!-- HEAD -->
  <?php require_once("phpCompartido/head.php");?>
  <link rel="stylesheet" href="css/styleContactRegisterLogin.css">
  <body>
    <!-- HEADER -->
    <?php require_once("phpCompartido/header.php");?>

    <div id="top-bottom-register-contact" class="container">
      <div class="row">
          <div class="col-md-6 col-md-offset-3">
              <div class="well well-sm">
                  <form class="form-horizontal" method="post">
                      <fieldset>
                          <legend class="text-center header">Registrate</legend>

                          <div class="form-group">
                              <span class="col-md-1 col-md-offset-2 text-center">
                                <i class="fa fa-user bigicon"></i>
                              </span>
                              <div class="col-md-8">
                                  <input id="userName" name="name" type="text" placeholder="Nombre de Usuario" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <span class="col-md-1 col-md-offset-2 text-center">
                                <i class="fa fa-user bigicon"></i>
                              </span>
                              <div class="col-md-8">
                                  <input id="firstName" name="name" type="text" placeholder="Nombre" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <span class="col-md-1 col-md-offset-2 text-center">
                                <i class="fa fa-user bigicon"></i>
                              </span>
                              <div class="col-md-8">
                                  <input id="lastName" name="name" type="text" placeholder="Apellido" class="form-control">
                              </div>
                          </div>

                          <div class="form-group">
                              <span class="col-md-1 col-md-offset-2 text-center">
                                <i class="fa fa-envelope-o bigicon"></i>
                              </span>
                              <div class="col-md-8">
                                  <input id="email" name="email" type="text" placeholder="Dirección de Email" class="form-control">
                              </div>
                          </div>

                          <div class="form-group">
                              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                              <div class="col-md-8">
                                  <input id="phone" name="phone" type="text" placeholder="Telefono" class="form-control">
                              </div>
                          </div>

                          <div class="form-group">
                              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-lock bigicon"></i></span>
                              <div class="col-md-8">
                                  <input id="password" name="password" type="password" placeholder="Password" class="form-control">
                              </div>
                          </div>

                          <div class="form-group">
                              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-lock bigicon"></i></span>
                              <div class="col-md-8">
                                  <input id="rePassword" name="rePassword" type="password" placeholder="Repetor Password" class="form-control">
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="col-md-12 text-center">
                                  <button type="submit" class="btn btn-lg btn-color">Crear Cuenta</button>
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