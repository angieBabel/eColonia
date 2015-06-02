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
        <h2>Eventos</h2>
            <table id="tabla-evento" class="table table-hover">
                <thead>
                    <tr><!--Renglones-->
                        <th >Nombre</th><!--Colunas-->
                        <th >Ubicación</th>
                        <th >Horario</th>
                        <th >Créditos</th>
                        <th >Detalles</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Recolección de basura</td>
                        <td>Koyotlán 291</td>
                        <td>8:00 am</td>
                        <td>5 eco-bonos</td>
                        <td>
                            <a href="#modal1">Ver más</a>
                            <!-- <input onclick="cargado();" type="button" value="Ver más" class="btn" data-type="zoomin"/> -->
                        </td>
                    </tr>
                    <tr>
                        <td>Data 1</td>
                        <td>Data 2</td>
                        <td>Data 3</td>
                        <td>Data 4</td>
                        <td><a href="detalle_actividades.php" target="_blank" onClick="window.open(this.href, this.target, 'width=auto,height=auto'); return false;">ver más</a></td>
                    </tr>
                </tbody>
            </table>
        <br>

        <!--Talleres-->
        <h2>Talleres</h2>
            <table id="tabla-taller" class="table table-hover">
                <thead>
                    <tr> <!--Renglones-->
                        <th>Nombre</th><!--Colunas-->
                        <th>Ubicación</th>
                        <th>Horario</th>
                        <th>Créditos</th>
                        <th>Detalles</th
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Cómo hacer ecoladrillos</td>
                        <td>Koyotlán 291</td>
                        <td>8:00 am</td>
                        <td>5 eco-bonos</td>
                        <td>
                            <a href="#modal1">Ver más</a>
                            <!-- <input onclick="cargado();" type="button" value="Ver más" class="btn" data-type="zoomin"/> -->
                        </td>
                    </tr>
                    <tr>
                        <td>Data 1</td>
                        <td>Data 2</td>
                        <td>Data 3</td>
                        <td>Data 4</td>
                        <td>
                            <a href="#modal1">Ver más</a>
                            <!-- <input onclick="cargado();" type="button" value="Ver más" class="btn" data-type="zoomin"/> -->
                        </td>
                    </tr>
                </tbody>
            </table>
        <br>

        <!--Eco-tecnias-->
        <h2>Eco-técnias</h2>
            <table id="tabla-ecotecnias" class="table table-hover">
                <thead>
                    <tr> <!--Renglones-->
                        <th>Nombre</th><!--Colunas-->
                        <th>Ubicación</th>
                        <th>Horario</th>
                        <th>Créditos</th>
                        <th>Detalles</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Recolección de basura</td>
                        <td>Koyotlán 291</td>
                        <td>8:00 am</td>
                        <td>5 eco-bonos</td>
                        <td><a href="detalle_actividades.php" target="_blank" onClick="window.open(this.href, this.target, 'width=auto,height=auto'); return false;">ver más</a></td>
                    </tr>
                    <tr>
                        <td>Data 1</td>
                        <td>Data 2</td>
                        <td>Data 3</td>
                        <td>Data 4</td>
                        <td><a href="detalle_actividades.php" target="_blank" onClick="window.open(this.href, this.target, 'width=auto,height=auto'); return false;">ver más</a></td>
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
