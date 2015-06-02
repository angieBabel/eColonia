<?php
  include_once "/mUsuario.php";
?>

<section>
  <table align="center">
    <tr>
      <td>
        <section>
          <h1 align="center">Mapa de ecotécnias</h1>
          <hr color="blue" size=3 width="auto">
            <table border="1" id="tabla-taller" class="" style="width:400px;height:auto;" align="center">
              <thead>
                <tr> <!--Renglones-->
                    <th colspan="8" align="center"><img src="img/batlike.jpg"  alt="" width="50" height="50">Cocina japonesa</th>
                </tr>
              </thead>
              <tbody>
               <tr>
                <td></td>
                <td><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, voluptatibus nisi mollitia, aspernatur nemo deleniti cupiditate harum ad nobis eaque pariatur. Quaerat commodi obcaecati quisquam, quia veritatis sequi tempore magnam.</p></td>
                <td>
                  <table>
                    <tr><button >Ubicación</button></tr>
                    <tr><button >Agenda</button></tr>
                    <tr><button >Cómo usar</button></tr>
                  </table>
                </td>
               </tr>
              </tbody>
            </table>
          <hr color="blue" size=3 width="auto">
            <table id="tabla-taller" class="easyui-datagrid" style="width:400px;height:auto;" align="center">
              <thead>
                <tr> <!--Renglones-->
                    <th></th>
                    <th colspan="6">Eco-Ladrillos</th>
                </tr>
              </thead>
              <tbody>
               <tr>
                <td ><img src="img/batlike.jpg"  alt="" width="100" height="100">
                </td>
                <td><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, voluptatibus nisi mollitia, aspernatur nemo deleniti cupiditate harum ad nobis eaque pariatur. Quaerat commodi obcaecati quisquam, quia veritatis sequi tempore magnam.</p>
                </td>
                <td>
                  <table>
                    <tr><input type="button"value="Ubicación" class="boton"></tr>
                    <tr><input type="button"value="Agenda "class="boton"></tr>
                    <tr><button class="boton">Cómo usar</button></tr>
                  </table>
                </td>
               </tr>
             </tbody>
            </table>
          <hr color="blue" size=3 width="auto">
            <table border="1" id="tabla-taller" class="easyui-datagrid" style="width:400px;height:auto;" align="center">
              <thead>
                <tr> <!--Renglones-->
                  <th colspan="6">Camas de cultivo</th>
                </tr>
              </thead>
              <tbody>
                 <tr>
                    <td ><img src="img/batlike.jpg"  alt="" width="50" height="50">
                    </td>
                    <td><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, voluptatibus nisi mollitia, aspernatur nemo deleniti cupiditate harum ad nobis eaque pariatur. Quaerat commodi obcaecati quisquam, quia veritatis sequi tempore magnam.</p></td>
                    <td>
                      <table>
                        <tr><button size="auto">Ubicación</button></tr>
                        <tr><button size="auto">Agenda</button></tr>
                        <tr><button size="">Cómo usar</button></tr>
                      </table>
                    </td>
                  </tr>
              </tbody>
            </table>
        </section>
      </td>
      <td padding-left="10px">
        <section align="right" inline>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.432986595572!2d-103.72417700000001!3d19.263528000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x84255aca2f63ad7b%3A0x1eb2855b1222447e!2sInstituto+Tecnol%C3%B3gico+de+Colima%2C+Sal%C3%B3n+de+La+Paz!5e0!3m2!1ses-419!2smx!4v1432270882803" width="500" height="500" frameborder="0" style="border:0"></iframe>
        </section>
      </td>
    </tr>
  </table>
</section>

<?php
    include_once "/Sections/footer.php";
?>
