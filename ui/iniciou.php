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
<div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Agregar actividad</h4>
      <div class="row">
        <div class="input-field col s6">
          <input id="txtNom" type="text" class="validate">
          <label for="txtNom">Nombre</label>
        </div>
        <div class="input-field col s6">
          <input id="txtFeI" type="text" class="validate">
          <label for="txtFeI">Fecha de inicio</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="txtFeF" type="text" class="validate">
          <label for="txtFeF">Fecha de finalización</label>
        </div>
        <div class="input-field col s6">
          <input id="txtEtap" type="text" class="validate">
          <label for="txtEtap">Etapa</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="txtIdProy" type="text" class="validate">
          <label for="txtIdProy">ID de Proyecto</label>
        </div>
      </div>
    </div>
     <div class="modal-footer">
      <a href="#" onClick="agregaActividad()" class="modal-action waves-effect waves-green btn-flat ">Ok</a>
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cancelar</a>
    </div>
  </div>


  <div id="modal2" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Agregar diagrama</h4>
      
      <form enctype="multipart/form-data" action="../db/upload.php" method="post" name="form1">
      <input type="file" name="miArchivo"><input type="submit" value="UPLOAD">
      </form>

        </div>
         <div class="modal-footer">
          <a href="#" onClick="agregaActividad()" class="modal-action waves-effect waves-green btn-flat ">Ok</a>
          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cancelar</a>
        </div>
      </div>

  <div id="modal3" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Diagrama</h4>
      
      
    <?php
      echo "<img class='responsive-img' src='../db/ver_img.php?id=$id' >";
    ?>
      </div>
         <div class="modal-footer">
          <a href="#" onClick="agregaActividad()" class="modal-action waves-effect waves-green btn-flat ">Ok</a>
          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cancelar</a>
        </div>
      </div>

  <div class="fixed-action-btn horizontal click-to-toggle">
    <a class="btn-floating btn-large red">
      <i class="material-icons">menu</i>
    </a>
    <ul>
       <?php

          require_once('../db/conexion.php'); //importamos el archivo de conexión 
            $resultado2 = mysql_query("SELECT id_usuario FROM img WHERE id_usuario='".$id."'",$conn);
            $fila2 = mysql_fetch_row($resultado2);
            if ($fila2[0]==$id) 
            {
              echo "<li><a href='#modal2' class='btn-floating red' disabled><i class='material-icons'>attach_file</i></a></li>";
            }
            else
            {
              echo "<li><a href='#modal2' class='btn-floating red'><i class='material-icons'>attach_file</i></a></li>";
            }
      ?>
      <li><a href="#modal3" class="btn-floating blue"><i class="material-icons">add_a_photo</i></a></li>
    </ul>
  </div>
        
<div class="container" >
<ul class="collection">
    <li class="collection-item avatar">
      <img src="img/proyectos.png" alt="" class="circle">
      <span class="title">Proyectos</span>
      <p>First Line <br>
         Second Line
      </p>
      <a href="/INTECC/views/proyectU_view.php" class="secondary-content"><i class="material-icons" style="color: #00b0ff">input</i></a>
    </li>
  </ul>
 </div>
<?php
require_once 'footer.htm';
?>