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

  <?php
    if(isset($_GET['err']))
    {
      echo '<div class="alert alert-warning" role="alert">
      El correo electrónico puesto ya está inscrito. Favor de verificarlo</div>';
    }
  ?>
  <form method="POST" action="processRegistro.php">

    <div class="form-group">
      <label for="NombreRegistro">Nombre: </label>
      <input  required type="text" class="form-control" id="NombreRegistro" name="NombreRegistro" placeholder="Pon tu Nombre">
      
    </div>
    <div class="form-group">
      <label for="ApellidoRegistro">Apellido:</label>
      <input  required type="text" class="form-control" id="ApellidoRegistro" name="ApellidoRegistro"  placeholder="Pon tu Apellido">
      
    </div>
    <div class="form-group">
      <label for="EmailRegistro">Correo Electrónico:</label>
      <input  required type="email" class="form-control" id="EmailRegistro" name="EmailRegistro" aria-describedby="emailHelp" placeholder="Pon tu email">
      
    </div>
    <div class="form-group">
      <label for="ContrasenaRegistro">Contraseña:</label>
      <input required type="password" class="form-control" id="ContrasenaRegistro" name="ContrasenaRegistro" placeholder="Pon tu contraseña" onkeyup="check();">
    </div>
    <div class="form-group">
      <label for="ConfirmaContrasenaRegistro"> Confirma Contraseña:</label>
      <input required type="password" class="form-control" id="ConfirmaContrasenaRegistro" name="ConfirmaContrasenaRegistro" placeholder="Confirma tu contraseña" onkeyup="check();">
      <span id='mensajeRegistro'></span>
    </div>
    <button id='Button' name="Registro" type="submit" class="btn btn-secondary" style="text-transform: capitalize">Registrarse</button>

  </form>
</div>

<script>
var check = function() {
  if (document.getElementById('ContrasenaRegistro').value ==
    document.getElementById('ConfirmaContrasenaRegistro').value) {
    document.getElementById('mensajeRegistro').style.color = 'green';
    document.getElementById('mensajeRegistro').innerHTML = 'Las contraseñas SI coincoden';
    document.getElementById("Button").disabled = false;
  } else {
    document.getElementById('mensajeRegistro').style.color = 'red';
    document.getElementById('mensajeRegistro').innerHTML = 'Las contraseñas NO coinciden';
    document.getElementById("Button").disabled = true;
  }
}
</script>

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/jquery.flexslider-min.js"></script>
</body>
</html>