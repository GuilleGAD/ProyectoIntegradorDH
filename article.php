<!DOCTYPE html>
<html lang="en">
    <!-- HEAD -->
    <?php require_once("phpCompartido/head.php");?>
  <body>
    <!-- HEADER -->
    <?php require_once("phpCompartido/header.php");?>
    <main class="articulo">
      <div class="conteiner">
        <div class="row">
          <div class="col-2 col-md-2 ">
            <div class="imagenesMuestra">
              <img src="images/pc.jpg" alt="">
              <img src="images/pc.jpg" alt="">
              <img src="images/pc.jpg" alt="">
            </div>
          </div>
          <div class="col-10 col-md-5 ">
            <img class="imagenPrincipal" src="images/pc.jpg" alt="">
          </div>
          <div class="col-12 col-md-5">
            <div class="descripcionProducto">
              <h1>Nombre del producto</h1>
              <p>Breve descuopcion del producto</p>
              <h2>Precio</h2>
              <button class="btn btn-primary">Agregar al carrito</button>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="descripcionCompleta">
            <p>Descripcion completa del producto</p>
            <ul>
              <li>caracteristica del producto</li>
              <li>caracteristica del producto</li>
              <li>caracteristica del producto</li>
            </ul>

          </div>


        </div>

      </div>

    </main>



    <!-- FOOTER -->
    <?php require_once("phpCompartido/footer.php");?>
  </body>
</html>
