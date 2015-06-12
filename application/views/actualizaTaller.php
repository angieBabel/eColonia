<?php
  include_once "/mUsuario.php";
?>

<section class="content" id="contenido">
  <div class="container-fluid">
    <div class="row" id="r1">
      <h1 class="r1">Actualiza el taller <?php echo $taller['idTaller']; ?></h1>
    </div>
    <div class="row" id="r2">
      <div class="col-lg-2"></div>
      <div class="col-lg-8">
        <h2>Actividad</h2>
        <form class="form-group" method="POST" action="index.php/uploader/actualizaTaller">
        <input type="hidden" name="id" value="<?php echo $taller['idTaller']?>">

        <div class="col-lg-7">

          <div class="form-group col-lg-12">
            <label for="Nombre" class="control-label">Nombre</label>
            <input  value="<?php echo $taller['nombre']; ?>" type="text" name="Nombre" class="form-control" placehoder="Nombre de la actividad">
          </div>

          <div class="form-group col-lg-6">
            <label for="instructor" class="control-label">Instructor</label>
            <!-- <input type="text" name="instructor" class="form-control" placehoder="Encargado de la actividad"> -->
           <input  type="text" name="instructor" id="instructor">
          </div>

          <div class="form-group col-lg-6">
            <label for="encargado" class="control-label">Encargado</label>
            <!-- <input type="text" name="encargado" class="form-control" placehoder="Encargado de la actividad"> -->
            <input value="<?php echo $taller['responsable']; ?>" type="text" name="responsable" id="responsable" >
          </div>

          <div class="form-group col-lg-12">
            <label for="lugar" class="control-label">Lugar</label>
            <input value="<?php echo $taller['lugar']; ?>"type="text" name="lugar" class="form-control" placehoder="Calle #, Colonia">
          </div>
          <div class="form-group col-lg-6">
            <label for="fecha_inicio" class="control-label">Fecha Inicio</label>
            <input value="<?php echo $taller['fecha-inicio']; ?>"type="date" name="fecha_inicio" class="form-control" placehoder="dd/mm/aaaa">
          </div>
          <div class="form-group col-lg-6">
            <label for="fecha_fin" class="control-label">Fecha Termino</label>
            <input  value="<?php echo $taller['fecha-fin']; ?>"type="date" name="fecha_fin" class="form-control" placehoder="dd/mm/aaaa">
          </div>
          <div class="form-group col-lg-6">
            <label for="hora" class="control-label">Horario</label>
            <input value="<?php echo $taller['horario']; ?>"type="time" name="hora" class="form-control" placehoder="--:--">
          </div>

          <div class="form-group col-lg-6">
            <label class="control-label" for="costo">Costo</label>
            <input value="<?php echo $taller['cuota']; ?>" type="money" class="form-control" id="costo" name="costo" placeholder="$00.00">
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
            <label for="material" class="control-label">Material</label>
            <textarea name="material" id="" cols="30" rows="5" class="form-control" placehoder="Material necesario para el taller">
                <?php echo $taller['material']; ?>
            </textarea>
          </div>

          <div class="form-group col-lg-12">
            <label for="descripcion" class="control-label">Descripción</label>
            <textarea name="descripcion" id="" cols="30" rows="5" class="form-control" placehoder="Descripción de la actividad">
              <?php echo $taller['descripcion']; ?>
            </textarea>
          </div>
          <div class="form-group col-lg-12">
            <div class="col-lg-8"></div>
            <div class="col-lg-1"><button class="btn btn-success" type="submit">Guardar</button></div>
          </div>
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

