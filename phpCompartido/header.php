<?php
  $url = $_SERVER['REQUEST_URI'];
  $token = strtok($url, "/");
  $token = strtok("/");

  $index = "";
  $products = "";
  $faq = "";
  $contact = "";
  
  if($token == "index.php"){
    $index = "active";
  }
  if($token == "products.php"){
    $products = "active";
  }
  if($token == "faq.php"){
    $faq = "active";
  }
  if($token == "contact.php"){
    $contact = "active";
  }
?>

<header>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">WebSiteName</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class=<?php echo $index ?>><a href="index.php">Home</a></li>
          <li class=<?php echo $products ?>><a href="products.php">Products</a></li>
          <li class=<?php echo $faq ?>><a href="faq.php">F.A.Q.</a></li>
          <li class=<?php echo $contact ?>><a href="contact.php">Contact</a></li>
        </ul>

        <!-- incio search -->
        <form class="navbar-form navbar-left" action="/action_page.php">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit">
                <i class="glyphicon glyphicon-search"></i>
              </button>
            </div>
          </div>
        </form>
        <!-- fin search -->

        <ul class="nav navbar-nav navbar-right">
          <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>