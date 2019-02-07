<?php
require_once '../ui/header.htm';
require_once '../ui/nav.htm';
?>
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
          <label for="txtFeI">Fecha de inicio(aaaa/mm/dd)</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="txtFeF" type="text" class="validate">
          <label for="txtFeF">Fecha de finalización(aaaa/mm/dd)</label>
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

<body background="/INTECC/ui/img/fondo.jpg">
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
            <th>Seleccionar</th>
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

<?php
require_once('../db/conexion.php'); 
$resultado = mysql_query("SELECT estado FROM formulario WHERE id_usuario='".$id."'",$conn);
          $fila = mysql_fetch_row($resultado);
          if($fila[0]==1)
          {
            echo "<div class='right'><li><a href='#modal1' class='btn-floating btn-large waves-effect waves-light red'><i class='material-icons'>add</i></a></li></div>";
            /*$resultado1 = mysql_query("SELECT id_usuario FROM formulario WHERE id_usuario='".$id."'",$conn);
            $fila1 = mysql_fetch_row($resultado1);
            if ($fila1[0]==$id) 
            {
              echo "<li><a href='#modal1' class='btn-floating red' disabled><i class='material-icons'>add</i></a></li>";
            }
            else
            {
              echo "<li><a href='#modal1' class='btn-floating red'><i class='material-icons'>add</i></a></li>";
            }*/
          }
          else
          {
            echo "<div class='right'><li><a href='#modal1' class='btn-floating red' disabled><i class='material-icons'>add</i></a></li></div>";
          }
echo "<a href='#' onClick='getByidProyectUser(".$id.")' class='modal-action waves-effect waves-green btn-flat'
 style='background-color:  #4da6ff'>Mostrar</a>
<div class='container'>
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
</div>";
require_once '../ui/footer.htm';
?>