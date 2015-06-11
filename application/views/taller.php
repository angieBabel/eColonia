<?php
  include_once "/mUsuario.php";
?>

<section class="content" id="contenido">
  <div class="container-fluid">
    <div class="row" id="r1">
      <h1 class="r1">Agregar una actividad</h1>
    </div>
    <div class="row" id="r2">
      <div class="col-lg-1"></div>
      <div class="col-lg-10">
        <h2>Taller</h2>
        <form class="form-group" action="index.php/uploader/altaActTaller" method="POST">
        <div class="col-lg-7">

          <div class="form-group col-lg-12">
            <label for="Nombre" class="control-label">Nombre</label>
            <input type="text" name="Nombre" class="form-control" placehoder="Nombre de la actividad">
          </div>

          <div class="form-group col-lg-6">
            <label for="instructor" class="control-label">Instructor</label>
            <!-- <input type="text" name="instructor" class="form-control" placehoder="Encargado de la actividad"> -->
            <select name="instructor" id="instructor" class="form-control" >
              <?php
              foreach ($instructores as $instructor) {?>
                <option value="<?php echo $instructor['idInstructor'] ?>">
                    <?php echo $instructor['nombre'] ?>
                </option>
            <?php }
           ?>
            </select>
          </div>

          <div class="form-group col-lg-6">
            <label for="encargado" class="control-label">Encargado</label>
            <!-- <input type="text" name="encargado" class="form-control" placehoder="Encargado de la actividad"> -->
            <select name="encargado" id="encargado" class="form-control" >
              <?php
              foreach ($colonos as $colono) {?>
                <option value="<?php echo $colono['id'] ?>">
                    <?php echo $colono['nombre'] ?>
                </option>
            <?php }
           ?>
            </select>
          </div>

          <div class="form-group col-lg-12">
            <label for="lugar" class="control-label">Lugar</label>
            <input type="text" name="lugar" class="form-control" placehoder="Calle #, Colonia">
          </div>
          <div class="form-group col-lg-6">
            <label for="fecha_inicio" class="control-label">Fecha Inicio</label>
            <input type="date" name="fecha_inicio" class="form-control" placehoder="dd/mm/aaaa">
          </div>
          <div class="form-group col-lg-6">
            <label for="fecha_fin" class="control-label">Fecha Termino</label>
            <input type="date" name="fecha_fin" class="form-control" placehoder="dd/mm/aaaa">
          </div>
          <div class="form-group col-lg-6">
            <label for="hora" class="control-label">Horario</label>
            <input type="time" name="hora" class="form-control" placehoder="--:--">
          </div>

          <div class="form-group col-lg-6">
            <label class="control-label" for="costo">Costo</label>
            <input type="money" class="form-control" id="costo" name="costo" placeholder="$00.00">
          </div>



        </div>

        <div class="col-lg-5">
          <div class="form-group col-lg-6">
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
          <div class="form-group col-lg-6">
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
            <label for="descripcion" class="control-label">Material</label>
            <textarea name="descripcion" id="" cols="30" rows="5" class="form-control" placehoder="Descripción de la actividad"></textarea>
          </div>

          <div class="form-group col-lg-12">
            <label for="descripcion" class="control-label">Descripción</label>
            <textarea name="descripcion" id="" cols="30" rows="5" class="form-control" placehoder="Descripción de la actividad"></textarea>
          </div>
          <div class="form-group col-lg-12">
            <div class="col-lg-8"></div>
            <div class="col-lg-1"><button class="btn btn-success">Guardar</button></div>
          </div>
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
