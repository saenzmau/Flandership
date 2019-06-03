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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body id="top" style="background-color: #FBFBFF;">

<?php include 'header.php'; ?>
<div class="w3-content w3-section" style="padding: 20px;max-width:700px;">
  <img class="mySlides" src="images/CarritoRapido.jpg" style="width:100%">
  <img class="mySlides" src="images/CONSUMER-PRODUCTS.jpg" style="width:100%">
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 3000); // Change image every 2 seconds
}
</script>
<div class ="container-fluid" id="favoritos" style="background-color: #C10000;">
    <div class="row" style="height: 50px;">
        <h2 class="sectiontitle" style="color: #FBFBFF; font-weight: bold">Los favoritos del mes</h2>
    </div>
    <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <figure><a href="#"><img src="images/demo/320x320.png" alt=""></a>
                <figcaption>
                  <h5 style="color: #FBFBFF; font-weight: bold;text-align: center">Producto 1</h5>
                  <h6 style="color: #FBFBFF; text-align: center">¡A sólo $19.90!</h6>
                </figcaption>
            </figure>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <figure><a href="#"><img src="images/demo/320x320.png" alt=""></a>
                <figcaption>
                  <h5 style="color: #FBFBFF; font-weight: bold; text-align: center">Producto 2</h5>
                  <h6 style="color: #FBFBFF; text-align: center">¡A sólo $19.90!</h6>
                </figcaption>
            </figure>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <figure><a href="#"><img src="images/demo/320x320.png" alt=""></a>
                <figcaption>
                  <h5 style="color: #FBFBFF; font-weight: bold; text-align: center">Producto 3</h5>
                  <h6 style="color: #FBFBFF; text-align: center">¡A sólo $19.90!</h6>
                </figcaption>
            </figure>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <figure><a href="#"><img src="images/demo/320x320.png" alt=""></a>
                <figcaption>
                  <h5 style="color: #FBFBFF; font-weight: bold; text-align: center">Producto 4</h5>
                  <h6 style="color: #FBFBFF; text-align: center">¡A sólo $19.90!</h6>
                </figcaption>
            </figure>
        </div>
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