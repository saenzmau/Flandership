<?php

session_start();

echo
'<div class="wrapper row1" style="background-color: white; color: black;">
  <header id="header" class="hoc clear" > 
   
    <div id="logo" class="fl_left">
      <a href="index.php"><img src="images/fsdeftransp.png" style="width: 400px;height: 75px;" ></a>
    </div>
    <div id="quickinfo" class="fl_right" style="text-transform: capitalize">';
    
    if(isset($_SESSION['Nombre']))
    {
        echo '<p style="font-size:30px;">¡ Bienvenido '.$_SESSION['Nombre']. ' !</p>
        <a href="logoutProcess.php" type="button" class="btn btn-primary btn-md" style="text-transform: capitalize">
        <span class="glyphicon glyphicon-user"></span> Cerrar Sesión</a>
        </div></header></div>' ;
    }
    else 
    { 
          
      echo'
        <a href="login.php" type="button" class="btn btn-secondary btn-lg" style="text-transform: capitalize"><span class="glyphicon glyphicon-user"></span> Iniciar Sesión</a>
        <br style="display: inline;">
        <br style="display: inline;">
        <a href="registro.php"><font face="verdana" color="blue" size="2"><u>¿No estás inscrito? Da click aquí</u></font></a>
        </div></header></div>';
    }

echo '<div class="wrapper row2" style="background-color:#c10000; color:#dedede">
  <nav id="mainav" class="hoc clear"> 
   <ul class="clear">
      <li ';
      if(basename($_SERVER['PHP_SELF']) == 'index.php')
      { echo 'class="active"';} 
      echo'    
      ><a href="index.php">
        <span class="glyphicon glyphicon-home"></span> Home</a>
      </li>
      <li ';
      if(basename($_SERVER['PHP_SELF']) == 'nosotros.php')
      { echo 'class="active"';} 
      echo'
      ><a href="nosotros.php">
        <span class="glyphicon glyphicon-info-sign"></span> Nosotros</a>
      </li>
      <li ';
      if(basename($_SERVER['PHP_SELF']) == 'catalogo.php')
      { echo 'class="active"';} 
      echo '
      ><a href="catalogo.php">
        <span class="glyphicon glyphicon glyphicon-th-list"></span> Catálogo</a>
      </li>
      <li  ';
      if(basename($_SERVER['PHP_SELF']) == 'compras.php')
      { echo 'class="active"';} 
      echo '
      ><a href="compras.php">
        <span class="glyphicon glyphicon-shopping-cart"></span> Compras</a>
      </li>
      <li ';
      if(basename($_SERVER['PHP_SELF']) == 'contacto.php')
      { echo 'class="active"';} 
      echo '
      ><a href="contacto.php">
        <span class="glyphicon glyphicon glyphicon-earphone"></span> Contacto</a>
      </li>

      
      

      <li><a class="drop" href="#">Pages</a>
        <ul>
          <li><a href="pages/gallery.html">Gallery</a></li>
          <li><a href="pages/full-width.html">Full Width</a></li>
          <li><a href="pages/sidebar-left.html">Sidebar Left</a></li>
          <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
          <li><a href="pages/basic-grid.html">Basic Grid</a></li>
        </ul>
      </li>
      <li><a class="drop" href="#">Dropdown</a>
        <ul>
          <li><a href="#">Level 2</a></li>
          <li><a class="drop" href="#">Level 2 + Drop</a>
            <ul>
              <li><a href="#">Level 3</a></li>
              <li><a href="#">Level 3</a></li>
              <li><a href="#">Level 3</a></li>
            </ul>
          </li>
          <li><a href="#">Level 2</a></li>
        </ul>
      </li>
      
    </ul>
  </nav>
</div>
';