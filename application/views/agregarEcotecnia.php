<?php
  include_once "/mUsuario.php";
?>

<section class="content" id="contenido">
  <div class="container-fluid">
    <div class="row" id="r1">
      <h1 class="r1">Agregar nueva Ecotecnia</h1>
    </div>
    <div class="row" id="r2">
      <div class="col-lg-2"></div>
      <div class="col-lg-8">
        <h2>ECotecnias</h2>
        <form class="form-group" method="POST" enctype="multipart/form-data" action="index.php/uploader/altaEcotecnia">
        <?php form_open_multipart('uploader/altaEcotecnia'); ?>
          <div class="form-group col-lg-12">
            <label for="Nombre" class="control-label">Nombre</label>
            <input type="text" name="Nombre" class="form-control" placehoder="Nombre de la actividad">
          </div>
          <div class="form-group col-lg-12">
            <label for="lugar" class="control-label">Ubicacion</label>
            <input type="text" name="lugar" class="form-control" placehoder="Calle #, Colonia">
          </div>
          <div class="form-group col-lg-6">
            <label for="uso" class="control-label">Modo de uso</label>
            <textarea name="uso" id="" cols="30" rows="10" class="form-control" placehoder="Como se usa la ecotecnia"></textarea>
          </div>
          <div class="form-group col-lg-6">
            <label for="descripcion" class="control-label">Descripción</label>
            <textarea name="descripcion" id="" cols="30" rows="10" class="form-control" placehoder="Descripción de la ecotecnia"></textarea>
          </div>

          <div class="form-group col-lg-12">
            <label for="imagen" class="control-label">Imagen</label>
            <input type="hidden" name="MAX_FILE_SIZE" value="200000">
            <input type="file" name="userfile">
          </div>
          <div class="form-group col-lg-12">
            <div class="col-lg-10"></div>
            <div class="col-lg-2"><button class="btn btn-success">Guardar</button></div>
          </div>
        </form>
      </div>
      <div class="col-lg-2"></div>
    </div>
  </div>
</section>

<?php
    include_once "/Sections/footer.php";
?>
