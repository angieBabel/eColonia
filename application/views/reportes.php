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
        <h2 class="tituloTabla" id="per">Periodo</h2>
        <p ></p>
            <table id="tabla-evento" class="table table-hover">
                <thead>
                    <tr><!--Renglones-->
                        <th >Fecha</th><!--Colunas-->
                        <th >Material</th>
                        <th >Cantidad</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
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
