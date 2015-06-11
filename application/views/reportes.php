<?php
  include_once "/mUsuario.php";
?>

<section class="content" id="contenido">
  <div class="container-fluid">
    <div class="row" id="r1"><h1 class="r1">Residuos Solidos Urbanos</h1></div>
    <div class="row" id="r2">
      <div class="col-lg-1"></div>
      <div class="col-lg-10">
      <!--Eventos-->
      <?php foreach ($datos_historial as $datos_historiales) {
        # code...
      } ?>
        <h2 class="tituloTabla" id="per"><?php echo $datos_historiales['periodo']; ?></h2>
        <p >D:</p>
            <table id="tabla-evento" class="table table-hover">
                <thead>
                    <tr><!--Renglones-->
                        <th >Fecha</th><!--Colunas-->
                        <th >Material</th>
                        <th >Cantidad</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datos_historial as $datos_historiales) {?>
                      <tr>
                        <td><?php echo $datos_historiales['periodo']; ?></td>
                        <td><?php echo $datos_historiales['nombre']; ?></td>
                        <td><?php echo $datos_historiales['cantidad']; ?></td>
                    </tr>
                   <?php } ?>
                </tbody>
            </table>

      </div>
      <a href="" style="color:black"><i class="fa fa-print fa-2x"></i></a>
      <div class="col-lg-1"></div>
    </div>
  </div>
</section>

<?php
    include_once "/Sections/footer.php";
?>
