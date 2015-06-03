<?php
  include_once "/mUsuario.php";
?>

<section class="content" id="contenido">
  <div class="container-fluid">
    <div class="row" id="r1">
      <h1 class="r1">Catergorizacion de Residuos Solidos Urbanos</h1>
    </div>
    <div class="row" id="r2">
      <div class="col-lg-2"></div>
      <div class="col-lg-8">
        <h2>ECotecnias</h2>
        <table class="table table-hover">
        <thead>
          <tr>
            <th>Categoría</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>
              <input class="form-control" type="text" placehoder="Nombre Categoria">
            </th>
            <th>
              <a href=""><i class="fa fa-plus-square"></i></a>
            </th>
          </tr>
          <tr>
            <th>
              <input class="form-control" type="text" placehoder="Nombre Categoria">
            </th>
            <th>
              <a href=""><i class="fa fa-plus-square"></i></a>
            </th>
          </tr>
          <tr>
            <th>
              <input class="form-control" type="text" placehoder="Nombre Categoria">
            </th>
            <th>
              <a href=""><i class="fa fa-plus-square"></i></a>
            </th>
          </tr>
        </tbody>
        </table>
      </div>
      <div class="col-lg-2"></div>
    </div>
  </div>
</section>

<?php
    include_once "/Sections/footer.php";
?>
