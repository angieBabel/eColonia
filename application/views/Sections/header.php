<!DOCTYPE html>
<html>
  <head>
    <base href="<?php echo base_url();?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- FontAwesome 4.3.0 -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
<!--     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" /> -->
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- Fuente Open Source -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800,300italic,400italic,600italic,700italic,800italic' rel='stylesheet' type='text/css'>
    <!-- Estilos-->
    <link rel="stylesheet" href="css/style.css">

    <script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
<script>
    webshims.setOptions('forms-ext', {types: 'date'});
webshims.polyfill('forms forms-ext');
</script>
  <script type="text/javascript" src="js/Chart.min.js"></script><!-- Archivos de javascript para los charts -->
  <script type="text/javascript" src="js/Chart.js"></script><!-- Archivos de javascript para los charts -->

  </head>
  <body>
    <div class="wrapper">

      <header class="main-header" >
        <!-- Logo -->
        <a href="index.php" class="logo"><img src="img/logo.png" alt="" height="70px" width="auto"></a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button" id="menUsuario">

          </a>

          <!-- Barra de navegacion -->
          <div class=" collapse navbar-collapse Modulos">
            <ul class="nav navbar-nav ">
              <li id="lista1"><a href="#">Conócenos </a></li>
              <li id="lista2"><a href="#">Estructural </a></li>
              <li id="lista3"><a href="#">Gestión </a></li>
              <li id="lista4"><a href="index.php/welcome/ambiental">Ambiental </a></li>
              <li id="lista5"><a href="#">Salud </a></li>
              <li id="lista6"><a href="#">Servicios </a></li>
              <li id="lista7"><a href="#">Ayuda </a></li>
            </ul>
            <?php  session_start(); ?>
            <?php if (!isSet($_SESSION['logueado'])) { ?>
              <div class="navbar-custom-menu">
                  <ul class="nav navbar-nav">
                    <!-- Notificacion de actividades-->
                    <li class="dropdown messages-menu">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-success">4</span>
                      </a>
                    </li>
                    <!-- Cerrar Sesion -->
                    <li class="dropdown tasks-menu">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-sign-out fa-lg"></i>
                      </a>
                    </li>
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="img/avatar5.png" class="user-image" alt="User Image"/>
                        <span class="hidden-xs"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                          <img src="img/avatar5.png" class="img-circle" alt="User Image" />
                          <p>
                            Alexander Pierce - Web Developer
                            <small>Member since Nov. 2012</small>
                          </p>
                        </li>
                        <!-- Menu Body -->
                          <li class="user-body">
                            <div class="col-xs-6 text-center" style="text-aligin:center">
                              <a href="#">Gestión</a>
                            </div>
                            <div class="col-xs-6 text-center" style="text-aligin:center">
                              <a href="index.php/welcome/ambiental">Ambiental</a>
                            </div>
                          </li>

                        <!-- Menu Footer-->
                        <li class="user-footer">
                          <div class="pull-left">
                            <a href="#"  data-toggle="offcanvas" class="btn btn-default btn-flat ">Perfil</a>
                          </div>
                          <div class="pull-right">
                            <a href="index.php/welcome/log_out" class="btn btn-default btn-flat">Sign out</a>
                          </div>
                        </li>
                      </ul>
                    </li>
                  </ul>
              </div>
            <?php } else{ ?>
               <ul class="nav navbar-nav navbar-right" id="prueba" >
                  <li><a href="#" class="">Registrarse</a></li><!-- class="glyphicon glyphicon-user" -->
                  <li><a href="index.php/welcome/login"><i class="fa fa-sign-in fa-lg"></i></a></li>
                </ul>
            <?php } ?>
          </div>
        </nav>




      </header>

