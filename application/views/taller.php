<?php
  include_once "/mUsuario.php";
?>

<section class="content" id="contenido">
  <div class="container-fluid">
    <div class="row" id="r1">
      <h1 class="r1">Agregar una actividad</h1>
    </div>
    <div class="row" id="r2">
      <div class="col-lg-2"></div>
      <div class="col-lg-8">
        <h2>Taller</h2>
        <form class="form-group">
          <div class="form-group col-lg-12">
            <label for="Nombre" class="control-label">Nombre</label>
            <input type="text" name="Nombre" class="form-control" placehoder="Nombre de la actividad">
          </div>
          <div class="form-group col-lg-6">
            <label for="encargado" class="control-label">Encargado</label>
            <input type="text" name="encargado" class="form-control" placehoder="Encargado de la actividad">
          </div>
          <div class="form-group col-lg-6">
            <label for="representante" class="control-label">Instructor</label>
            <input type="text" name="representante" class="form-control" placehoder="Encargado de la actividad">
          </div>
          <div class="form-group col-lg-8">
            <label for="lugar" class="control-label">Lugar</label>
            <input type="text" name="lugar" class="form-control" placehoder="Calle #, Colonia">
          </div>
          <div class="form-group col-lg-4">
            <label for="ecobonos" class="control-label">Ecobonos</label>
            <select class="form-control">
              <option>0</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
          <div class="form-group col-lg-4">
            <label for="hora" class="control-label">Horario</label>
            <input type="timer" name="hora" class="form-control" placehoder="--:--">
          </div>
          <div class="form-group col-lg-4">
            <label for="fecha" class="control-label">Fecha</label>
            <input type="timer" name="fecha" class="form-control" placehoder="dd/mm/aaaa">
          </div>
          <div class="form-group col-lg-4">
            <label class="control-label" for="costo">Costo</label>
            <input type="money" class="form-control" id="costo" placeholder="$00.0">
          </div>
          <div class="form-group col-lg-12">
            <label for="descripcion" class="control-label">Descripción</label>
            <textarea name="descripcion" id="" cols="30" rows="10" class="form-control" placehoder="Descripción de la actividad"></textarea>
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
