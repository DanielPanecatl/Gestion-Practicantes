<?php
require_once ('../models/model_administrador.php');

	if($_SERVER['REQUEST_METHOD']=='GET'){
		$adm=Administrador::getAll();
		if($adm){
			$datos["estado"]=1;
			$datos["administradores"]=$adm;
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
		$name=$body['nombreA'];
		$apellP=$body['apellidop'];
		$apellM=$body['apellidom'];
		$cor=$body['email'];
		$con=$body['pass'];
		$tele=$body['telefono'];
	
		$row=Administrador::add($name, $apellP, $apellM, $cor, $con, $tele);
		if($row){
			$adm['estado']=1;
			$adm['mensaje']="Almacenado exitoso!";
			print json_encode($adm);
			
		}
		else{
			print json_encode(array(
			'estado'=>'2',
			'mensaje'=>'No se obtuvo la informacion'));
		}
	}
?>