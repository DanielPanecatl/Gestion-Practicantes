<?php
	require_once ('../models/model_users.php');
	if($_SERVER['REQUEST_METHOD']=='GET'){
		if(isset($_GET['id'])){
			$parametro=$_GET['id'];
			$row=Users::remove($parametro);
			if($row){
				$user['estado']=1;
				$user['user']=$row ;
				print json_encode($user);
				
			}
			else{
				print json_encode(array(
				'estado'=>'2',
				'mensaje'=>'No se obtuvo la informacion'));
			}
		}
		else{
			print json_encode(array(
				'estado'=>'3',
				'mensaje'=>'Falta el id del producto'));
		}
    }
    else{
	$body = json_decode(file_get_contents("php://input"), true);
	// el parametro del body es el nombre de la variable en el json de actor_fun.js
		$idUse=$body['id'];
		$name=$body['nombreU'];
		$apellP=$body['apellidop'];
		$apellM=$body['apellidom'];
		$cor=$body['email'];
		$con=$body['pass'];
		$tele=$body['telefono'];
		$idAdmini=$body['id_administrador'];

		$row=Users::edit($name, $apellP, $apellM, $cor, $con, $tele,$idAdmini,$idUse);
		
		if($row){
			$user['estado']=1;
			$user['mensaje']="Modificacion exitosa!";
			print json_encode($user);
		}
		else{
			print json_encode(array(
			'estado'=>'2',
			'mensaje'=>'No se obtuvo la informacion'));
		}
	}
?>