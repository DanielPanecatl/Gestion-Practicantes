<?php
// include Database connection file
require_once ('../models/model_activity.php');
// check request
if($_SERVER['REQUEST_METHOD']=='GET'){
        if(isset($_GET['id'])){
            $parametro=$_GET['id'];
            $row=Activity::getByidComent($parametro);
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
    else{
    $body = json_decode(file_get_contents("php://input"), true);
    // el parametro del body es el nombre de la variable en el json de actor_fun.js
        $Conten=$body['contenido'];
        $id=$body['id_actividad'];
    
        $row=Activity::addComent($Conten,$id);
        if($row){
            $comentario['estado']=1;
            $comentario['mensaje']="Comentarios Enviado!";
            print json_encode($comentario);
            
        }
        else{
            print json_encode(array(
            'estado'=>'2',
            'mensaje'=>'Error'));
        }
    }
?>