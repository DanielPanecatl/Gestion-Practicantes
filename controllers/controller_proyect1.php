<?php
	require_once ('../models/model_proyect.php');
	if($_SERVER['REQUEST_METHOD']=='GET'){
		if(isset($_GET['id'])){
			$parametro=$_GET['id'];
			$row=Proyect::remove($parametro);
			if($row){
				$proyecto['estado']=1;
				$proyecto['proyecto']=$row ;
				print json_encode($proyecto);
				
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
		$idPr=$body['id'];
		$nom=$body['nombre'];
		$fec_i=$body['fecha_inicio'];
		$fec_n=$body['fecha_fin'];
		$iduse=$body['id_usuario'];
		
	
		$row=Proyect::edit($nom,$fec_i,$fec_n,$iduse,$idPr);
		if($row){
			$proyecto['estado']=1;
			$proyecto['mensaje']="Modificación exitosa!";
			print json_encode($proyecto);
			
		}
		else{
			print json_encode(array(
			'estado'=>'2',
			'mensaje'=>'No se obtuvo la informacion'));
		}
	}
?>