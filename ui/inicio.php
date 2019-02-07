<?php
require_once 'header.htm';
require_once 'nav.htm';
?>
<body background="img/fondo.jpg">
  <div class="carousel carousel-slider center" data-indicators="true">
    <div class="carousel-fixed-item center">
      <a class="btn waves-effect white grey-text darken-text-2">button</a>
    </div>
    <div class="carousel-item red white-text" href="#one!">
      <h2>First Panel</h2>
      <p class="white-text">This is your first panel</p>
    </div>
    <div class="carousel-item amber white-text" href="#two!">
      <h2>Second Panel</h2>
      <p class="white-text">This is your second panel</p>
    </div>
    <div class="carousel-item green white-text" href="#three!">
      <h2>Third Panel</h2>
      <p class="white-text">This is your third panel</p>
    </div>
    <div class="carousel-item blue white-text" href="#four!">
      <h2>Fourth Panel</h2>
      <p class="white-text">This is your fourth panel</p>
    </div>
  </div>
<div class="container" >
<ul class="collection">
    <li class="collection-item avatar">
      <img src="img/proyectos.png" alt="" class="circle">
      <span class="title">Proyectos</span>
      <p>First Line <br>
         Second Line
      </p>
      <a href="/INTECC/views/proyect_view.php" class="secondary-content"><i class="material-icons" style="color: #00b0ff">input</i></a>
    </li>
    <li class="collection-item avatar">
      <img src="img/jefe.png" alt="" class="circle">
      <span class="title">Administradores</span>
      <p>First Line <br>
         Second Line
      </p>
      <a href="/INTECC/views/admin_view.php" class="secondary-content"><i class="material-icons" style="color: #00b0ff">input</i></a>
    </li>
    <li class="collection-item avatar">
      <img src="img/users.png" alt="" class="circle">
      <span class="title">Usuarios</span>
      <p>First Line <br>
         Second Line
      </p>
      <a href="/INTECC/views/user_view.php" class="secondary-content"><i class="material-icons" style="color: #00b0ff">input</i></a>
    </li>
    <li class="collection-item avatar">
      <img src="img/Actividades.png" alt="" class="circle">
      <span class="title">Actividades</span>
      <p>First Line <br>
         Second Line
      </p>
      <a href="/INTECC/views/activ_view.php" class="secondary-content"><i class="material-icons" style="color: #00b0ff">input</i></a>
    </li>
  </ul>
 </div>
<?php
require_once 'footer.htm';
?>