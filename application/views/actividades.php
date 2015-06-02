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
      <div class="col-lg-1"></div>
      <div class="col-lg-10">
          <form>
            <div class="form-group">
              <label for="Nombre">Nombre</label>
              <input type="text" name="Nombre" class="form-control" placehoder="Nombre de la actividad">
            </div>
            <div class="form-group">
              <label for="representante">Representante</label>
              <input type="text" name="representante" class="form-control" placehoder="Encargado de la actividad">
            </div>
            <div class="form-group">
              <label for="hora">Horario</label>
              <input type="timer" name="hora" class="form-control" placehoder="--:--">
            </div>
            <div class="form-group">
              <label for="fecha">Fecha</label>
              <input type="timer" name="fecha" class="form-control" placehoder="dd/mm/aaaa">
            </div>
            <div class="form-group">
              <label for="lugar">Lugar</label>
              <input type="text" name="lugar" class="form-control" placehoder="Calle #, Colonia">
            </div>
            <div class="form-group">
              <label for="descripcion">Descripción</label>
              <textarea name="descripcion" id="" cols="30" rows="10" class="form-control" placehoder="Descripción de la actividad"></textarea>
            </div>
            <div class="form-group">
              <label for="ecobonos">Ecobonos</label>
              <input type="text" name="ecobonos" class="form-control" placehoder="Ecobonos">
            </div>
            <div class="form-group">
              <button>Guardar</button>
            </div>
          </form>
      </div>
      <div class="col-lg-1"></div>
    </div>
  </div>
</section>

<?php
    include_once "/Sections/footer.php";
?>
