<?php
  include_once "/mUsuario.php";
?>

<section class="content" id="contenido">
  <div class="container-fluid">
    <div class="row" id="r1">
      <h1 class="r1">Catergorización de Residuos Solidos Urbanos</h1>
    </div>
    <div class="row" id="r2">
      <div class="col-lg-1"></div>
      <div class="col-lg-10">
        <h2>Agregar Categorias de Residuos Solidos Urbanos</h2>
        <table class="table table-hover">
        <thead>
          <tr>
            <th>Categoría</th>
            <th>Descripcion</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <form action="index.php/uploader/altaNuevoResiduo" method="POST">
              <th>
                <div class="col-lg-10">
                  <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Nombre Categoria">
                </div>
              </th>
              <th>
                <div class="col-lg-10">
                  <input class="form-control" type="text" id="descripcion" name="descripcion" placeholder="Descripción de la Categoria">
                </div>
              </th>
              <th>
                <button type="submit" onclick="mensaje2();"  class="btn btn-success"><i class="fa fa-plus"></i></button>
              </th>
            </form>

          </tr>

<!--           <tr>
  <form action="">
    <th>
      <div class="col-lg-10">
        <input class="form-control" type="text" placeholder="Nombre Categoria">
      </div>
    </th>
    <th>
      <div class="col-lg-10">
        <input class="form-control" type="text" placeholder="Descripción de la Categoria">
      </div>
    </th>
    <th>
      <button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button>
    </th>
  </form>
</tr>

<tr>
  <form action="">
    <th>
      <div class="col-lg-10">
        <input class="form-control" type="text" placeholder="Nombre Categoria">
      </div>
    </th>
    <th>
      <div class="col-lg-10">
        <input class="form-control" type="text" placeholder="Descripción de la Categoria">
      </div>
    </th>
    <th>
      <button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button>
    </th>
  </form>
</tr>

<tr>
  <form action="">
    <th>
      <div class="col-lg-10">
        <input class="form-control" type="text" placeholder="Nombre Categoria">
      </div>
    </th>
    <th>
      <div class="col-lg-10">
        <input class="form-control" type="text" placeholder="Descripción de la Categoria">
      </div>
    </th>
    <th>
      <button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button>
    </th>
  </form>
</tr> -->
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
