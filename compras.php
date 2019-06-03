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
<body style="background-color: #FBFBFF;">


<?php include 'header.php'; ?>



<div class="container">

<?php
if(isset($_GET['success']))
{
  echo'<div class="alert alert-success" role="alert">Compra exitosa!</div>';
}


if(isset($_SESSION['Nombre']))
{
  $idUsuario = $_SESSION['idUsuario'];
  $Nombre = $_SESSION['Nombre'];
  $Apellido = $_SESSION['Apellido'];
  $Email = $_SESSION['Email'];

  $conn = mysqli_connect("localhost", "root", "", "flandership");
  $sql = "SELECT idOrden FROM ordenes WHERE idUsuario='$idUsuario' AND Registrado=0 LIMIT 1";
  $results = mysqli_query($conn, $sql);

  if(mysqli_num_rows($results) == 1)
  {

    echo '<div class="row">';
    echo '<h2>Órdenes pendientes</h2>'; 
      echo '<div class="col-xs-2"><h4># Orden</h4></div>';
      echo '<div class="col-xs-10">';
        echo '<div class="row">';
            echo'<div class="col-xs-2"><h4>idProducto</h4></div>';
            echo'<div class="col-xs-2"><h4>Nombre</h4></div>';
            echo'<div class="col-xs-2"><h4>Precio</h4></div>';
            echo'<div class="col-xs-2"><h4>Categoría</h4></div>';
            echo'<div class="col-xs-2"><h4>Cantidad</h4></div>';
            echo'<div class="col-xs-2"><h4>Subtotal</h4></div>';
        echo '</div>';
     echo '</div>';
    echo '</div>';
      
      $totalPendiente=0;
      $row=mysqli_fetch_row($results);
      
      $sql2 = "SELECT A.idOrden, A.idProducto, B.Nombre, B.PrecioMenudeo, C.Nombre, A.Cantidad, (A.Cantidad * B.PrecioMenudeo) as Subtotal
      FROM ordenitems A, productos B, categorias C, usuarios D, ordenes E 
      WHERE A.idProducto = B.idProducto AND B.idCategoria = C.idCategoria AND D.idUsuario = E.idUsuario
      AND E.Registrado = 0 AND E.idUsuario = '$idUsuario' AND E.idOrden='$row[0]'";
      
      $results2 = mysqli_query($conn, $sql2);

      echo '<div class="row">';
      echo '<div class="col-xs-2"><p>'.$row[0].'</p></div>';
      echo '<div class="col-xs-10">';
      echo '<div class="row">'; 
      while($row2 = mysqli_fetch_row($results2))
      {
       
        echo'<div class="col-xs-2"><p>'.$row2[1].'</p></div>';
        echo'<div class="col-xs-2"><p>'.utf8_encode($row2[2]).'</p></div>';
        echo'<div class="col-xs-2"><p>$ '.number_format((float)$row2[3], 2, '.', '').'</p></div>';
        echo'<div class="col-xs-2"><p>'.utf8_encode($row2[4]) .'</p></div>';
        echo'<div class="col-xs-2"><p>'.$row2[5].'</p></div>';
        echo'<div class="col-xs-2"><p> $ '.number_format((float)$row2[6], 2, '.', '').'</p></div>';
        $totalPendiente = $totalPendiente + $row2[6];
      }
      echo '</div>';
      echo '</div>';
      echo '<div class="row">
                <div><h3>Total a Pagar: $ '  .number_format((float)$totalPendiente, 2, '.', '').'<h3>
                    <form action="processCompra.php" method="POST">
                      <input hidden name="idCompra" value="'.$row[0].'">
                      <input hidden   name="total" value="'.$totalPendiente.'">
                      <button type="submit" name ="Comprar" class="btn btn-success" style="text-transform: capitalize">Comprar todo</button>
                    </form>
                </div>'; 
      echo '</div>'; 
      echo '</div>';

      
  }
  else
  {
      echo '<h2>Por lo pronto no tienes compras pendientes. Revisa el catálogo para agregar productos a tu carrito.</h2>';
  }

  mysqli_close($conn);
}
else
{
  header('location: login.php');
}



?>  

</div>

<?php include_once ('footer.php'); ?>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/jquery.flexslider-min.js"></script>
</body>
</html>