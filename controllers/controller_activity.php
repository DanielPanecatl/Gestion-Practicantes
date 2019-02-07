<?php
require_once ('../models/model_activity.php');
	if($_SERVER['REQUEST_METHOD']=='GET'){
		$actividad=Activity::getAll();
		if($actividad){
			$datos["estado"]=1;
			$datos["actividades"]=$actividad;
			print json_encode($datos);
		}
		else{
			print json_encode(array(
			"estado"=>2,
			"mensaje"=>"Ha ocurrido un problema"));
		}
	}
	else{
	
	$body = json_decode(file_get_contents("php://input"), true);
	// el parametro del body es el nombre de la variable en el json de actor_fun.js
		$nom=$body['nombreAc'];
		$fec_i=$body['fecha_inicio'];
		$fec_n=$body['fecha_fin'];
		$etap=$body['etapa'];
		$idpro=$body['id_proyecto'];
	
		$row=Activity::add($nom,$fec_i,$fec_n,$etap,$idpro);
		if($row){
			$actividad['estado']=1;
			$actividad['mensaje']="Almacenado exitoso!";
			print json_encode($actividad);
			
		}
		else{
			print json_encode(array(
			'estado'=>'2',
			'mensaje'=>'No se obtuvo la informacion'));
		}
	}
?>