<?php
require_once '../ui/header.htm';
require_once '../ui/nav.htm';
?>
<body background="/INTECC/ui/img/fondo.jpg">
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
       <?php 
      echo "<a href='#' onClick='getByid(".$id.")' class='modal-action waves-effect waves-green btn-flat' style='background-color:  #4da6ff'>Mostrar</a>
<div class='container'>
<table id='tablaUsers1' class='highlight'>
  <thead>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Apellido paterno</th>
      <th>Apellido materno</th>
      <th>Correo</th>
      <th>Telefono</th>
      <th>ID de administrador</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
  </tbody>
</table>
</div>";
      ?>
    </div>
     <div class="modal-footer">
      <a href="#" onClick="agregaActividad()" class="modal-action waves-effect waves-green btn-flat ">Ok</a>
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cancelar</a>
    </div>
  </div>


  <div id="modal2" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Modificar actividad</h4>
      <div class="row">
        <div class="input-field col s6">
          <input id="txtid" type="text" class="validate" hidden>
          <label for="txtid">ID</label>
        </div>
        <div class="input-field col s6">
          <input id="txtNom1" type="text" class="validate">
          <label for="txtNom1">Nombre</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="aaaa/mm/dd" id="txtFeI1" type="text" class="validate">
          <label for="txtFeI1">Fecha de inicio</label>
        </div>
        <div class="input-field col s6">
          <input placeholder="aaaa/mm/dd" id="txtFeF1" type="text" class="validate">
          <label for="txtFeF1">Fecha de finalización</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="txtEtap1" type="text" class="validate">
          <label for="txtEtap1">Etapa</label>
        </div>
        <div class="input-field col s6">
          <input id="txtidProy1" type="text" class="validate">
          <label for="txtidProy1">ID del proyecto</label>
        </div>
      </div>
    </div>
     <div class="modal-footer">
      <a href="#" onClick="modificarActividad()" class="modal-action waves-effect waves-green btn-flat ">Ok</a>
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cancelar</a>
    </div>
  </div>

      <div id="modal3" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Proyectos</h4>
      <table id='tablaProyect1' class='highlight'>
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Fecha de inicio</th>
            <th>Fecha de finalización</th>
            <th>Nombre del usuario</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>
     <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cerrar</a>
    </div>
  </div>
  
<a class="btn-floating btn-large waves-effect waves-light red" href="#modal1">
      <i class="material-icons">add</i></a>

<div class="container">
<table id="tablaActivity" class="highlight">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Fecha de inicio</th>
      <th>Fecha de finalización</th>
      <th>Etapa</th>
      <th>Nombre del proyecto</th>
      <th>Estado</th>
      <th>Eliminar</th>
      <th>Descargar</th>
    </tr>
  </thead>
  <tbody>
  </tbody>
</table>
</div>
<?php
require_once '../ui/footer.htm';
?>