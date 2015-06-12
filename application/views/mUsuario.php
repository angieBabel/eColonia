<?php
  include_once "/Sections/header.php";
?>
  <!-- Usurio Externo-->
  <?php if (1==1) { ?>

      <aside class="main-sidebar">
        <section class="sidebar">

          <!-- InformacioUsuario -->
          <div class="user-panel">
            <!-- FotoUsuario -->
            <div class="pull-center">
              <img src="img/avatar5.png" class="img-circle imInicial" alt="User Image" />
            </div>
            <!-- NombreUsuario -->
            <div class="pull-center info">
              <p>Usuario</p>
              <!-- EstadoUsuario -->
              <a href="#"><i class="fa fa-circle "></i> Offline</a>
            </div>
          </div>
          <!-- sidebar menu -->

          <!-- Link menu -->
          <ul class="sidebar-menu">
          <!--Estructural -->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-child"></i><span>Estructural</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="agenda_actividades.php"><i class="fa fa-circle-o"></i>Colonia</a></li>
                <li><a href="agenda_actividades.php"><i class="fa fa-circle-o"></i> Quienes somos</a></li>
                <li><a href="agenda_actividades.php"><i class="fa fa-circle-o"></i>Lugar</a></li>
              </ul>
            </li>
            <!-- Gestion-->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-bullhorn"></i><span>Gestion</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="agenda_actividades.php"><i class="fa fa-circle-o"></i>¿Que hacemos?</a></li>
                <li><a href="agenda_actividades.php"><i class="fa fa-circle-o"></i>Información</a></li>
                <li><a href="agenda_actividades.php"><i class="fa fa-circle-o"></i>Denuncias Atendidas</a></li>
              </ul>
            </li>
            <!--Ambiental-->
            <li class="treeview">
              <a href="index.php/welcome/ambiental">
                <i class="fa fa-pagelines"></i> <span>Ambiental</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="index.php/welcome/ambActividades"><i class="fa fa-calendar"></i> Agenda de Actividades</a></li>
                <li><a href="index.php/welcome/ambResiduos"><i class="fa fa-pie-chart"></i>Residuos Sólidos</a></li>
                <li><a href="index.php/welcome/ambEcotecnias"><i class="fa fa-leaf"></i>Eco-técnias</a></li>
              </ul>
            </li>
            <!--Salud-->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-medkit"></i>
                <span>Salud</span>
                <span class="label label-primary pull-right">4</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/layout/top-nav.html"><i class="fa fa-heartbeat"></i>Campañas de vacunación</a></li>
                <li><a href="pages/layout/boxed.html"><i class="fa fa-user-md"></i>Brigadas</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-eye"></i>Salud visual</a></li>
                <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-stethoscope"></i>Talleres</a></li>
              </ul>
            </li>
            <!--Servicios -->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-tasks"></i><span>Servicios</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i>Emergencias</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i>Semarnat<i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
              </ul>
            </li>
            <li class="header"></li>
            <li><a href="#"><i class="fa fa-twitter-square"></i>Siguenos en Twitter</a></li>
            <li><a href="#"><i class="fa fa-facebook-square"></i>Buscanos en Facebook</a></li>
            <li><a href="#"><i class="fa fa-youtube"></i>Visita nuestro Canal</a></li>
          </ul>
        </section>

      </aside>

  <?php }?>
    <!-- Usurio Colono-->
    <?php if (2==0) { ?>
      <aside class="main-sidebar">
        <section class="sidebar">

          <!-- InformacioUsuario -->
          <div class="user-panel">
            <!-- FotoUsuario -->
            <div class="pull-center">
              <img src="img/avatar5.png" class="img-circle imInicial" alt="User Image" />
            </div>
            <!-- NombreUsuario -->
            <div class="pull-center info">
              <p>UserName</p>
              <!-- EstadoUsuario -->
              <a href="#"><i class="fa fa-circle text-success"></i> Colono</a>
            </div>
          </div>
          <!-- sidebar menu -->

          <!-- Link menu -->
          <ul class="sidebar-menu">
          <!--Perfil-->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-user"></i><span>Perfil</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="agenda_actividades.php"><i class="fa fa-list-ul"></i>Denuncias realizadas</a></li>
                <li><a href="agenda_actividades.php"><i class="fa fa-check-square-o"></i>Actividades que asistí</a></li>
                <li><a href="agenda_actividades.php"><i class="fa fa-list-alt"></i>Actividades que asisitiré</a></li>
                <li><a href="agenda_actividades.php"><i class="fa fa-trash-o"></i>Mis residuos Solidos</a></li>
              </ul>

          <!--Estructural -->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-child"></i><span>Estructural</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="agenda_actividades.php"><i class="fa fa-circle-o"></i>Colonia</a></li>
                <li><a href="agenda_actividades.php"><i class="fa fa-circle-o"></i> Quienes somos</a></li>
                <li><a href="agenda_actividades.php"><i class="fa fa-circle-o"></i>Lugar</a></li>
              </ul>
            </li>
            <!-- Gestion-->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-bullhorn"></i><span>Gestion</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="agenda_actividades.php"><i class="fa fa-circle-o"></i>¿Que hacemos?</a></li>
                <li><a href="agenda_actividades.php"><i class="fa fa-circle-o"></i>Información</a></li>
                <li><a href="agenda_actividades.php"><i class="fa fa-circle-o"></i>Denuncias Atendidas</a></li>
              </ul>
            </li>
            <!--Ambiental-->
            <li class="treeview">
              <a href="index.php/welcome/ambiental">
                <i class="fa fa-pagelines"></i> <span>Ambiental</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="index.php/welcome/ambActividades"><i class="fa fa-calendar"></i> Agenda de Actividades</a></li>
                <li><a href="index.php/welcome/ambResiduos"><i class="fa fa-pie-chart"></i>Residuos Sólidos</a></li>
                <li><a href="index.php/welcome/ambEcotecnias"><i class="fa fa-leaf"></i>Eco-técnias</a></li>
              </ul>
            </li>
            <!--Salud-->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-medkit"></i>
                <span>Salud</span>
                <span class="label label-primary pull-right">4</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/layout/top-nav.html"><i class="fa fa-heartbeat"></i>Campañas de vacunación</a></li>
                <li><a href="pages/layout/boxed.html"><i class="fa fa-user-md"></i>Brigadas</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-eye"></i>Salud visual</a></li>
                <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-stethoscope"></i>Talleres</a></li>
              </ul>
            </li>
            <!--Servicios -->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-tasks"></i><span>Servicios</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i>Emergencias</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i>Semarnat<i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
              </ul>
            </li>
            <li class="header"></li>
            <li><a href="#"><i class="fa fa-twitter-square"></i>Siguenos en Twitter</a></li>
            <li><a href="#"><i class="fa fa-facebook-square"></i>Buscanos en Facebook</a></li>
            <li><a href="#"><i class="fa fa-youtube"></i>Visita nuestro Canal</a></li>
          </ul>
        </section>

      </aside>

  <?php }?>
  <!-- Administrador -->
 <?php if (3==0) { ?>
      <aside class="main-sidebar">
        <section class="sidebar">

          <!-- InformacioUsuario -->
          <div class="user-panel">
            <!-- FotoUsuario -->
            <div class="pull-center">
              <img src="img/avatar5.png" class="img-circle imInicial" alt="User Image" />
            </div>
            <!-- NombreUsuario -->
            <div class="pull-center info">
              <p>UserName</p>
              <!-- EstadoUsuario -->
              <a href="#"><i class="fa fa-circle text-success"></i> Administrador</a>
            </div>
          </div>
          <!-- sidebar menu -->

          <!-- Link menu -->
          <ul class="sidebar-menu">
          <!--Perfil-->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-user-plus"></i><span>Perfil</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="agenda_actividades.php"><i class="fa fa-list-ul"></i>Denuncias realizadas</a></li>
                <li><a href="agenda_actividades.php"><i class="fa fa-check-square-o"></i>Actividades que asistí</a></li>
                <li><a href="agenda_actividades.php"><i class="fa fa-list-alt"></i>Actividades que asisitiré</a></li>
                <li><a href="agenda_actividades.php"><i class="fa fa-trash-o"></i>Mis residuos Solidos</a></li>
              </ul>

          <!--Estructural -->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-child"></i><span>Estructural</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="agenda_actividades.php"><i class="fa fa-circle-o"></i>Colonia</a></li>
                <li><a href="agenda_actividades.php"><i class="fa fa-circle-o"></i> Quienes somos</a></li>
                <li><a href="agenda_actividades.php"><i class="fa fa-circle-o"></i>Lugar</a></li>
              </ul>
            </li>
            <!-- Gestion-->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-bullhorn"></i><span>Gestion</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="agenda_actividades.php"><i class="fa fa-circle-o"></i>¿Que hacemos?</a></li>
                <li><a href="agenda_actividades.php"><i class="fa fa-circle-o"></i>Información</a></li>
                <li><a href="agenda_actividades.php"><i class="fa fa-circle-o"></i>Denuncias Atendidas</a></li>
              </ul>
            </li>
            <!--Ambiental-->
            <li class="treeview">
              <a href="index.php/welcome/ambiental">
                <i class="fa fa-pagelines"></i> <span>Ambiental</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="index.php/welcome/ambActividades"><i class="fa fa-calendar"></i> Agenda de Actividades</a></li>
                <li><a href="index.php/welcome/ambResiduos"><i class="fa fa-pie-chart"></i>Residuos Sólidos</a></li>
                <li><a href="index.php/welcome/ambEcotecnias"><i class="fa fa-leaf"></i>Eco-técnias</a></li>
                <li>
                  <a href="#"><i class="fa fa-cogs"></i>Administrar<i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li>
                      <a href=""><i class="fa fa-plus-square"></i>Agregar Actividades</a>
                        <ul class="treeview-menu">
                          <li><a href="index.php/welcome/ambAgregaEvento"><i class="fa fa-thumb-tack"></i>Evento</a></li>
                          <li><a href="index.php/welcome/ambAgregaTaller"><i class="fa fa-plus"></i>Taller</a></li>
                          <li><a href="index.php/welcome/ambAgregarActEcotecnia"><i class="fa fa-leaf"></i>Talleres en ecotécnias</a></li>
                        </ul>
                    </li>
                    <li><a href="index.php/welcome/ambInstructor"><i class="fa fa-male"></i>Agregar Instructor</a></li>
                    <li><a href="index.php/welcome/ambfinalizarActividad"><i class="fa fa-check"></i>Estatus de actividades</a></li>
                    <li><a href="index.php/welcome/ambactualizarActividad"><i class="fa fa-pencil-square-o"></i>Editar/Eliminar Actividades</a></li>
                    <li><a href="index.php/welcome/ambactualizarTaller"><i class="fa fa-pencil-square-o"></i>Editar/Eliminar Talleres</a></li>
                    <li><a href="index.php/welcome/ambAgregarCategoria"><i class="fa fa-plus-square"></i>Agregar categoria de residuos solidos urbanos</a></li>
                    <li><a href="index.php/welcome/ambDatosRs"><i class="fa fa-upload"></i>Agregar datos de residuos solidos urbanos</a></li>
                    <li><a href="index.php/welcome/ambgeneraReportes"><i class="fa fa-file-text"></i>Reporte de residuos solidos urbanos</a></li>
                    <li><a href="index.php/welcome/ambAgregarEcotecnia"><i class="fa fa-plus-square"></i>Agregar ecotecnias</a></li>
                    <li><a href="index.php/welcome/ambactualizarEcotecnia"><i class="fa fa-pencil-square-o"></i>Editar/Eliminar ecotecnias</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <!--Salud-->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-medkit"></i>
                <span>Salud</span>
                <span class="label label-primary pull-right">4</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/layout/top-nav.html"><i class="fa fa-heartbeat"></i>Campañas de vacunación</a></li>
                <li><a href="pages/layout/boxed.html"><i class="fa fa-user-md"></i>Brigadas</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-eye"></i>Salud visual</a></li>
                <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-stethoscope"></i>Talleres</a></li>
              </ul>
            </li>
            <!--Servicios -->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-tasks"></i><span>Servicios</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i>Emergencias</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i>Semarnat<i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
              </ul>
            </li>
            <li class="header"></li>
            <li><a href="#"><i class="fa fa-twitter-square"></i>Siguenos en Twitter</a></li>
            <li><a href="#"><i class="fa fa-facebook-square"></i>Buscanos en Facebook</a></li>
            <li><a href="#"><i class="fa fa-youtube"></i>Visita nuestro Canal</a></li>
          </ul>
        </section>

      </aside>
  <?php } ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
