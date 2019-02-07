$(document).ready(function(){
    cargarItems();
    cargarItems2();
    cargarItems3();
    cargarItems4();
  });
function cargarItems(){
  	$.get("http://localhost/INTECC/controllers/controller_users.php","",function(data,status)
  	{
		var p=JSON.parse(data);
		var datoshtml="";
		for(i=0;i<p.users.length;i++){
			datoshtml="<tr>"
			datoshtml+="<td>"+p.users[i].id+"</td>";
			datoshtml+="<td>"+p.users[i].nombreU+"</td>";
			datoshtml+="<td>"+p.users[i].apellidop+"</td>";
			datoshtml+="<td>"+p.users[i].apellidom+"</td>";
			datoshtml+="<td>"+p.users[i].email+"</td>";
			datoshtml+="<td>"+p.users[i].telefono+"</td>";
			datoshtml+="<td>"+p.users[i].nombreA+"</td>";
			datoshtml+="<td><a href='#modal3' onclick='getByidProyect("+p.users[i].id+")' class='modal-action waves-effect waves-green btn-flat' style='background-color:  #4da6ff'>Proyectos</a>";
			datoshtml+="<td><a href='../db/ver_imgAd.php?id="+p.users[i].id+"' class='modal-action waves-effect waves-green btn-flat' style='background-color:  #4da6ff'><i class='material-icons right'>crop_original</i></a></td>";
			datoshtml+="<td><a href='../controllers/formAlta.php?id="+p.users[i].id+"' class='modal-action waves-effect waves-green btn-flat' style='background-color:  #4da6ff'><i class='material-icons right'>check_circle</i></a></td>";
			datoshtml+="<td><a onclick='GetUsersDetails("+p.users[i].id+")' class='modal-action waves-effect waves-green btn-flat' style='background-color:  #4da6ff'><i class='material-icons right'>edit</i></a></td>";			
			datoshtml+="<td><a onclick='remueveItem("+p.users[i].id+")' class='modal-action waves-effect waves-green btn-flat' style='background-color:  #4da6ff'><i class='material-icons right'>delete_forever</i></a>";
			datoshtml+="</tr>";
			$("#tablaUsers").append(datoshtml); 
		}
	});
}

function GetUsersDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#txtidUs").val(id);
    $.post("http://localhost/INTECC/controllers/readUsersDetails.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#txtNombre1").val(user.nombreU);
            $("#txtApellidoP1").val(user.apellidop);
            $("#txtApellidoM1").val(user.apellidom);
            $("#txtCorreo1").val(user.email);
            $("#txtContra1").val(user.pass);
            $("#txtTel1").val(user.telefono);
            $("#txtidAdminis1").val(user.id_administrador);
        }
    );
    // Open modal popup
    $('#modal6').modal('open');
}

function getByid(itemid){
  	$.get("http://localhost/INTECC/controllers/controller_users2.php?id="+itemid,function(data,status){
  		var p=JSON.parse(data);
		var datoshtml="";
		for(i=0;i<p.users.length;i++){
			datoshtml="<tr>"
			datoshtml+="<td>"+p.users[i].id+"</td>";
			datoshtml+="<td>"+p.users[i].nombreU+"</td>";
			datoshtml+="<td>"+p.users[i].apellidop+"</td>";
			datoshtml+="<td>"+p.users[i].apellidom+"</td>";
			datoshtml+="<td>"+p.users[i].email+"</td>";
			datoshtml+="<td>"+p.users[i].telefono+"</td>";
			datoshtml+="<td>"+p.users[i].nombreA+"</td>";
			datoshtml+="<td><a href='#modal3' onclick='getByidProyect("+p.users[i].id+")' class='modal-action waves-effect waves-green btn-flat' style='background-color:  #4da6ff'>Proyectos</a>";
			datoshtml+="<td><a href='../db/ver_imgAd.php?id="+p.users[i].id+"' class='modal-action waves-effect waves-green btn-flat' style='background-color:  #4da6ff'><i class='material-icons right'>crop_original</i></a></td>";
			datoshtml+="<td><a href='../controllers/formAlta.php?id="+p.users[i].id+"' class='modal-action waves-effect waves-green btn-flat' style='background-color:  #4da6ff'><i class='material-icons right'>check_circle</i></a></td>";
			datoshtml+="<td><a onclick='GetUsersDetails("+p.users[i].id+")' class='modal-action waves-effect waves-green btn-flat' style='background-color:  #4da6ff'><i class='material-icons right'>edit</i></a></td>";
			datoshtml+="<td><a onclick='remueveItem("+p.users[i].id+")' class='modal-action waves-effect waves-green btn-flat' style='background-color:  #4da6ff'><i class='material-icons right'>delete_forever</i></a>";
			datoshtml+="</tr>";
			$("#tablaUsers1").append(datoshtml); 
		}
	});
}

function getByid1(itemid){
  	$.get("http://localhost/INTECC/controllers/controller_users2.php?id="+itemid,function(data,status){
  		var p=JSON.parse(data);
		var datoshtml="";
		for(i=0;i<p.users.length;i++){
			datoshtml="<tr>"
			datoshtml+="<td>"+p.users[i].id+"</td>";
			datoshtml+="<td>"+p.users[i].nombreU+"</td>";
			datoshtml+="<td>"+p.users[i].apellidop+"</td>";
			datoshtml+="<td>"+p.users[i].apellidom+"</td>";
			datoshtml+="<td>"+p.users[i].email+"</td>";
			datoshtml+="<td>"+p.users[i].telefono+"</td>";
			datoshtml+="</tr>";
			$("#tablaUsers1").append(datoshtml); 
		}
	});
}


function agregaUsuario(){
	var nom=$("#txtNombre").val();
	var apeP=$("#txtApellidoP").val();
	var apeM=$("#txtApellidoM").val();
	var correo=$("#txtCorreo").val();
	var contra=$("#txtContra").val();
	var tel=$("#txtTel").val();
	var idAd=$("#txtidAdminis").val();
	
	var usuario={      //La variable actor contiene los datos del json
				nombreU: nom,
				apellidop: apeP,
				apellidom: apeM,
				email: correo,
				pass: contra,
				telefono: tel,
				id_administrador: idAd
			};
			
	$.ajax({
		type: "POST",
		url: "http://localhost/INTECC/controllers/controller_users.php",
		data: JSON.stringify(usuario), //hacer la conversion a JSON para poder consumir el JSON
		dataType: "json",
		success: function(data,status){
			alert(data.mensaje);
			cargarItems();
		}
	});
	$('#modal1').modal('close');
}

function remueveItem(itemid){
  	$.get("http://localhost/INTECC/controllers/controller_users1.php?id="+itemid,function(data,status){
  	var mensaje=JSON.parse(data);
	alert(mensaje.mensaje);
	cargarItems();
  	});

}

function modificarUsuario(){
	var id_user=$("#txtidUs").val();
	var nom=$("#txtNombre1").val();
	var apeP=$("#txtApellidoP1").val();
	var apeM=$("#txtApellidoM1").val();
	var correo=$("#txtCorreo1").val();
	var contra=$("#txtContra1").val();
	var tel=$("#txtTel1").val();
	var idAd=$("#txtidAdminis1").val();


	var usuario={      //La variable actor contiene los datos del json
				id: id_user,
				nombreU: nom,
				apellidop: apeP,
				apellidom: apeM,
				email: correo,
				pass: contra,
				telefono: tel,
				id_administrador: idAd
			};
			
	$.ajax({
		type: "POST",
		url: "http://localhost/INTECC/controllers/controller_users1.php",
		data: JSON.stringify(usuario), //hacer la conversion a JSON para poder consumir el JSON
		dataType: "json",
		success: function(data,status){
			alert(data.mensaje);
			cargarItems();
		}
	});
	$('#modal2').modal('close');
}
/*------------------------------------------------------------------------------------------------------------------------------------------*/
function cargarItems2(){
  	$.get("http://localhost/INTECC/controllers/controller_proyect.php","",function(data,status)
  	{
		var p=JSON.parse(data);
		var datoshtml="";
		for(i=0;i<p.proyectos.length;i++){
			datoshtml="<tr>"
			datoshtml+="<td>"+p.proyectos[i].id+"</td>";
			datoshtml+="<td>"+p.proyectos[i].nombre+"</td>";
			datoshtml+="<td>"+p.proyectos[i].fecha_inicio+"</td>";
			datoshtml+="<td>"+p.proyectos[i].fecha_fin+"</td>";
			datoshtml+="<td>"+p.proyectos[i].nombreU+"</td>";
			datoshtml+="<td><a onclick='remueveProyect("+p.proyectos[i].id+")' class='modal-action waves-effect waves-green btn-flat' style='background-color:  #4da6ff'><i class='material-icons right'>delete_forever</i></a>";
			datoshtml+="<td><a onclick='GetProyectsDetails("+p.proyectos[i].id+")' class='modal-action waves-effect waves-green btn-flat' style='background-color:  #4da6ff' ><i class='material-icons'>mode_edit</i></a></td>";
			datoshtml+="</tr>";
			$("#tablaProyect").append(datoshtml); 
		}
	});
}

function GetProyectsDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#txtid").val(id);
    $.post("http://localhost/INTECC/controllers/readProyectDetails.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var proyect = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#txtNom1").val(proyect.nombre);
            $("#txtFeI1").val(proyect.fecha_inicio);
            $("#txtFeF1").val(proyect.fecha_fin);
            $("#txtidUse1").val(proyect.id_usuario);
        }
    );
    // Open modal popup
    $('#modal2').modal('open');
}

function getByidProyect(itemid){
  	$.get("http://localhost/INTECC/controllers/controller_proyect2.php?id="+itemid,function(data,status){
  	var p=JSON.parse(data);
		var datoshtml="";
		for(i=0;i<p.proyectos.length;i++){
			datoshtml="<tr>"
			datoshtml+="<td>"+p.proyectos[i].id+"</td>";
			datoshtml+="<td>"+p.proyectos[i].nombre+"</td>";
			datoshtml+="<td>"+p.proyectos[i].fecha_inicio+"</td>";
			datoshtml+="<td>"+p.proyectos[i].fecha_fin+"</td>";
			datoshtml+="<td>"+p.proyectos[i].nombreU+"</td>";
			datoshtml+="<td><a href='#modal4' onclick='getByidActivity("+p.proyectos[i].id+")' class='modal-action waves-effect waves-green btn-flat' style='background-color:  #4da6ff'>actividades</a>";
			datoshtml+="<td><a onclick='GetProyectsDetails("+p.proyectos[i].id+")' class='modal-action waves-effect waves-green btn-flat' style='background-color:  #4da6ff' ><i class='material-icons'>mode_edit</i></a></td>";
			datoshtml+="<td><a onclick='remueveProyect("+p.proyectos[i].id+")' class='modal-action waves-effect waves-green btn-flat' style='background-color:  #4da6ff'><i class='material-icons right'>delete_forever</i></a>";
			datoshtml+="</tr>";
			$("#tablaProyect1").append(datoshtml); 
		}
	});
}

function getByidProyectUser(itemid){
  	$.get("http://localhost/INTECC/controllers/controller_proyect2.php?id="+itemid,function(data,status){
  	var p=JSON.parse(data);
		var datoshtml="";
		for(i=0;i<p.proyectos.length;i++){
			datoshtml="<tr>"
			datoshtml+="<td>"+p.proyectos[i].id+"</td>";
			datoshtml+="<td>"+p.proyectos[i].nombre+"</td>";
			datoshtml+="<td>"+p.proyectos[i].fecha_inicio+"</td>";
			datoshtml+="<td>"+p.proyectos[i].fecha_fin+"</td>";
			datoshtml+="<td>"+p.proyectos[i].nombreU+"</td>";
			datoshtml+="<td><a href='#modal4' onclick='getByidActivityUser("+p.proyectos[i].id+")' class='modal-action waves-effect waves-green btn-flat' style='background-color:  #4da6ff'>actividades</a>";
			datoshtml+="</tr>";
			$("#tablaProyect1").append(datoshtml); 
		}
	});
}
function agregaProyecto(){
		var nom=$("#txtNom").val();
		var FeI=$("#txtFeI").val();
		var FeF=$("#txtFeF").val();
		var IdUs=$("#txtidUse").val();
		var proyecto={      //La variable actor contiene los datos del json
					nombre: nom,
					fecha_inicio: FeI,
					fecha_fin: FeF,
					id_usuario: IdUs 
				  };

	$.ajax({
		type: "POST",
		url: "http://localhost/INTECC/controllers/controller_proyect.php",
				data: JSON.stringify(proyecto), //hacer la conversion a JSON para poder consumir el JSON
				dataType: "json",
				success: function(data,status){
					alert(data.mensaje);
					cargarItems2();
				}
			});
		$('#modal1').modal('close');
	}
function remueveProyect(itemid){
  	$.get("http://localhost/INTECC/controllers/controller_proyect1.php?id="+itemid,function(data,status){
  	var mensaje=JSON.parse(data);
	alert(mensaje.mensaje);
	cargarItems2();
  	});
}
function modificarProyect(){
		var idP=$("#txtid").val();
		var nom=$("#txtNom1").val();
		var FeI=$("#txtFeI1").val();
		var FeF=$("#txtFeF1").val();
		var IdUs=$("#txtidUse1").val();
		
		var proyecto={      //La variable actor contiene los datos del json
					id: idP,
					nombre: nom,
					fecha_inicio: FeI,
					fecha_fin: FeF,
					id_usuario: IdUs
				  };

	$.ajax({
		type: "POST",
		url: "http://localhost/INTECC/controllers/controller_proyect1.php",
				data: JSON.stringify(proyecto), //hacer la conversion a JSON para poder consumir el JSON
				dataType: "json",
				success: function(data,status){
					alert(data.mensaje);
					cargarItems2();
				}
			});
		$('#modal2').modal('close');
	}
/*------------------------------------------------------------------------------------------------------------------------------------------*/
function cargarItems3(){
	var f = new Date();
	var y = f.getFullYear();
	var m = f.getMonth()+1;
	var d = f.getDate();
	var f = y+"-"+m+"-"+d;
  	$.get("http://localhost/INTECC/controllers/controller_activity.php","",function(data,status)
  	{
		var p=JSON.parse(data);
		var datoshtml="";
		for(i=0;i<p.actividades.length;i++){
			datoshtml="<tr>"
			datoshtml+="<td>"+p.actividades[i].id+"</td>";
			datoshtml+="<td>"+p.actividades[i].nombreAc+"</td>";
			datoshtml+="<td>"+p.actividades[i].fecha_inicio+"</td>";
			datoshtml+="<td>"+p.actividades[i].fecha_fin+"</td>";
			datoshtml+="<td>"+p.actividades[i].etapa+"</td>";
			datoshtml+="<td>"+p.actividades[i].nombre+"</td>";
			datoshtml+="<td>"+restarFechas(f,p.actividades[i].fecha_fin)+"</td>";
			datoshtml+="<td><a onclick='GetActivitysDetails("+p.actividades[i].id+")' class='modal-action waves-effect waves-green btn-flat' style='background-color:  #4da6ff' ><i class='material-icons'>mode_edit</i></a></td>";
			datoshtml+="<td><a onclick='remueveActividad("+p.actividades[i].id+")' class='modal-action waves-effect waves-green btn-flat' style='background-color:  #4da6ff'><i class='material-icons right'>delete_forever</i></a>";
			datoshtml+="<td><a href='../db/descarga_archivo.php?id="+p.actividades[i].id+"' class='modal-action waves-effect waves-green btn-flat' style='background-color:  #4da6ff'><i class='material-icons right'>get_app</i></a>";
			datoshtml+="</tr>";
			$("#tablaActivity").append(datoshtml); 
		}
	});
}

function GetActivitysDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#txtid").val(id);
    $.post("http://localhost/INTECC/controllers/readActivityDetails.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var activity = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#txtNom1").val(activity.nombreAc);
            $("#txtFeI1").val(activity.fecha_inicio);
            $("#txtFeF1").val(activity.fecha_fin);
            $("#txtEtap1").val(activity.etapa);
            $("#txtidProy1").val(activity.id_proyecto);
        }
    );
    // Open modal popup
    $('#modal2').modal('open');
}
function GetActivitysDetails1(id) {
    // Add User ID to the hidden field for furture usage
    $("#txtUpdateid").val(id);
    $.post("http://localhost/INTECC/controllers/readActivityDetails.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var activity = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#txtUpdateNom1").val(activity.nombreAc);
            $("#txtUpdateFeI1").val(activity.fecha_inicio);
            $("#txtUpdateFeF1").val(activity.fecha_fin);
            $("#txtUpdateEtap1").val(activity.etapa);
            $("#txtUpdateidProy1").val(activity.id_proyecto);
        }
    );
    // Open modal popup
    $('#modal7').modal('open');
}

function getByidActivity(itemid){
	var f = new Date();
	var y = f.getFullYear();
	var m = f.getMonth()+1;
	var d = f.getDate();
	var f = y+"-"+m+"-"+d;
  	$.get("http://localhost/INTECC/controllers/controller_activity2.php?id="+itemid,function(data,status)
  	{
		var p=JSON.parse(data);
		var datoshtml="";
		for(i=0;i<p.actividades.length;i++){
			datoshtml="<tr>"
			datoshtml+="<td>"+p.actividades[i].id+"</td>";
			datoshtml+="<td>"+p.actividades[i].nombreAc+"</td>";
			datoshtml+="<td>"+p.actividades[i].fecha_inicio+"</td>";
			datoshtml+="<td>"+p.actividades[i].fecha_fin+"</td>";
			datoshtml+="<td>"+p.actividades[i].etapa+"</td>";
			datoshtml+="<td>"+p.actividades[i].nombre+"</td>";
			datoshtml+="<td>"+restarFechas(f,p.actividades[i].fecha_fin)+"</td>";
			datoshtml+="<td><a onclick='GetActivitysDetails1("+p.actividades[i].id+")' class='modal-action waves-effect waves-green btn-flat' style='background-color:  #4da6ff' ><i class='material-icons'>mode_edit</i></a></td>";
			datoshtml+="<td><a onclick='remueveActividad("+p.actividades[i].id+")' class='modal-action waves-effect waves-green btn-flat' style='background-color:  #4da6ff'><i class='material-icons right'>delete_forever</i></a>";
			datoshtml+="<td><a href='../db/descarga_archivo.php?id="+p.actividades[i].id+"' class='modal-action waves-effect waves-green btn-flat' style='background-color:  #4da6ff'><i class='material-icons right'>get_app</i></a>";
			datoshtml+="<td><a onclick='getComentariosByIdAdmin("+p.actividades[i].id+");GetIdComentario("+p.actividades[i].id+");' class='modal-action waves-effect waves-green btn-flat' style='background-color:  #4da6ff'><i class='material-icons right'>announcement</i></a>";
			datoshtml+="</tr>";
			$("#tablaActivity1").append(datoshtml); 
		}
	});
}

function getByidActivityUser(itemid){
	var f = new Date();
	var y = f.getFullYear();
	var m = f.getMonth()+1;
	var d = f.getDate();
	var f = y+"-"+m+"-"+d;
  	$.get("http://localhost/INTECC/controllers/controller_activity2.php?id="+itemid,function(data,status)
  	{
		var p=JSON.parse(data);
		var datoshtml="";
		for(i=0;i<p.actividades.length;i++){
			datoshtml="<tr>"
			datoshtml+="<td>"+p.actividades[i].id+"</td>";
			datoshtml+="<td>"+p.actividades[i].nombreAc+"</td>";
			datoshtml+="<td>"+p.actividades[i].fecha_inicio+"</td>";
			datoshtml+="<td>"+p.actividades[i].fecha_fin+"</td>";
			datoshtml+="<td>"+p.actividades[i].etapa+"</td>";
			datoshtml+="<td>"+p.actividades[i].nombre+"</td>";
			datoshtml+="<td>"+restarFechas(f,p.actividades[i].fecha_fin)+"</td>";
			datoshtml+="<td><form enctype='multipart/form-data' action='../db/guardar_archivo.php' method='post'><input type='hidden' name='idact' value='"+p.actividades[i].id+"'>"+Activarboton(p.actividades[i].fecha_fin,f)+"</form></td>";
			datoshtml+="<td><a onclick='getComentariosByIdAdmin("+p.actividades[i].id+");GetIdComentario("+p.actividades[i].id+");' class='modal-action waves-effect waves-green btn-flat' style='background-color:  #4da6ff'><i class='material-icons right'>announcement</i></a>";
			datoshtml+="</tr>";
			$("#tablaActivity1").append(datoshtml); 
		}
	});
}
function restarFechas(f1,f2) {
	var fActual = Date.parse(f1);
    var fFinal = Date.parse(f2);
    var fMasTres = fFinal + 259200000;
	var aux ="<i class='small material-icons' style='color: green'>info</i>";
	var aux1 ="<i class='small material-icons' style='color: red'>info</i>";
	var aux2 ="<i class='small material-icons' style='color: orange'>info</i>";
		if(fActual <= fFinal ){
			return aux;
		}
		else if (fActual > fFinal && fActual <= fMasTres ) {
			return aux2;
		}
		else if (fActual > fMasTres){
			return aux1;
		}
	}

function Activarboton(f1,f2) {
	var aux ="<input type='file' name='archivito'><input type='submit' value='Enviar archivo'>";
	var aux1 ="<input type='file' name='archivito' disabled><input type='submit' value='Enviar archivo' disabled>";
	if(Date.parse(f1) >= Date.parse(f2) ){
		//alert("hola");
		return aux;
	}
	else{
		//alert("puto");
		return aux1;
	}
}

function agregaActividad(){
		var nom=$("#txtNom").val();
		var FeI=$("#txtFeI").val();
		var FeF=$("#txtFeF").val();
		var et=$("#txtEtap").val();
		var IdPro=$("#txtIdProy").val();
		var actividad={      //La variable actor contiene los datos del json
					nombreAc: nom,
					fecha_inicio: FeI,
					fecha_fin: FeF,
					etapa: et,
					id_proyecto: IdPro
				  };

	$.ajax({
		type: "POST",
		url: "http://localhost/INTECC/controllers/controller_activity.php",
				data: JSON.stringify(actividad), //hacer la conversion a JSON para poder consumir el JSON
				dataType: "json",
				success: function(data,status){
					alert(data.mensaje);
					cargarItems3();
				}
			});
		$('#modal1').modal('close');
}
function remueveActividad(itemid){
  	$.get("http://localhost/INTECC/controllers/controller_activity1.php?id="+itemid,function(data,status){
  	var mensaje=JSON.parse(data);
	alert(mensaje.mensaje);
	cargarItems3();
  	});
}
function modificarActividad(){
		var idA=$("#txtid").val();
		var nom=$("#txtNom1").val();
		var FeI=$("#txtFeI1").val();
		var FeF=$("#txtFeF1").val();
		var et=$("#txtEtap1").val();
		var IdPro=$("#txtidProy1").val();
		
		var actividad={      //La variable actor contiene los datos del json
					id: idA,
					nombreAc: nom,
					fecha_inicio: FeI,
					fecha_fin: FeF,
					etapa: et,
					id_proyecto: IdPro
				  };

	$.ajax({
		type: "POST",
		url: "http://localhost/INTECC/controllers/controller_activity1.php",
				data: JSON.stringify(actividad), //hacer la conversion a JSON para poder consumir el JSON
				dataType: "json",
				success: function(data,status){
					alert(data.mensaje);
					cargarItems3();
				}
			});
		$('#modal2').modal('close');
	}
/*------------------------------------------------------------------------------------------------------------------------------------------*/
function cargarItems4(){
  	$.get("http://localhost/INTECC/controllers/controller_administrador.php","",function(data,status)
  	{
		var p=JSON.parse(data);
		var datoshtml="";
		for(i=0;i<p.administradores.length;i++){
			datoshtml="<tr>"
			datoshtml+="<td>"+p.administradores[i].id+"</td>";
			datoshtml+="<td>"+p.administradores[i].nombreA+"</td>";
			datoshtml+="<td>"+p.administradores[i].apellidop+"</td>";
			datoshtml+="<td>"+p.administradores[i].apellidom+"</td>";
			datoshtml+="<td>"+p.administradores[i].email+"</td>";
			datoshtml+="<td>"+p.administradores[i].telefono+"</td>";
			datoshtml+="<td><a onclick='remueveAdmistrador("+p.administradores[i].id+")' class='modal-action waves-effect waves-green btn-flat' style='background-color:  #4da6ff'><i class='material-icons right'>delete_forever</i></a></td>";
			datoshtml+="<td><a onclick='GetAdminDetails("+p.administradores[i].id+")' class='modal-action waves-effect waves-green btn-flat' style='background-color:  #4da6ff'><i class='material-icons right'>edit</i></a></td>";
			datoshtml+="</tr>";
			$("#tablaAdmin").append(datoshtml); 
		}
	});
}

function GetAdminDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#txtidAd").val(id);
    $.post("http://localhost/INTECC/controllers/readAdmiDetails.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var admin = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#txtNombre1").val(admin.nombreA);
            $("#txtApellidoP1").val(admin.apellidop);
            $("#txtApellidoM1").val(admin.apellidom);
            $("#txtCorreo1").val(admin.email);
            $("#txtContra1").val(admin.pass);
            $("#txtTel1").val(admin.telefono);
        }
    );
    // Open modal popup
    $('#modal2').modal('open');
}

function agregaAdminis(){
	var nom=$("#txtNombre").val();
	var apeP=$("#txtApellidoP").val();
	var apeM=$("#txtApellidoM").val();
	var correo=$("#txtCorreo").val();
	var contra=$("#txtContra").val();
	var tel=$("#txtTel").val();

	var administrador={      //La variable actor contiene los datos del json
				nombreA: nom,
				apellidop: apeP,
				apellidom: apeM,
				email: correo,
				pass: contra,
				telefono: tel,
			};
	$.ajax({
		type: "POST",
		url: "http://localhost/INTECC/controllers/controller_administrador.php",
		data: JSON.stringify(administrador), //hacer la conversion a JSON para poder consumir el JSON
		dataType: "json",
		success: function(data,status){
			alert(data.mensaje);
			cargarItems4();
			}
		});
	$('#modal1').modal('close');
}

function remueveAdmistrador(itemid){
  	$.get("http://localhost/INTECC/controllers/controller_administrador1.php?id="+itemid,function(data,status){
  	var mensaje=JSON.parse(data);
	alert(mensaje.mensaje);
	cargarItems4();
  	});

}

function modificarAdministrador(){
	var id_ad=$("#txtidAd").val();
	var nom=$("#txtNombre1").val();
	var apeP=$("#txtApellidoP1").val();
	var apeM=$("#txtApellidoM1").val();
	var correo=$("#txtCorreo1").val();
	var contra=$("#txtContra1").val();
	var tel=$("#txtTel1").val();

	var administrador={      //La variable actor contiene los datos del json
				id: id_ad,
				nombreA: nom,
				apellidop: apeP,
				apellidom: apeM,
				email: correo,
				pass: contra,
				telefono: tel,
			};
			
	$.ajax({
		type: "POST",
		url: "http://localhost/INTECC/controllers/controller_administrador1.php",
		data: JSON.stringify(administrador), //hacer la conversion a JSON para poder consumir el JSON
		dataType: "json",
		success: function(data,status){
			alert(data.mensaje);
			cargarItems4();
		}
	});
	$('#modal2').modal('close');
}
/*------------------------------------------------------------------------------------------------------------------------------*/
function GetIdComentario(id) {
    // Add User ID to the hidden field for furture usage
    $("#txtidActividad").val(id);
    $.post("http://localhost/INTECC/controllers/getComent.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var activity = JSON.parse(data);
            // Assing existing values to the modal popup fields
        }
    );
    // Open modal popup
    $('#modal8').modal('open');

}

function getComentariosByIdAdmin(itemid){
  	$.get("http://localhost/INTECC/controllers/tablaComentariosAdmin.php?id="+itemid,function(data,status)
  	{
		var p=JSON.parse(data);
		var datoshtml="";
		for(i=0;i<p.actividades.length;i++){
			datoshtml="<tr>"
			datoshtml+="<td>"+p.actividades[i].contenido+"</td>";		
			datoshtml+="</tr>";
			$("#tablaComentarios").append(datoshtml); 
		}
	});
	$('#modal8').modal('open');
}

function addComentario(){
	var id=$("#txtidActividad").val();
	var conte=$("#txtContenido").val();

	var comentario={      //La variable actor contiene los datos del json
				contenido: conte,
				id_actividad: id
			};
	$.ajax({
		type: "POST",
		url: "http://localhost/INTECC/controllers/tablaComentariosAdmin.php",
		data: JSON.stringify(comentario), //hacer la conversion a JSON para poder consumir el JSON
		dataType: "json",
		success: function(data,status){
			alert(data.mensaje);
			cargarItems4();
			}
		});
	$('#modal8').modal('close');
}