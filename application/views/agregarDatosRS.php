<?php
  include_once "/mUsuario.php";
?>

<section class="content" id="contenido">
  <div class="container-fluid">
    <div class="row" id="r1">
      <h1 class="r1">Residuos Solidos Urbanos</h1>
    </div>
    <div class="row" id="r2">
      <div class="col-lg-2"></div>
      <div class="col-lg-8">
        <h2>Agregar información</h2>
        <form class="form-group" action="index.php/uploader/agregaDatosRS" method="POST">
          <h3>Periodo</h3>
          <div class="form-group col-lg-12">
            <label for="finicio" class="control-label">Fecha</label>
            <input type="date" name="finicio" class="form-control" placeholder="Nombre de la actividad">
          </div>
          <?php foreach ($catalogo as $cat) { ?>
           <div class="form-group col-lg-4">
            <label for="lugar" class="control-label"><?php echo $cat['nombre']; ?></label>
            <input type="text" name="<?php echo $cat['nombre']; ?>" name="<?php echo $cat['nombre']; ?>" class="form-control" placeholder="<?php echo $cat['nombre']; ?>">
          </div>
          <?php } ?>

<!--           <div class="form-group col-lg-4">
  <label for="hora" class="control-label">Carton</label>
  <input type="timer" name="hora" class="form-control" placeholder="--:--">
</div>
<div class="form-group col-lg-4">
  <label for="fecha" class="control-label">Plastico</label>
  <input type="timer" name="fecha" class="form-control" placeholder="dd/mm/aaaa">
</div> -->
          <div class="form-group col-lg-6">
            <label for="colono" class="control-label">Colono</label>
            <input type="text" name="colono" id="colono" class="form-control" placeholder="Nombre colono">
          </div>
          <div class="form-group col-lg-3">
            <label for="totalrs" class="control-label">Total</label>
            <input type="timer" name="totalrs" class="form-control" placeholder="Total">
          </div>
          <div class="form-group col-lg-3">
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

