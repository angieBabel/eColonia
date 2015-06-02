<?php
  include_once "/mUsuario.php";
?>
<!--Informacion-->
<!--             <div id="modal1" class="modalmask">
                <div class="modalbox movedown">
                    <a href="#close" title="Close" class="close">X</a>
                    <?php //include_once 'detalle_actividades.php' ?>
                </div>
            </div> -->
<section class="content" id="contenido">
  <div class="container-fluid">
    <div class="row" id="r1"><h1 class="r1">Agenda de actividades</h1></div>
    <div class="row" id="r2">
      <div class="col-lg-1"></div>
      <div class="col-lg-10">
      <!--Eventos-->
        <h2 class="tituloTabla">Eventos</h2>
            <table id="tabla-evento" class="table table-hover">
                <thead>
                    <tr><!--Renglones-->
                        <th >Nombre</th><!--Colunas-->
                        <th >Ubicación</th>
                        <th >Horario</th>
                        <th >Detalles</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Recolección de basura</td>
                        <td>Koyotlán 291</td>
                        <td>8:00 am</td>
                        <td>
                            <a href="#modal1"> Ver más <i class="fa fa-plus"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Data 1</td>
                        <td>Data 2</td>
                        <td>Data 3</td>
                        <td><a href="#modal1">Ver más <i class="fa fa-plus"></i></a></td>
                    </tr>
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
                        <th>Ubicación</th>
                        <th>Horario</th>
                        <th>Detalles</th
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Cómo hacer ecoladrillos</td>
                        <td>Koyotlán 291</td>
                        <td>8:00 am</td>
                        <td>
                            <a href="#modal1">Ver más <i class="fa fa-plus"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Data 1</td>
                        <td>Data 2</td>
                        <td>Data 3</td>
                        <td>
                            <a href="#modal1">Ver más <i class="fa fa-plus"></i></a>
                        </td>
                    </tr>
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
                        <th>Ubicación</th>
                        <th>Horario</th>
                        <th>Detalles</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Recolección de basura</td>
                        <td>Koyotlán 291</td>
                        <td>8:00 am</td>
                        <td><a href="#modal1">Ver más <i class="fa fa-plus"></i></a></td>
                    </tr>
                    <tr>
                        <td>Data 1</td>
                        <td>Data 2</td>
                        <td>Data 3</td>
                        <td><a href="#modal1">Ver más <i class="fa fa-plus"></i></a></td>
                    </tr>
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
