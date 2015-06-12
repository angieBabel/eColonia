<?php
  include_once "/mUsuario.php";
?>

<section class="content" id="contenido">
  <div class="container-fluid">
    <div class="row" id="r1">
      <h1 class="r1">Descripcion taller </h1>
    </div>
    <div class="row" id="r2">
      <div class="col-lg-2"></div>
      <div class="col-lg-8">
        <h2>Taller</h2>
        <input type="hidden" name="id" value="<?php echo $taller['idTaller']?>" >
        <p>Nombre del Taller: <?php echo $taller['nombre']; ?></p>
        <p>Encargado: <?php echo $taller['responsable']; ?></p>
        <p>Lugar: <?php echo $taller['lugar']; ?></p>
        <p>Horario: <?php echo $taller['horario']; ?></p>
        <p>Fecha de Inicio: <?php echo $taller['fecha-inicio']; ?></p>
        <p>Fecha de finalización:<?php echo $taller['fecha-fin']; ?> </p>
        <p>Costo: <?php echo $taller['cuota']; ?> </p>
        <p>Cupo: <?php echo $taller['cupo']; ?></p>
        <p>Material: <?php echo $taller['materiales']; ?></p>
        <p>Ecobonos: <?php echo $taller['eco-bonos'] ?> </p>
        <p>Descripcion: <?php echo $taller['descripcion']; ?> </p>

      </div>
      <div class="col-lg-2"></div>
    </div>
  </div>
</section>
<?php
    include_once "/Sections/footer.php";
?>

