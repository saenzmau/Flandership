<?php

echo

'<div class="wrapper row1" style="background-color: white; color: black;">
  <header id="header" class="hoc clear" > 
   
    <div id="logo" class="fl_left">
      <!--<h1><a href="index.html">Caran</a></h1>-->
      <a href="index.html"><img src="images/fsdeftransp.png" style="width: 400px;height: 75px;" ></a>
    </div>
    <div id="quickinfo" class="fl_right">
      
      <button type="button" class="btn btn-secondary btn-lg"><span class="glyphicon glyphicon-user"></span> Iniciar Sesión</button>
    </div>
    
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2" style="background-color:#c10000; color:#dedede">
  <nav id="mainav" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul class="clear">
      <li class="active"><a href="index.html">
        <span class="glyphicon glyphicon-home"></span> Home</a>
      </li>
      <li><a href="catalogo.php">
        <span class="glyphicon glyphicon-info-sign"></span> Nosotros</a>
      </li>
      <li><a href="catalogo.php">
        <span class="glyphicon glyphicon glyphicon-th-list"></span> Catálogo</a>
      </li>
      <li><a href="#">
        <span class="glyphicon glyphicon-shopping-cart"></span> Compras</a>
      </li>
      <li><a href="#">
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
    <!-- ################################################################################################ -->
  </nav>
</div>
';