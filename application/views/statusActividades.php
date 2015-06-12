<?php
  include_once "/mUsuario.php";
?>

<section class="content" id="contenido">
  <div class="container-fluid">
    <div class="row" id="r1"><h1 class="r1">Estatus de agenda de actividades</h1></div>
    <div class="row" id="r2">
      <div class="col-lg-1"></div>
      <div class="col-lg-10">
        <form action="index.php/uploader/cambiaEstado" method="POST">
                 <!--Eventos-->
            <h2 class="tituloTabla">Eventos</h2>
                  <table id="tabla-evento" class="table table-hover">
                      <thead>
                          <tr><!--Renglones-->
                              <th>Nombre</th><!--Colunas-->
                              <th>Fecha</th>
                              <th>Estatus</th>
                              <th></th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php foreach($eventos as $rowEventos){ ?>
                          <tr>
                              <td><?php echo $rowEventos['nombre']; ?></td>
                              <td><?php echo $rowEventos['fecha_Inicio']; ?></td>
                              <td><?php echo $rowEventos['estado']; ?></td>
                              <td>
                                  <input name="eventos[]" value="<?php echo $rowEventos['idEvento']; ?>" type="checkbox">Finalizar
                              </td>
                          </tr>
                          <?php } ?>
                      </tbody>
                  </table>
              <br>
              <hr>
              <br>
              <!--Talleres-->
            <h2 class="tituloTabla">Talleres</h2>
                  <table id="tabla-taller" class="table table-hover">
                      <thead>
                          <tr> <!--Renglones-->
                              <th>Nombre</th><!--Colunas-->
                              <th>Fecha</th>
                              <th>Estatus</th>
                              <th></th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php foreach($talleres as $rowTalleres){ ?>
                          <tr>
                              <td><?php echo $rowTalleres['nombre']; ?></td>
                              <td><?php echo $rowTalleres['fecha-inicio']; ?></td>
                              <td><?php echo $rowTalleres['estado']; ?></td>
                              <td>
                                  <input name="talleres[]" value="<?php echo $rowTalleres['idTaller']; ?>"type="checkbox">Finalizar
                              </td>
                          </tr>
                          <?php } ?>
                      </tbody>
                  </table>
              <br>
              <hr>
              <br>
              <!--Eco-tecnias-->
            <h2 class="tituloTabla">Eco-técnias</h2>
                  <table id="tabla-ecotecnias" class="table table-hover">
                      <thead>
                          <tr> <!--Renglones-->
                              <th>Nombre</th><!--Colunas-->
                              <th>Fecha</th>
                              <th>Estatus</th>
                              <th></th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php foreach($ecotecnias as $rowEcotecnias){ ?>
                          <tr>
                              <td><?php echo $rowEcotecnias['nombre']; ?></td>
                              <td><?php echo $rowEcotecnias['fecha-inicio']; ?></td>
                              <td><?php echo $rowEcotecnias['estado']; ?></td>
                              <td>
                                  <input name="ecotecnias[]" value="<?php echo $rowEcotecnias['idActividad']; ?>" type="checkbox">Finalizar
                              </td>
                          </tr>
                          <?php } ?>
                      </tbody>
                  </table>
            <button type="submit">Enviar</button>
        </form>

      </div>
      <div class="col-lg-1"></div>
    </div>
  </div>
</section>

<?php
    include_once "/Sections/footer.php";
?>
<td><input type="checkbox">Finalizar</td>
