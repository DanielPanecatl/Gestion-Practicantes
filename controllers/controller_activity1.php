<?php
	require_once ('../models/model_activity.php');
	if($_SERVER['REQUEST_METHOD']=='GET'){
		if(isset($_GET['id'])){
			$parametro=$_GET['id'];
			$row=Activity::remove($parametro);
			if($row){
				$actividad['estado']=1;
				$actividad['actividad']=$row ;
				print json_encode($actividad);
				
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
		$idAc=$body['id'];
		$nom=$body['nombreAc'];
		$fec_i=$body['fecha_inicio'];
		$fec_n=$body['fecha_fin'];
		$etap=$body['etapa'];
		$idPr=$body['id_proyecto'];
		
	
		$row=Activity::edit($nom,$fec_i,$fec_n,$etap,$idPr,$idAc);
		if($row){
			$actividad['estado']=1;
			$actividad['mensaje']="Modificación exitosa!";
			print json_encode($actividad);
			
		}
		else{
			print json_encode(array(
			'estado'=>'2',
			'mensaje'=>'Error'));
		}
	}
?>