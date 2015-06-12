<?php
  include_once "/mUsuario.php";
?>
<section class="content" id="contenido">
  <div class="container-fluid">
    <div class="row" id="r1"><h1 class="r1">Agenda de actividades</h1></div>
    <div class="row" id="r2">
      <div class="col-lg-1"></div>
      <div class="col-lg-10">
      <!--Talleres-->
       <h2 class="tituloTabla">Talleres</h2>
            <table id="tabla-taller" class="table table-hover">
                <thead>
                    <tr> <!--Renglones-->
                        <th>Nombre</th><!--Colunas-->
                        <th>Ubicación</th>
                        <th>Horario</th>
                        <th>Detalles</th
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($talleres as $rowTalleres){ ?>
                    <tr>
                        <td><?php echo $rowTalleres['nombre']; ?></td>
                        <td><?php echo $rowTalleres['lugar']; ?></td>
                        <td><?php echo $rowTalleres['horario']; ?></td>
                        <td><a href="index.php/uploader/editaTaller?id=<?php echo $rowTalleres['idTaller'];?>"><i class="fa fa-pencil fa-lg"></i></a></td>
                        <td><a href="index.php/uploader/eliminaEventoTaller?id=<?php echo $rowTalleres['idTaller'];?>"><i class="fa fa-trash fa-lg"></i></a></td>

                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        <br>
        <hr>
        <br>
      <!--eCotecnias-->
       <h2 class="tituloTabla">Eco-técnias</h2>
            <table id="tabla-ecotecnias" class="table table-hover">
                <thead>
                    <tr> <!--Renglones-->
                        <th>Nombre</th><!--Colunas-->
                        <th>Ubicación</th>
                        <th>Horario</th>
                        <th>Ecobonos</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($ecotecnias as $rowEcotecnias){ ?>
                    <tr>
                        <td><?php echo $rowEcotecnias['nombre']; ?></td>
                        <td><?php echo $rowEcotecnias['lugar']; ?></td>
                        <td><?php echo $rowEcotecnias['horario']; ?></td>
                        <td><?php echo $rowEcotecnias['eco-bonos']; ?></td>
                        <td><a <a href="index.php/uploader/editaEcotecnia?id=<?php echo $rowEcotecnias['idActividad'];?>"><i class="fa fa-pencil fa-lg"></i></a></td>
                        <td><a href="index.php/uploader/eliminaEventoEcotecnia?id=<?php echo $rowEcotecnias['idActividad'];?>"><i class="fa fa-trash fa-lg"></i></a></td>
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
