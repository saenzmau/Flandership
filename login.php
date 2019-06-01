<!DOCTYPE html>
<!--
Template Name: Carinary
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html lang="es">
<head>
  <title>Flandership</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
  <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body id="top">


<?php include 'header.php'; ?>
<div class="container">
  <form action="processLogin.php" method="POST">
    <div class="form-group">
      <label for="EmailLogin">Correo Electrónico</label>
      <input required type="email" class="form-control" id="EmailLogin" name="EmailLogin" aria-describedby="emailHelp" placeholder="Pon tu email">
      <small id="emailHelp" class="form-text text-muted">Nunca compartiremos tu email con nadie más.</small>
    </div>
    <div class="form-group">
      <label for="PasswordLogin">Contraseña</label>
      <input required type="password" class="form-control" id="PasswordLogin" name="PasswordLogin" placeholder="Pon tu contraseña">
    </div>
    <button type="submit" name ="Login" class="btn btn-secondary" style="text-transform: capitalize">Entrar</button>
  </form>
  
    <br>
   <?php
    if(isset($_GET['err']))
    {
      echo '<div class="alert alert-danger" role="alert">
            Error al identificarse</div>';
    }
  ?>


</div>



<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/jquery.flexslider-min.js"></script>
</body>
</html>