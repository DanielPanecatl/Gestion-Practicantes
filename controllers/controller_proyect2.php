<?php
	require_once ('../models/model_proyect.php');
	if($_SERVER['REQUEST_METHOD']=='GET'){
		if(isset($_GET['id'])){
			$parametro=$_GET['id'];
			$row=Proyect::getByidProyect($parametro);
			if($row){
				$proyecto['estado']=1;
				$proyecto['proyectos']=$row ;
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
?>