<?php
  include_once "/mUsuario.php";
?>

<section class="content" id="contenido">

    <div id="modal1" class="modalmask">
      <div class="modalbox movedown">
        <a href="#close" title="Close" class="close">X</a>
        <?php include_once 'generar_reporte.php' ?>
      </div>
    </div>

  <section>
    <div>

      <?php foreach ($datos_actuales as $datos_actualess) {
        # code...
      } ?>
      <h1 id="" align="center">Reporte de residuos <?php echo $datos_actualess  ['periodo'] ?></h1>
      <div id="canvas-holder" align="center">
        <canvas id="actuales" width="300" height="300"></canvas>
        <a type="button" href="#modal1">Generar reporte</a>
      </div>
      <div align="left">
        <h1 align="left">Historial</h1>
        <canvas id="historial" width="300" height="300" style="width: 300px; height: 300px;"></canvas>
      </div>

    </div>

  </section>

  <script>


        var datosActuales =
        [
            <?php foreach ($datos_actuales as $datos_actualess) { ?>
              {value:<?php echo $datos_actualess['cantidad'] ?>,color:"#0b82FF",highlight: "#0c62ab",label: "'<?php echo $datos_actualess['Catalogo-residuos_idResiduo'] ?>'"},
           <?php } ?>
        ];

        var datosHistoriales =
        {
          labels: ["January", "February", "March", "April", "May", "June", "ARROBA"],
          datasets: [
              {
                  label: "My First dataset",
                  fillColor: "green",
                  strokeColor: "rgba(220,220,220,1)",
                  pointColor: "rgba(220,220,220,1)",
                  pointStrokeColor: "#fff",
                  pointHighlightFill: "#fff",
                  pointHighlightStroke: "rgba(220,220,220,1)",
                  data: [86, 59, 55, 81, 67, 55, 40]
              },
              {
                  label: "My Second dataset",
                  fillColor: "rgba(151,187,205,0.2)",
                  strokeColor: "rgba(151,187,205,1)",
                  pointColor: "rgba(151,187,205,1)",
                  pointStrokeColor: "#fff",
                  pointHighlightFill: "#fff",
                  pointHighlightStroke: "rgba(151,187,205,1)",
                  data: [40, 48, 40, 19, 55, 27, 86]
              },
              {
                  label: "My Second dataset",
                  fillColor: "red",
                  strokeColor: "rgba(151,187,205,1)",
                  pointColor: "rgba(151,187,205,1)",
                  pointStrokeColor: "#fff",
                  pointHighlightFill: "#fff",
                  pointHighlightStroke: "rgba(151,187,205,1)",
                  data: [60, 55, 40, 67, 86, 27, 90]
              }
          ]
        }

        var ctx = document.getElementById("actuales").getContext("2d");
        var ctx2 = document.getElementById("historial").getContext("2d");
        window.myPie = new Chart(ctx).Pie(datosActuales);
        window.myPie = new Chart(ctx2).Bar(datosHistoriales);
  </script>


</section>

<?php
    include_once "/Sections/footer.php";
?>

