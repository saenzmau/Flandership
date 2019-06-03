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
<body id="top">


<?php include 'header.php'; ?>



<?php



  if(isset($_GET['productId']))
  {

    $idProducto = $_GET['productId'];
    $conn = mysqli_connect("localhost", "root", "", "flandership");

    $sql_p = "SELECT * FROM productos A, categorias B WHERE idProducto ='$idProducto' AND A.idCategoria = B.idCategoria";

    $res_producto = mysqli_query($conn, $sql_p);

    $row = mysqli_fetch_row($res_producto);
?>

<div class="container">
  <div class="row">
    <div class="col-sm-6 col-xs-12">
      <img src=<?php echo '"images/'.$row[3].'"'; ?> style="width:300px;height:300px;">
    </div>
    <div class="col-sm-6 col-xs-12">
      <div class="row">
        <h1><?php echo  utf8_encode($row[1]); ?></h1>
        <h4>Categoría: <?php echo  utf8_encode($row[10]); ?></h4>
        <br>
        <p>Descripción: <?php echo  utf8_encode($row[2]); ?>.</p>
        <h3>Precio c/u: $ <?php echo'<span id="Precio">'.number_format((float)$row[4], 2, '.', '').'</span>';?></h3>
        
        <form action="processItem.php" method="POST">
        <input hidden id="idProducto" name="idProducto" value=<?php echo '"'. $row[0].'"'; ?> >
          <div class="row">
            <div class="form-group col-sm-6">
              <label for="Cantidad">Cantidad</label>
              <input oninput="calc()" required type="number" class="form-control" id="Cantidad" name="Cantidad" placeholder="Pon la cantidad que pedirás" value=1>
          
            </div>
            <div class="form-group col-sm-6">
            <br>
            <button type="submit" name ="Compra" class="btn btn-success" style="text-transform: capitalize">Poner en el carrito</button>
            </div>
          </div>

          <h2 id ="totalPagar">Total a Pagar: $ <?php echo  number_format((float)$row[4], 2, '.', ''); ?></h2>
        </form>
      </div>  
    </div>
  </div>
</div>


<?php
  }
  else
  {
?>
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-xs-12">

        <a href="catalogo.php" style="text-allign: center" >Da click aquí para ver productos</a>
        </div>
      </div>
    </div>
<?php
    
  }

?>

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>

<?php include_once ('footer.php'); ?>
<!-- JAVASCRIPTS -->

<script>
function calc() 
{
  var price = document.getElementById("Precio").innerHTML;
  var noTickets = document.getElementById("Cantidad").value;
  var total = parseFloat(price) * noTickets;
  if (!isNaN(total))
    document.getElementById("totalPagar").innerHTML = 'Total a Pagar: $ '+ parseFloat(Math.round(total * 100) / 100).toFixed(2);
}

</script>
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/jquery.flexslider-min.js"></script>
</body>
</html>