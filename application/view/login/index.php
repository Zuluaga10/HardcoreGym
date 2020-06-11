<!DOCTYPE html>
<html lang="en" style="height: 100%">
  
<!-- Mirrored from lethemes.net/umega/1.6/first-layout/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Nov 2017 14:09:19 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HardCore Gym</title>
    <!-- PACE-->
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>plugins/PACE/themes/blue/pace-theme-flash.css">
    <script type="text/javascript" src="<?php echo URL; ?>plugins/PACE/pace.min.js"></script>
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>plugins/bootstrap/dist/css/bootstrap.min.css">
    <!-- Fonts-->
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>plugins/themify-icons/themify-icons.css">
    <!-- Primary Style-->
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>build/css/first-layout.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!-- WARNING: Respond.js doesn't work if you view the page via file://--> 
    <!--[if lt IE 9]>
    <script type="text/javascript" src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script type="text/javascript" src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background-image: url(<?php echo URL; ?>build/images/backgrounds/img71.jpg)" class="body-bg-full">
    <div class="container page-container">
      <div class="page-content">
        <div class="logo"><img src="<?php echo URL; ?>build/images/logo/hombre-de-negocios.png" alt="" width="80"></div>
        <form method="POST" action="<?php echo URL; ?>Login/logueo" class="form-horizontal">
          <div class="form-group">
            <div class="col-xs-12">
              <input id="correo" type="text" required placeholder="Correo" name="correo" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <div class="col-xs-12">
              <input id="pass" type="password" required placeholder="Contraseña" name="clave" class="form-control">
            </div>
          </div>
          <button type="submit" name="login" id="login" onclick="alertaLogin()" class="btn-lg btn btn-danger btn-rounded btn-block">Inicio</button>
        </form>
      </div>
    </div>
    
    <!-- jQuery-->
    <script type="text/javascript" src="<?php echo URL; ?>plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap JavaScript-->
    <script type="text/javascript" src="<?php echo URL; ?>plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Custom JS-->
    <script type="text/javascript" src="<?php echo URL; ?>build/js/first-layout/extra-demo.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>js/alertas.js"></script>
  </body>

<!-- Mirrored from lethemes.net/umega/1.6/first-layout/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Nov 2017 14:09:19 GMT -->
</html>