<?php
require_once ('../models/model_users.php');
	if($_SERVER['REQUEST_METHOD']=='GET'){
		$user=Users::getAll();
		if($user){
			$datos["estado"]=1;
			$datos["users"]=$user;
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
		$name=$body['nombreU'];
		$apellP=$body['apellidop'];
		$apellM=$body['apellidom'];
		$cor=$body['email'];
		$con=$body['pass'];
		$tele=$body['telefono'];
		$idAdmini=$body['id_administrador'];

		$row=Users::add($name, $apellP, $apellM, $cor, $con, $tele,$idAdmini);
		
		if($row){
			$user['estado']=1;
			$user['mensaje']="Almacenado exitoso!";
			print json_encode($user);
		}
		else{
			print json_encode(array(
			'estado'=>'2',
			'mensaje'=>'No se obtuvo la informacion'));
		}
	}
?>