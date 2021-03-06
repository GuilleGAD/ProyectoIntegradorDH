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
          <div class="col-md-10 col-md-offset-1">
              <div class="well well-sm">
                  <form class="form-horizontal" method="post">
                      <fieldset>
                          <legend class="text-center header">Contact us</legend>

                          <div class="form-group">
                              <span class="col-md-1 col-md-offset-2 text-center">
                                <i class="fa fa-user bigicon"></i>
                              </span>
                              <div class="col-md-8">
                                  <input id="fname" name="name" type="text" placeholder="First Name" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <span class="col-md-1 col-md-offset-2 text-center">
                                <i class="fa fa-user bigicon"></i>
                              </span>
                              <div class="col-md-8">
                                  <input id="lname" name="name" type="text" placeholder="Last Name" class="form-control">
                              </div>
                          </div>

                          <div class="form-group">
                              <span class="col-md-1 col-md-offset-2 text-center">
                                <i class="fa fa-envelope-o bigicon"></i>
                              </span>
                              <div class="col-md-8">
                                  <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                              </div>
                          </div>

                          <div class="form-group">
                              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                              <div class="col-md-8">
                                  <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control">
                              </div>
                          </div>

                          <div class="form-group">
                              <span class="col-md-1 col-md-offset-2 text-center">
                                <i class="fa fa-pencil-square-o bigicon"></i>
                              </span>
                              <div class="col-md-8">
                                  <textarea class="form-control" id="message" name="message" 
                                  placeholder="Enter your massage for us here." rows="7"></textarea>
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="col-md-12 text-center">
                                  <button type="submit" class="btn btn-lg btn-color">Submit</button>
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