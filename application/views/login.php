<?php
  include_once "/mUsuario.php";
?>

<section class="content" id="contenido">
  <div class="container-fluid">
      <div class="col-lg-1"></div>
      <div class="col-lg-10">
      <!--Eventos-->
        <h2 class="tituloTabla">Iniciar Sesión</h2>
            <form action="index.php/uploader/altaInstructor" method="POST">

                <div class="col-lg-12">
                  <input class="form-control" type="text" name="nombre" id="nombre" placeholder="email">
                </div>
              <br>
              <br>
                <div class="col-lg-12">
                  <input class="form-control" type="text" name="contrasenia" id="profesion" placeholder="Contraseña">
                </div>
              <br>
              <br>
                <button type="submit" onclick="" class="btn btn-success">Ingresar</button>
            </form>

      </div>
      <div class="col-lg-1"></div>
    </div>
  </div>
</section>

<?php
    include_once "/Sections/footer.php";
?>
