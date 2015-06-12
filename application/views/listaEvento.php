<?php
  include_once "/mUsuario.php";
?>
<section class="content" id="contenido">
  <div class="container-fluid">
    <div class="row" id="r1"><h1 class="r1">Agenda de actividades</h1></div>
    <div class="row" id="r2">
      <div class="col-lg-1"></div>
      <div class="col-lg-10">
      <!--Editar actividades-->
       <h2 class="tituloTabla">Eventos</h2>
            <table id="tabla-evento" class="table table-hover">
                <thead>
                    <tr><!--Renglones-->
                        <th >Nombre</th><!--Colunas-->
                        <th >Ubicación</th>
                        <th >Horario</th>
                        <th>Ecobonos</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($eventos as $rowEventos){ ?>
                    <tr>
                        <td><?php echo $rowEventos['nombre']; ?></td>
                        <td><?php echo $rowEventos['lugar']; ?></td>
                        <td><?php echo $rowEventos['horario']; ?></td>
                        <td><?php echo $rowEventos['eco-bonos']; ?></td>
                        <td><a href="index.php/uploader/editaEvento?id=<?php echo $rowEventos['idEvento'];?>"><i class="fa fa-pencil fa-lg"></i></a></td>
                        <td><a href="index.php/uploader/eliminaEvento?id=<?php echo $rowEventos['idEvento'];?>"><i class="fa fa-trash fa-lg"></i></a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
      </div>
      <div class="col-lg-1"></div>
    </div>
  </div>
</section>

<?php
    include_once "/Sections/footer.php";
?>
