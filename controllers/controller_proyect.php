<?php
require_once ('../models/model_proyect.php');
	if($_SERVER['REQUEST_METHOD']=='GET'){
		$proyecto=Proyect::getAll();
		if($proyecto){
			$datos["estado"]=1;
			$datos["proyectos"]=$proyecto;
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
		$nom=$body['nombre'];
		$fec_i=$body['fecha_inicio'];
		$fec_n=$body['fecha_fin'];
		$iduse=$body['id_usuario'];
	
		$row=Proyect::add($nom,$fec_i,$fec_n,$iduse);
		if($row){
			$proyecto['estado']=1;
			$proyecto['mensaje']="Almacenado exitoso!";
			print json_encode($proyecto);
			
		}
		else{
			print json_encode(array(
			'estado'=>'2',
			'mensaje'=>'No se obtuvo la informacion'));
		}
	}
?>