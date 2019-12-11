<!DOCTYPE html>
<html lang="en">
    <!-- HEAD -->
    <?php require_once("phpCompartido/head.php");?>
  <body>
    <!-- HEADER -->
    <?php require_once("phpCompartido/header.php");?>
    <main class="carrito">
      <div class="conteiner">
        <div class="row">
          <div class="col-12 col-md-7">
            <h2>Productos seleccionados</h2>
            <div class="productosSeleccionados">
                <img src="images/pc.jpg" alt="">
                <div class="descripcionGeneral">
                  <h4>Nombre del producto</h4>
                  <p>Breve descripcion del producto</p>
                </div>
                <div class="cantidad">
                  <h4>Cantidad</h4>
                  <input type="text" name="cantidad" value="">
                </div>
            </div>
            <div class="productosSeleccionados">
                <img src="images/pc.jpg" alt="">
                <div class="descripcionGeneral">
                  <h4>Nombre del producto</h4>
                  <p>Breve descripcion del producto</p>
                </div>
                <div class="cantidad">
                  <h4>Cantidad</h4>
                  <input type="text" name="cantidad" value="">
                </div>
            </div>
            <div class="productosSeleccionados">
                <img src="images/pc.jpg" alt="">
                <div class="descripcionGeneral">
                  <h4>Nombre del producto</h4>
                  <p>Breve descripcion del producto</p>
                </div>
                <div class="cantidad">
                  <h4>Cantidad</h4>
                  <input type="text" name="cantidad" value="">
                </div>
            </div>
          </div>
          <div class="col-12 col-md-5">
            <div class="resumen">
              <h2>Resumen</h2>
              <div class="productosDelpedido">
                <h3>Productos del pedido</h3>
                <div class="tabla">
                  <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Productos</th>
                          <th scope="col">Cantidad</th>
                          <th scope="col">Precio</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Nombre</td>
                          <td>cantidad</td>
                          <td>precio</td>
                        </tr>
                        <tr>
                          <td>Nombre</td>
                          <td>cantidad</td>
                          <td>precio</td>
                        </tr>
                        <tr>
                          <td>Nombre</td>
                          <td>cantidad</td>
                          <td>precio</td>
                        </tr>
                      </tbody>
                    </table>

                </div>
                <h3>Total</h3>
                <button class="btn btn-primary">Pagar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- FOOTER -->
    <?php require_once("phpCompartido/footer.php");?>
  </body>
</html>
