<?php
  include_once "/mUsuario.php";
?>

<section class="content" id="contenido">
  <section>
    <div>

      <?php foreach ($datos_actuales as $datos_actualess) {
        # code...
      } ?>
      <h1 id="" align="center">Reporte de residuos <?php echo $datos_actualess  ['periodo'] ?></h1>
      <div id="canvas-holder" align="center">
        <canvas id="actuales" width="300" height="300"></canvas>
        <a type="button" href="index.php/welcome/ambgeneraReportes">Ver historial de reportes</a>

      </div>

    </div>

  </section>

  <script>


        var datosActuales =
        [
            <?php foreach ($datos_actuales as $datos_actualess) { ?>
              {value:<?php echo $datos_actualess['cantidad'] ?>,color:"#0b82FF",highlight: "#0c62ab",label: "'<?php echo $datos_actualess['nombre'] ?>'"},
           <?php } ?>
        ];



        var ctx = document.getElementById("actuales").getContext("2d");

        window.myPie = new Chart(ctx).Pie(datosActuales);

  </script>


</section>

<?php
    include_once "/Sections/footer.php";
?>

