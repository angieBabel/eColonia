<?php
  include_once "/mUsuario.php";
?>

<section class="content" id="contenido">
  <div class="container-fluid">
      <div class="col-lg-1"></div>

      <div class="col-lg-10">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
          <h2 class="tituloTabla">Iniciar Sesión</h2>
          <hr>
          <br>

          <form action="index.php/uploader/sesion" method="POST">
          <label for="exampleInputEmail1">Email address</label>
            <div class="col-lg-12 input-group margin-bottom-sm form-group">
              <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
              <input class="form-control" type="text" name="nombre" id="nombre" placeholder="email">
            </div>

            <label for="exampleInputPassword1">Password</label>
            <div class="col-lg-12 input-group margin-bottom-sm form-group">
              <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
              <input class="form-control" type="password"  name="contrasenia" id="contrasenia" placeholder="Contraseña">
            </div>
            <div class="col-lg-12 form-group" >
              <button type="submit" onclick="" class="btn btn-success btn-block">Ingresar</button>
            </div>

          </form>
        </div>

        <div class="col-lg-3"></div>
      </div>

      <div class="col-lg-1"></div>
    </div>
  </div>
</section>

<?php
    include_once "/Sections/footer.php";
?>
