<!DOCTYPE html>
<html lang="en">
    <!-- HEAD -->
    <?php require_once("phpCompartido/head.php");?>
    <link rel="stylesheet" href="css/styleLogin.css">
  <body>
    <!-- HEADER -->
    <?php require_once("phpCompartido/header.php");?>

    <div class="wrapper fadeInDown">
      <div id="formContent">
      <!-- Tabs Titles -->

      <!-- Icon -->
      <div class="fadeIn first">
        <img src="images/userIconLoggin.png" id="icon" alt="User Icon" />
      </div>

      <!-- Login Form -->
      <form>
        <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
        <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
        <input type="submit" class="fadeIn fourth" value="Log In">
      </form>

      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover" href="#">Forgot Password?</a>
      </div>

      </div>
    </div>

    <!-- FOOTER -->
    <?php require_once("phpCompartido/footer.php");?>
  </body>
</html>