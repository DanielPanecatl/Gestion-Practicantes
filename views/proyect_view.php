<?php
require_once '../ui/header.htm';
require_once '../ui/nav.htm';
?>
<body background="/INTECC/ui/img/fondo.jpg">

<div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Agregar proyecto</h4>
      <div class="row">
        <div class="input-field col s6">
          <input id="txtNom" type="text" class="validate">
          <label for="txtNom">Nombre</label>
        </div>
        <div class="input-field col s6">
          <input  id="txtFeI" type="text" class="validate">
          <label for="txtFeI">Fecha de inicio(aaaa/mm/dd)</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="txtFeF" type="text" class="validate">
          <label for="txtFeF">Fecha de finalización(aaaa/mm/dd)</label>
        </div>
        <div class="input-field col s6">
          <input id="txtidUse" type="text" class="validate">
          <label for="txtidUse">ID del usuario</label>
        </div>
      </div>

      <?php 
      echo "<a href='#' onClick='getByid1(".$id.")' class='modal-action waves-effect waves-green btn-flat' style='background-color:  #4da6ff'>Mis usuarios</a>
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
    </tr>
  </thead>
  <tbody>
  </tbody>
</table>
</div>";
      ?>

    </div>
     <div class="modal-footer">
      <a href="#" onClick="agregaProyecto()" class="modal-action waves-effect waves-green btn-flat ">Ok</a>
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cancelar</a>
    </div>
  </div>


  <div id="modal2" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Modificar proyecto</h4>
      <div class="row">
        <div class="input-field col s6">
          <input id="txtid" type="text" class="validate"  disabled>
          <label for="txtid">ID</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="txtNom1" type="text" class="validate">
          <label for="txtNom1">Nombre</label>
        </div>
        <div class="input-field col s6">
          <input id="txtFeI1" type="text" class="validate">
          <label for="txtFeI1">Fecha de inicio</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="txtFeF1" type="text" class="validate">
          <label for="txtFeF1">Fecha de finalización</label>
        </div>
        <div class="input-field col s6">
          <input id="txtidUse1" type="text" class="validate">
          <label for="txtidUse1">ID del usuario</label>
        </div>
      </div>
    </div>
     <div class="modal-footer">
      <a href="#" onClick="modificarProyect()" class="modal-action waves-effect waves-green btn-flat ">Ok</a>
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cancelar</a>
    </div>
  </div>

  <div id="modal3" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Buscar actividades de un proyecto</h4>
      <div class="row">
        <div class="input-field col s6">
          <input id="txtid" type="text" class="validate">
          <label for="txtid"></label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="txtNom1" type="text" class="validate">
          <label for="txtNom1">Nombre</label>
        </div>
        <div class="input-field col s6">
          <input placeholder="aaaa/mm/dd" id="txtFeI1" type="text" class="validate">
          <label for="txtFeI1">Fecha de inicio</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="aaaa/mm/dd" id="txtFeF1" type="text" class="validate">
          <label for="txtFeF1">Fecha de finalización</label>
        </div>
        <div class="input-field col s6">
          <input id="txtidUse1" type="text" class="validate">
          <label for="txtidUse1">ID del usuario</label>
        </div>
      </div>
    </div>
     <div class="modal-footer">
      <a href="#" onClick="modificarProyect()" class="modal-action waves-effect waves-green btn-flat ">Ok</a>
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cancelar</a>
    </div>
  </div>
  
<a class="btn-floating btn-large waves-effect waves-light red" href="#modal1">
      <i class="material-icons">add</i></a>
<div class='container'>
<table id='tablaProyect' class='highlight'>
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
<?php
require_once '../ui/footer.htm';
?>