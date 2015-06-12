<?php
  include_once "/mUsuario.php";
?>

<section class="content" id="contenido">
  <div class="container-fluid">
    <div class="row" id="r1">
      <h1 class="r1">Descripcion del evento</h1>
    </div>
    <div class="row" id="r2">
      <div class="col-lg-2"></div>
      <div class="col-lg-8">
        <h2>Evento</h2>
        <input type="hidden" name="id" value="<?php echo $evento['idEvento']?>" >
        <p>Nombre del evento: <?php echo $evento['nombre'] ?> </p>
        <p>Encargado: <?php echo $evento['responsable'] ?></p>
        <p>Lugar: <?php echo $evento['lugar'] ?></p>
        <p>Fecha: <?php echo $evento['horario'] ?></p>
        <p>Ecobonos: <?php echo $evento['eco-bonos'] ?> </p>
        <p>Descripcion: <?php echo $evento['descripcion'] ?></p>

      </div>
      <div class="col-lg-2"></div>
    </div>
  </div>
</section>
<?php
    include_once "/Sections/footer.php";
?>

