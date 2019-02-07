<?php
require_once '../ui/header.htm';
require_once '../ui/nav.htm';
?>
<body background="/INTECC/ui/img/fondo.jpg">

<div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Agregar administrador</h4>
      <div class="row">
        <div class="input-field col s6">
          <input id="txtNombre" type="text" class="validate">
          <label for="txtNombre">Nombre</label>
        </div>
        <div class="input-field col s6">
          <input id="txtApellidoP" type="text" class="validate">
          <label for="txtApellidoP">Apellido paterno</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="txtApellidoM" type="text" class="validate">
          <label for="txtApellidoM">Apellido materno</label>
        </div>
        <div class="input-field col s6">
          <input id="txtCorreo" type="text" class="validate">
          <label for="txtCorreo">Correo</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="txtContra" type="password" class="validate">
          <label for="txtContra">Contraseña</label>
        </div>
        <div class="input-field col s6">
          <input id="txtTel" type="number" class="validate">
          <label for="txtTel">Telefono</label>
        </div>
      </div>
    </div>
     <div class="modal-footer">
      <a href="#" onClick="agregaAdminis()" class="modal-action waves-effect waves-green btn-flat ">Ok</a>
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cancelar</a>
    </div>
  </div>


  <div id="modal2" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Modificar administrador</h4>
      <div class="row">
        <div class="input-field col s6">
          <input id="txtidAd" type="text" class="validate" disabled="">
          <label for="txtidAd">ID usuario</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="txtNombre1" type="text" class="validate">
          <label for="txtNombre1">Nombre</label>
        </div>
        <div class="input-field col s6">
          <input id="txtApellidoP1" type="text" class="validate">
          <label for="txtApellidoP1">Apellido paterno</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="txtApellidoM1" type="text" class="validate">
          <label for="txtApellidoM1">Apellido materno</label>
        </div>
        <div class="input-field col s6">
          <input id="txtCorreo1" type="text" class="validate">
          <label for="txtCorreo1">Correo</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="txtContra1" type="password" class="validate">
          <label for="txtContra1">Contraseña</label>
        </div>
        <div class="input-field col s6">
          <input id="txtTel1" type="number" class="validate">
          <label for="txtTel1">Telefono</label>
        </div>
      </div>
    </div>
     <div class="modal-footer">
      <a href="#" onClick="modificarAdministrador()" class="modal-action waves-effect waves-green btn-flat ">Ok</a>
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cancelar</a>
    </div>
  </div>

<a class="btn-floating btn-large waves-effect waves-light red" href="#modal1">
    <i class="material-icons">add</i></a>

<div class="container">
<table id="tablaAdmin" class="highlight">
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
</div>
<?php
require_once '../ui/footer.htm';
?>