<?php
	require_once ('../models/model_activity.php');
	if($_SERVER['REQUEST_METHOD']=='GET'){
		if(isset($_GET['id'])){
			$parametro=$_GET['id'];
			$row=Activity::getByidActivity($parametro);
			if($row){
				$actividad['estado']=1;
				$actividad['actividades']=$row ;
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
?>