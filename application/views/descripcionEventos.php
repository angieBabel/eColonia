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
        <table class="table">
          <tr>
            <td>Nombre del Evento:</td><td><?php echo $evento['nombre'] ?> </td>
          </tr>
          <tr>
            <td>Encargado:</td><td><?php echo $evento['responsable'] ?></td>
          </tr>
          <tr>
            <td>Lugar:</td><td><?php echo $evento['lugar'] ?></td>
          </tr>
          <tr>
            <td>Horario: </td><td><?php echo $evento['horario'] ?></td>
          </tr>
          <tr>
            <td>Fecha</td><td><?php echo $evento['fecha_Inicio'] ?></td>
          </tr>
          <tr>
            <td>Ecobonos: </td><td><?php echo $evento['eco-bonos'] ?></td>
          </tr>
          <tr>
            <td>Descripcion:</td><td><?php echo $evento['descripcion'] ?></td>
          </tr>
        </table>
        <input type="hidden" name="id" value="<?php echo $taller['idTaller']?>" >

        <a href="index.php/welcome/ambActividades" style="color:black"><i class="fa fa-reply fa-lg"></i></a>
        <a href="index.php/welcome/ambiental" style="color:black"><i class="fa fa-home fa-lg"></i></a>
        <input type="hidden" name="id" value="<?php echo $evento['idEvento']?>" >

      </div>
      <div class="col-lg-2"></div>
    </div>
  </div>
</section>
<?php
    include_once "/Sections/footer.php";
?>

