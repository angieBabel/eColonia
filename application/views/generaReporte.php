<?php
  include_once "/mUsuario.php";
?>

<section class="content" id="contenido">
  <div class="container-fluid">
    <div class="row" id="r1"><h1 class="r1">Reportes de residuos Solidos Urbanos</h1></div>
    <div class="row" id="r2">
      <div class="col-lg-1"></div>
      <div class="col-lg-10">
      <br><br>
        <nav class="cl-effect-7" id="repo">
        <table class="tabla">
            <tr>
                <td><a href="index.php/welcome/ambReportes" onclick="periodo()">Enero</a></td>
                <td><a href="index.php/welcome/ambReportes">Febrero</a></td>
                <td><a href="index.php/welcome/ambReportes">Marzo</a></td>
                <td><a href="index.php/welcome/ambReportes">Abril</a></td>
            </tr>
            <tr>
                <td><a href="index.php/welcome/ambReportes">Mayo</a></td>
                <td><a href="index.php/welcome/ambReportes">Junio</a></td>
                <td><a href="index.php/welcome/ambReportes">Julio</a></td>
                <td><a href="index.php/welcome/ambReportes">Agosto</a></td>
            </tr>
            <tr>
                <td><a href="index.php/welcome/ambReportes">Septiembre</a></td>
                <td><a href="index.php/welcome/ambReportes">Octubre</a></td>
                <td><a href="index.php/welcome/ambReportes">Noviembre</a></td>
                <td><a href="index.php/welcome/ambReportes">Diciembre</a></td>
            </tr>
        </table>

        </nav>
      </div>
      <div class="col-lg-2"></div>
    </div>
  </div>
</section>

<?php
    include_once "/Sections/footer.php";
?>
