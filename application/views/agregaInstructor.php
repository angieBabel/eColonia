<?php
  include_once "/mUsuario.php";
?>

<section class="content" id="contenido">
  <div class="container-fluid">
    <div class="row" id="r1">
      <h1 class="r1">Instructores</h1>
    </div>
    <div class="row" id="r2">
      <div class="col-lg-1"></div>
      <div class="col-lg-10">
        <h2>Agregar Instructores/Profesores</h2>
        <table class="table table-hover">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Profesión</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <form action="index.php/uploader/altaInstructor" method="POST">
              <th>
                <div class="col-lg-10">
                  <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Nombre">
                </div>
              </th>
              <th>
                <div class="col-lg-10">
                  <input class="form-control" type="text" name="profesion" id="profesion" placeholder="Profesión">
                </div>
              </th>
              <th>
                <button type="submit" onclick="mensaje();" class="btn btn-success"><i class="fa fa-plus"></i></button>
              </th>
            </form>

          </tr>

          <tr>
           <form action="index.php/uploader/altaInstructor" method="POST">
              <th>
                <div class="col-lg-10">
                  <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Nombre ">
                </div>
              </th>
              <th>
                <div class="col-lg-10">
                  <input class="form-control" type="text" name="profesion" name="profesion" placeholder="Profesión">
                </div>
              </th>
              <th>
                <button type="submit" onclick="mensaje();" class="btn btn-success"><i class="fa fa-plus"></i></button>
              </th>
            </form>
          </tr>

          <tr>
            <form action="index.php/uploader/altaInstructor" method="POST">
              <th>
                <div class="col-lg-10">
                  <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Nombre ">
                </div>
              </th>
              <th>
                <div class="col-lg-10">
                  <input class="form-control" type="text"  name="profesion" id="profeion" placeholder="Profesión">
                </div>
              </th>
              <th>
                <button type="submit" onclick="mensaje();" class="btn btn-success"><i class="fa fa-plus"></i></button>
              </th>
            </form>
          </tr>

          <tr>
            <form action="index.php/uploader/altaInstructor" method="POST">
              <th>
                <div class="col-lg-10">
                  <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Nombre ">
                </div>
              </th>
              <th>
                <div class="col-lg-10">
                  <input class="form-control" type="text" name="profesion" id="profesion" placeholder="Profesión">
                </div>
              </th>
              <th>
                <button type="submit" onclick="mensaje();" class="btn btn-success"><i class="fa fa-plus"></i></button>
              </th>
            </form>
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
