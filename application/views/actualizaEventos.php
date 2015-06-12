<?php
  include_once "/mUsuario.php";
?>

<section class="content" id="contenido">
  <div class="container-fluid">
    <div class="row" id="r1">
      <h1 class="r1">Actualiza una actividad</h1>
    </div>
    <div class="row" id="r2">
      <div class="col-lg-2"></div>
      <div class="col-lg-8">
        <h2>Actividad</h2>
        <form class="form-group" method="POST" action="index.php/uploader/actualizaEvento">
        <input type="hidden" name="id" value="<?php echo $evento['idEvento']?>">
          <div class="form-group col-lg-12">
            <label for="Nombre" class="control-label">Nombre</label>
            <input type="text" name="Nombre" class="form-control" placehoder="Nombre de la actividad" value="<?php echo $evento['nombre'] ?>">
          </div>
          <div class="form-group col-lg-6">
            <label for="encargado" class="control-label">Encargado</label>
            <input name="encargado" id="encargado" class="form-control" value="<?php echo $evento['responsable'] ?>">
            <!-- </input> -->
          </div>
          <div class="form-group col-lg-6">
            <label for="lugar" class="control-label">Lugar</label>
            <input type="text" name="lugar" class="form-control" placehoder="Calle #, Colonia" value="<?php echo $evento['lugar'] ?>">
          </div>
          <div class="form-group col-lg-5">
            <label for="hora" class="control-label">Horario</label>
            <input value="<?php echo $evento['horario'] ?>" type="timer" name="hora" class="form-control" placeholder="--:--" >
          </div>
          <div class="form-group col-lg-5">
            <label for="fecha" class="control-label">Fecha</label>
            <input type="date" value="<?php echo $evento['fecha_Inicio'] ?>"name="fecha" class="form-control" placehoder="dd/mm/aaaa">
          </div>
          <div class="form-group col-lg-2">
            <label for="ecobonos" class="control-label">Ecobonos</label>
            <select class="form-control" name="ecobonos" value="<?php echo $evento['eco-bonos'] ?>">
              <option>0</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
          <div class="form-group col-lg-12">
            <label for="descripcion" class="control-label">Descripción</label>
            <textarea  name="descripcion" id="" cols="30" rows="10" class="form-control" placehoder="Descripción de la actividad" >
              <?php echo $evento['descripcion'] ?>
            </textarea>
          </div>
          <div "form-group col-lg-4">
            <label for="estado">Estado</label>
            <input value="<?php echo $evento['estado'] ?>" type="text" name="estado" id="estado"  >
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

