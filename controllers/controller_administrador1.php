<?php
	require_once ('../models/model_administrador.php');
	if($_SERVER['REQUEST_METHOD']=='GET'){
		if(isset($_GET['id'])){
			$parametro=$_GET['id'];
			$row=Administrador::remove($parametro);
			if($row){
				$adm['estado']=1;
				$adm['adm']=$row ;
				print json_encode($adm);
				
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
		$idAdmi=$body['id'];
		$name=$body['nombreA'];
		$apellP=$body['apellidop'];
		$apellM=$body['apellidom'];
		$cor=$body['email'];
		$con=$body['pass'];
		$tele=$body['telefono'];

		$row=Administrador::edit($name, $apellP, $apellM, $cor, $con, $tele,$idAdmi);
		
		if($row){
			$adm['estado']=1;
			$adm['mensaje']="Modificacion exitosa!";
			print json_encode($adm);
		}
		else{
			print json_encode(array(
			'estado'=>'2',
			'mensaje'=>'No se obtuvo la informacion'));
		}
	}
?>