<?php
  include_once "/mUsuario.php";
?>

<section class="content" id="contenido">
  <div class="container-fluid">
    <div class="row" id="r1">
      <h1 class="r1">Agregar una actividad</h1>
    </div>
    <br>
    <div class="row" id="r2">
      <div class="col-lg-2"></div>
      <div class="col-lg-8">
        <h2>Taller</h2>
        <form class="form-horizontal">
          <div class="form-group col-lg-12">
            <label for="Nombre" class="col-lg-2 control-label">Nombre</label>
            <div class="col-lg-10">
              <input type="text" name="Nombre" class="form-control" placehoder="Nombre de la actividad">
            </div>
          </div>
          <div class="form-group col-lg-12">
            <label for="representante" class="col-lg-2 control-label">Encargado</label>
            <div class="col-lg-10">
              <input type="text" name="representante" class="form-control" placehoder="Encargado de la actividad">
            </div>
          </div>
          <div class="form-group col-lg-12">
            <label for="representante" class="col-lg-2 control-label">Instructor</label>
            <div class="col-lg-10">
              <input type="text" name="representante" class="form-control" placehoder="Encargado de la actividad">
            </div>
          </div>
          <div class="form-group col-lg-12">
            <label for="lugar" class="col-sm-2 control-label">Lugar</label>
            <div class="col-sm-10">
              <input type="text" name="lugar" class="form-control" placehoder="Calle #, Colonia">
            </div>
          </div>
          <div class="form-group col-lg-12">
            <label for="hora" class="col-sm-2 control-label">Horario</label>
            <div class="col-sm-10">
              <input type="timer" name="hora" class="form-control" placehoder="--:--">
            </div>
          </div>
          <div class="form-group col-lg-12">
            <label for="fecha" class="col-sm-2 control-label">Fecha</label>
            <div class="col-sm-10">
              <input type="timer" name="fecha" class="form-control" placehoder="dd/mm/aaaa">
            </div>
          </div>
          <div class="form-group col-lg-12">
            <label for="descripcion" class="col-sm-2 control-label">Descripción</label>
            <div class="col-sm-10">
              <textarea name="descripcion" id="" cols="30" rows="10" class="form-control" placehoder="Descripción de la actividad"></textarea>
            </div>
          </div>
          <div class="form-group col-lg-12">
            <label for="ecobonos" class="col-sm-2 control-label">Ecobonos</label>
            <div class="col-sm-10">
              <input type="text" name="ecobonos" class="form-control" placehoder="Ecobonos">
            </div>
          </div>
          <div class="form-group col-lg-12">
            <button>Guardar</button>
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
