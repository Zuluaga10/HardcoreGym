 <!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from lethemes.net/umega/1.6/first-layout/forms-layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Nov 2017 14:08:48 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hardcore Gym</title>
    <!-- PACE-->
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>plugins/PACE/themes/blue/pace-theme-flash.css">
    <link rel="shortcut icon" href="<?php echo URL; ?>build/images/favicon" />
    <script type="text/javascript" src="<?php echo URL; ?>plugins/PACE/pace.min.js"></script>
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>plugins/bootstrap/dist/css/bootstrap.min.css">
    <!-- Fonts-->
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>plugins/themify-icons/themify-icons.css">
    <!-- Malihu Scrollbar-->
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>plugins/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css">
    <!-- Animo.js-->
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>plugins/animo.js/animate-animo.min.css">
    <!-- Flag Icons-->
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>plugins/flag-icon-css/css/flag-icon.min.css">
    <!-- Bootstrap Progressbar-->
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>plugins/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css">
    <!-- Primary Style-->
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>build/css/first-layout.css">

    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>plugins/sweetalert2/sweetalert2.min.css">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!-- WARNING: Respond.js doesn't work if you view the page via file://--> 
    <!--[if lt IE 9]>
    <script type="text/javascript" src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script type="text/javascript" src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body data-sidebar-color="sidebar-light" class="sidebar-light">
    <header style="background-color: #000000">
      <div class="search-bar closed">
        <form>
          <div class="input-group input-group-lg">
            <input type="text" placeholder="Buscar por..." class="form-control"><span class="input-group-btn">
              <button type="button" class="btn btn-default search-bar-toggle"><i class="ti-close"></i></button></span>
          </div>
        </form>
      </div><a href="<?php echo URL; ?>Clientes" class="brand pull-left"><img src="<?php echo URL; ?>build/images/logo/hardcore.jfif" width="150" height="64"></a><a href="javascript:;" role="button" class="hamburger-menu pull-left"><span></span></a>
      <form class="search-form pull-left hidden-xs">
        <div class="form-group has-feedback mb-0">
          </span><span id="inputSearchFor" class="sr-only">(default)</span>
        </div>
      </form>
      <ul class="notification-bar list-inline pull-right">
        <li class="visible-xs"><a href="javascript:;" role="button" class="header-icon search-bar-toggle"><i class="ti-search"></i></a></li>
        <li class="visible-lg"><a href="javascript:;" role="button" class="header-icon sidebar-control"><i class="ti-pin-alt"></i></a></li>
        
      
      </ul>
    </header>
    <!-- Header end-->
    <div class="main-container">
      <!-- Main Sidebar start-->
      <aside data-mcs-theme="minimal-dark" style="background-image: url(<?php echo URL; ?>build/images/backgrounds/105.jpg)" class="main-sidebar mCustomScrollbar">
        <ul class="list-unstyled navigation mb-0">
          <li class="sidebar-category">Menú</li>
          
          <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse8" aria-expanded="false" aria-controls="collapse8" class="collapsed"><i class="ti-location-arrow"></i><span class="sidebar-title">Clientes</span></a>
            <ul id="collapse8" class="list-unstyled collapse">
              <li><a href="<?php echo URL; ?>Clientes">Registrar Clientes</a></li>
              <li><a href="<?php echo URL; ?>Clientes/TablaClientes">Lista de clientes</a></li>              
            </ul>
          </li>

                    <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse5" aria-expanded="false" aria-controls="collapse5" class="collapsed"><i class="ti-location-arrow"></i><span class="sidebar-title">Empleados</span></a>
            <ul id="collapse5" class="list-unstyled collapse">
              <li><a href="<?php echo URL; ?>Empleados">Registrar Empleado</a></li>
              <li><a href="<?php echo URL; ?>Empleados/TablaEmpleados">Lista de empleados</a></li>
              
            </ul>
          </li>
            <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse7" aria-expanded="false" aria-controls="collapse7" class="collapsed"><i class="ti-ruler-pencil"></i><span class="sidebar-title">Ingresos</span></a>
            <ul id="collapse7" class="list-unstyled collapse">
              <li><a href="<?php echo URL; ?>Ingresos">Registrar ingreso</a></li>
              <li><a href="<?php echo URL; ?>Ingresos/TablaIngresos">Lista de ingresos</a></li>
              
            </ul>
          </li>

        <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse3" aria-expanded="false" aria-controls="collapse3" class="collapsed"><i class="ti-shopping-cart"></i><span class="sidebar-title">Egresos</span></a>
            <ul id="collapse3" class="list-unstyled collapse">
              <li><a href="<?php echo URL; ?>Gastos">Registrar egreso</a></li>
              <li><a href="<?php echo URL; ?>Gastos/TablaGastos">Lista de egresos</a></li>
            </ul>
          </li>


           <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse16" aria-expanded="false" aria-controls="collapse16" class="collapsed"><i class="ti-location-pin"></i><span class="sidebar-title">Nómina</span></a>
            <ul id="collapse16" class="list-unstyled collapse">
              <li><a href="<?php echo URL; ?>Nomina">Registrar pago a empleado</a></li>
              <li><a href="<?php echo URL; ?>Nomina/TablaNomina">Lista de nómina</a></li>
            </ul>
          </li>
           <BR><BR><BR><BR><BR><BR>

        
 
        
        </ul>
        
      </aside>
    </div>





      <!-- Main Sidebar end-->
      <div class="page-container">

        <div class="page-content container-fluid">
