<?php
session_start();
?>
<header class="hoc clear">
    <div class="container" style="padding:10px;">
    <div clas="row">
        <div id="logo" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <a href="index.php"><img src="images/fsdeftransp.png" style="width: 400px;height: 75px;" ></a>
        </div>
        <div id="quickinfo" class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="text-transform: capitalize">
            <?php
                if(isset($_SESSION['Nombre']))
                {
                    echo
                        '<div class="row" style="padding:18px">'.
                            '<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">'.
                                '<p style="font-size:30px;">Bienvenido '.utf8_encode($_SESSION['Nombre']).'</p>'.
                                
                            '</div>'.
                            '<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">'.
                                '<a href="logoutProcess.php" type="button" class="boton b-reg" style="text-transform: capitalize">'.
                                '<span class="glyphicon glyphicon-user"></span> Cerrar Sesión</a>'.
                            '</div>'.
                        '</div>';
                }
                else 
                {  
                    echo
                        '<div class="row" style="padding:18px">'.
                            '<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">'.
                                '<a href="login.php" type="button" class="boton b-login" style="text-transform: capitalize">'.
                                '<span class="glyphicon glyphicon-user"></span> Iniciar Sesión</a>'.
                            '</div>'.
                            '<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">'.
                                '<a href="registro.php" type="button" class="boton b-reg" style="text-transform: capitalize">Registrarme</a>'.
                            '</div>'.
                        '</div>';
                }
            ?>
        </div>
    </div>
</div>
</header>
<div class="wrapper row2" style="background-color:#C10000; color:#dedede; height:45px; padding:0px">
    <nav id="mainav" class="hoc clear"> 
    <ul class="clear">
        <li <?php if(basename($_SERVER['PHP_SELF']) == 'index.php') { echo 'class="active"';}?> >
            <a href="index.php">
            <span class="glyphicon glyphicon-home"></span> Home</a>
        </li>
        <li <?php if(basename($_SERVER['PHP_SELF']) == 'catalogo.php') { echo 'class="active"';}?> >
            <a href="catalogo.php">
            <span class="glyphicon glyphicon glyphicon-th-list"></span> Catálogo</a>
        </li>
        <li  <?php if(basename($_SERVER['PHP_SELF']) == 'compras.php') { echo 'class="active"';} ?>>
            <a href="compras.php">
            <span class="glyphicon glyphicon-shopping-cart"></span> Compras</a>
        </li>
        <li <?php if(basename($_SERVER['PHP_SELF']) == 'nosotros.php') { echo 'class="active"';}?> >
            <a href="nosotros.php">
            <span class="glyphicon glyphicon-info-sign"></span> Nosotros</a>
        </li>
        <li <?php if(basename($_SERVER['PHP_SELF']) == 'contacto.php') { echo 'class="active"';} ?>>
            <a href="contacto.php">
            <span class="glyphicon glyphicon glyphicon-earphone"></span> Contacto</a>
        </li>
    </ul>
  </nav>
</div>