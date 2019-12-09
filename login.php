<!DOCTYPE html>
<html lang="en">
    <!-- HEAD -->
    <?php require_once("phpCompartido/head.php");?>
  <body>
    <!-- HEADER -->
    <?php require_once("phpCompartido/header.php");?>

    <form class="form-inline" role="form">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>

    <!-- FOOTER -->
    <?php require_once("phpCompartido/footer.php");?>
  </body>
</html>