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
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
  <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body id="top" style="background-color: #FBFBFF;">
<?php include 'header.php'; ?>
<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <div class="form-group">
        <label for="sel1">Selecciona una categoría: </label>
          <select class="form-control" id="sel1">
            <option>Todos</option>
            <option>Tecnología</option>
            <option>Papelerría</option>
            <option>Cocina</option>
            <option>Juguetes</option>
            <option>Plásticos</option>
            <option>Limpieza</option>
          </select>
      </div>
    </div>

    <div class="col-sm-6">
      <label for="sel1">O busca el producto por su nombre: </label> 
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search" name="search">
          <div class="input-group-btn">
            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
          </div>
      </div>
    </div>
    <br>

    

  </div>

  <div class="row">
  <?php 
    
      $conn = mysqli_connect("localhost", "root", "", "flandership");

      $sql_p = "SELECT * FROM productos ";

      $res_productos = mysqli_query($conn, $sql_p);
      

      while($row = mysqli_fetch_row($res_productos))
      {
       
        echo'<div class="col-sm-3 col-xs-6">';
        echo'<a href="detalleProducto.php?productId='.$row[0].'">'; 
        echo'<img src="images/'.$row[3].'" style="width:150px;height:150px;" ></a>';
        echo'<br>';
        echo'<h3>$ '.number_format((float)$row[4], 2, '.', '').'</h3>';
        echo'<h4>'.utf8_encode($row[1]).'</h4>';
        echo'</div>';
      }

      mysqli_close($conn);
    
    
    ?>
  </div>
</div>

<?php include_once ('footer.php'); ?>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/jquery.flexslider-min.js"></script>
</body>
</html>