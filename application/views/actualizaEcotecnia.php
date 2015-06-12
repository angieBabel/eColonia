<?php
  include_once "/mUsuario.php";
?>

<section class="content" id="contenido">
  <div class="container-fluid">
    <div class="row" id="r1">
      <h1 class="r1">Modifica una actividad con ecotecnias</h1>
    </div>
    <div class="row" id="r2">
      <div class="col-lg-2"></div>
      <div class="col-lg-8">
        <h2>Actividades en eCotecnias</h2>
        <form class="form-group" action="index.php/uploader/actualizaEcotecnia" method="POST">
        <input type="hidden" name="id" value="<?php echo $ecotecnia['idActividad']?>">
          <div class="form-group col-lg-12">
            <label for="Nombre" class="control-label">Nombre</label>
            <input value="<?php echo $ecotecnia['nombre']; ?>" type="text" name="Nombre" class="form-control" placehoder="Nombre de la actividad">
          </div>
          <div class="form-group col-lg-6">
            <label for="encargado" class="control-label">Encargado</label>
            <!-- <input type="text" name="encargado" class="form-control" placehoder="Encargado de la actividad"> -->
            <input value="<?php echo $ecotecnia['responsable']; ?>"type="text" name="responsable" id="responsable">
          </div>
          <div class="form-group col-lg-6">
            <label for="lugar" class="control-label">Lugar</label>
            <input value="<?php echo $ecotecnia['lugar']; ?>"type="text" name="lugar" class="form-control" placehoder="Calle #, Colonia">
          </div>
          <div class="form-group col-lg-4">
            <label for="ecobonos" class="control-label">Ecobonos</label>
            <select class="form-control" name="ecobonos">
              <option>0</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
          <div class="form-group col-lg-4">
            <label class="control-label" for="ecotecnia">Ecotecnia</label>
            <input value="<?php echo $ecotecnia['idEcotecnia']; ?>"type="text" name="ecotecnia" id="ecotecnia">
          </div>
          <div class="form-group col-lg-4">
            <label for="hora" class="control-label">Horario</label>
            <input value="<?php echo $ecotecnia['horario']; ?>"type="timer" name="hora" class="form-control" placehoder="--:--">
          </div>
          <div class="form-group col-lg-4">
            <label for="fecha-inicio" class="control-label">Fecha inicio</label>
            <input value="<?php echo $ecotecnia['fecha-inicio']; ?>"type="date" name="fecha-inicio" class="form-control" placehoder="dd/mm/aaaa">
          </div>
          <div class="form-group col-lg-4">
            <label for="fecha-fin" class="control-label">Fecha fin</label>
            <input value="<?php echo $ecotecnia['fecha-fin']; ?>"type="date" name="fecha-fin" class="form-control" placehoder="dd/mm/aaaa">
          </div>
          <div class="form-group col-lg-4">
            <label class="control-label" for="costo">Cupo</label>
            <select class="form-control" id="cupo" name="cupo">
              <option>10</option>
              <option>15</option>
              <option>25</option>
              <option>35</option>
              <option>40</option>
              <option>50</option>
            </select>
          </div>
          <div class="form-group col-lg-12">
            <label for="descripcion" class="control-label">Descripción</label>
            <textarea name="descripcion" id="" cols="30" rows="10" class="form-control" placehoder="Descripción de la actividad">
              <?php echo $ecotecnia['descripcion']; ?>
            </textarea>
          </div>
          <div class="form-group col-lg-12">
            <div class="col-lg-10"></div>
            <div class="col-lg-2"><button class="btn btn-success" type="submit">Guardar</button></div>
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
