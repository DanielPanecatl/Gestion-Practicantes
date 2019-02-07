<?php 
require_once('../db/database.php');
class Activity{
	
	function _construct(){}
	public static function getAll(){
		$consulta="SELECT actividad.id,actividad.nombreAc,actividad.fecha_inicio,actividad.fecha_fin,actividad.etapa,proyecto.nombre
		FROM actividad INNER JOIN proyecto on actividad.id_proyecto = proyecto.id;";
		try{
			$comando=Database::getinstance()->getDb()->prepare($consulta);
			$comando->execute();
			return $comando->fetchAll(PDO::FETCH_ASSOC);
		}catch(PDOException $ex){
			return false;
		}
	}

	public static function getByidActivity($id){
		$consulta="SELECT actividad.id,actividad.nombreAc,actividad.fecha_inicio,actividad.fecha_fin,actividad.etapa,proyecto.nombre
		FROM actividad INNER JOIN proyecto on actividad.id_proyecto = proyecto.id WHERE id_proyecto = ?;";
		try{
			$comando=Database::getinstance()->getDb()->prepare($consulta);
			$comando->execute(array($id));
			return $comando->fetchAll(PDO::FETCH_ASSOC);
		}catch(PDOException $ex){
			return false;
		}
	}

	public static function add($nom,$fec_i,$fec_n,$eta,$idpro){
		$consulta="INSERT INTO actividad (nombreAc,fecha_inicio,fecha_fin,etapa,id_proyecto) VALUES(?,?,?,?,?)";
		try{
			$comando=Database::getinstance()->getDb()->prepare($consulta);
			$comando->execute(array($nom,$fec_i,$fec_n,$eta,$idpro));//pasar
			return $comando;
		}catch(PDOException $ex){
			return false;
		}
	}

	public static function remove($id){
		$consulta="DELETE FROM actividad WHERE id=?";
		try{
			$comando=Database::getinstance()->getDb()->prepare($consulta);
			$comando->execute(array($id));//pasar
			return $comando;
		}catch(PDOException $ex){
			return false;
		}
	}

	public static function edit($nom,$fec_i,$fec_n,$eta,$idpro,$id){
		$consulta="UPDATE actividad SET nombreAc=?,fecha_inicio=?,fecha_fin=?,etapa=?,id_proyecto=? WHERE id=?";
		try{
			$comando=Database::getinstance()->getDb()->prepare($consulta);
			$comando->execute(array($nom,$fec_i,$fec_n,$eta,$idpro,$id));//pasar
			return $comando;
		}catch(PDOException $ex){
			return false;
		}
	}

	public static function getByidComent($id){
		$consulta="SELECT * FROM comentario WHERE id_actividad = ?;";
		try{
			$comando=Database::getinstance()->getDb()->prepare($consulta);
			$comando->execute(array($id));
			return $comando->fetchAll(PDO::FETCH_ASSOC);
		}catch(PDOException $ex){
			return false;
		}
	}
	public static function addComent($Conten,$id){
		$consulta="INSERT INTO comentario (contenido,id_actividad) VALUES(?,?)";
		try{
			$comando=Database::getinstance()->getDb()->prepare($consulta);
			$comando->execute(array($Conten,$id));//pasar
			return $comando;
		}catch(PDOException $ex){
			return false;
		}
	}
	
}
?>