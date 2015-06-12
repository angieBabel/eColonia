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
        <table class="table">
          <tr>
            <td>Nombre del Taller:</td><td><?php echo $taller['nombre']; ?></td>
          </tr>
          <tr>
            <td>Encargado:</td><td><?php echo $taller['responsable']; ?></td>
          </tr>
          <tr>
            <td>Lugar:</td><td><?php echo $taller['lugar']; ?></td>
          </tr>
          <tr>
            <td>Horario: </td><td><?php echo $taller['horario']; ?></td>
          </tr>
          <tr>
            <td>Fecha de Inicio:</td><td><?php echo $taller['fecha-inicio']; ?></td>
          </tr>
          <tr>
            <td>Fecha de finalización:</td><td><?php echo $taller['fecha-fin']; ?></td>
          </tr>
          <tr>
            <td>Costo:</td><td><?php echo $taller['cuota']; ?></td>
          </tr>
          <tr>
            <td>Cupo:</td><td><?php echo $taller['cupo']; ?></td>
          </tr>
          <tr>
            <td>Material:</td><td><?php echo $taller['materiales']; ?></td>
          </tr>
          <tr>
            <td>Ecobonos: </td><td><?php echo $taller['eco-bonos'] ?></td>
          </tr>
          <tr>
            <td>Descripcion:</td><td><?php echo $taller['descripcion']; ?></td>
          </tr>
        </table>
        <input type="hidden" name="id" value="<?php echo $taller['idTaller']?>" >

        <a href="index.php/welcome/ambActividades" style="color:black"><i class="fa fa-reply fa-lg"></i></a>
        <a href="index.php/welcome/ambiental" style="color:black"><i class="fa fa-home fa-lg"></i></a>

      </div>
      <div class="col-lg-2"></div>
    </div>
  </div>
</section>
<?php
    include_once "/Sections/footer.php";
?>

