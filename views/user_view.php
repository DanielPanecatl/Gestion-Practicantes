<?php
require_once '../ui/header.htm';
require_once '../ui/nav.htm';
?>
<body background="/INTECC/ui/img/fondo.jpg">



<div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Agregar usuario</h4>
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
      <div class="row">
        <div class="input-field col s6">
          <?php
          $id = $_SESSION["u_User2"];   
          echo "<input id='txtidAdminis' type='number' class='validate' value=$id disabled>"
          ?>
          <label for="txtidAdminis">ID Administrador</label>
        </div>
      </div>
    </div>
     <div class="modal-footer">
      <a href="#" onClick="agregaUsuario()" class="modal-action waves-effect waves-green btn-flat ">Ok</a>
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cancelar</a>
    </div>
  </div>

  <div id="modal6" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Modificar Usuario</h4>
      <div class="row">
        <div class="input-field col s6">
          <input id="txtidUs" type="text" class="validate" disabled>
          <label for="txtidUs">ID usuario</label>
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
      <div class="row">
        <div class="input-field col s6">
          <input id="txtidAdminis1" type="number" class="validate">
          <label for="txtidAdminis1">ID Administrador</label>
        </div>
      </div>
    </div>
     <div class="modal-footer">
      <a href="#" onClick="modificarUsuario()" class="modal-action waves-effect waves-green btn-flat ">Ok</a>
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


  <div id="modal4" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Actividades</h4>
      <table id="tablaActivity1" class="highlight">
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
      
      <table id="comentarios" class="highlight">
        <thead>
          <tr>
           <th>Comentario</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
      <div class="container">
            <input id="input_text" type="text" data-length="150">
            <label for="input_text">Input text</label>
            </div>
      </div>
     <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cerrar</a>
    </div>
  </div>

  <div id="modal7" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Modificar actividad</h4>
      <div class="row">
        <div class="input-field col s6">
          <input id="txtUpdateid" type="text" class="validate" disabled="">
          <label for="txtUpdateid">ID</label>
        </div>
        <div class="input-field col s6">
          <input id="txtUpdateNom1" type="text" class="validate">
          <label for="txtUpdateNom1">Nombre</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="txtUpdateFeI1" type="text" class="validate">
          <label for="txtUpdateFeI1">Fecha de inicio</label>
        </div>
        <div class="input-field col s6">
          <input id="txtUpdateFeF1" type="text" class="validate">
          <label for="txtUpdateFeF1">Fecha de finalización</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="txtUpdateEtap1" type="text" class="validate">
          <label for="txtUpdateEtap1">Etapa</label>
        </div>
        <div class="input-field col s6">
          <input id="txtUpdateidProy1" type="text" class="validate">
          <label for="txtUpdateidProy1">ID del proyecto</label>
        </div>
      </div>
    </div>
     <div class="modal-footer">
      <a href="#" onClick="modificarActividad()" class="modal-action waves-effect waves-green btn-flat ">Ok</a>
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cancelar</a>
    </div>
  </div>


   <div id="modal8" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Comentarios</h4>
      <div class="row">
        <div class="input-field col s6">
          <input id="txtidActividad" type="text" class="validate" hidden>
        </div>
        <div class="input-field col s12">
          <input id="txtContenido" type="text" class="validate">
          <label for="txtContenido">Comentario</label>
        </div>
      </div>

      <table id='tablaComentarios' class='highlight'>
        <thead>
          <tr>
            <th>Comentarios</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>

    </div>
     <div class="modal-footer">
      <a href="#" onClick="addComentario()" class="modal-action waves-effect waves-green btn-flat ">Ok</a>
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cancelar</a>
    </div>
  </div>









<a class="btn-floating btn-large waves-effect waves-light red" href="#modal1">
      <i class="material-icons">add</i></a>

<?php
if($id == 1)
{
echo "<div class='container'>
<table id='tablaUsers' class='highlight'>
  <thead>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Apellido paterno</th>
      <th>Apellido materno</th>
      <th>Correo</th>
      <th>Telefono</th>
      <th>Nombre de administrador</th>
    </tr>
  </thead>
  <tbody>
  </tbody>
</table>
</div>";
}
else{
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
      <th>Nombre de administrador</th>
    </tr>
  </thead>
  <tbody>
  </tbody>
</table>
</div>";
}
require_once '../ui/footer.htm';
?>