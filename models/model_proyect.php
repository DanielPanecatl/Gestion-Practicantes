<?php 
require_once('../db/database.php');
class Proyect{
	
	function _construct(){}
	public static function getAll(){
		//$consulta="SELECT * FROM proyecto";
		$consulta="SELECT proyecto.id,proyecto.nombre,proyecto.fecha_inicio,proyecto.fecha_fin,usuario.nombreU
					FROM proyecto INNER JOIN usuario ON proyecto.id_usuario = usuario.id;";
		try{
			$comando=Database::getinstance()->getDb()->prepare($consulta);
			$comando->execute();
			return $comando->fetchAll(PDO::FETCH_ASSOC);
		}catch(PDOException $ex){
			return false;
		}
	}

	public static function getByidProyect($id){
		$consulta="SELECT proyecto.id,proyecto.nombre,proyecto.fecha_inicio,proyecto.fecha_fin,usuario.nombreU
					FROM proyecto INNER JOIN usuario ON proyecto.id_usuario = usuario.id WHERE id_usuario=?;";
		try{
			$comando=Database::getinstance()->getDb()->prepare($consulta);
			$comando->execute(array($id));
			return $comando->fetchAll(PDO::FETCH_ASSOC);
		}catch(PDOException $ex){
			return false;
		}
	}

	public static function add($nom,$fec_i,$fec_n,$iduse){
		$consulta="INSERT INTO proyecto (nombre,fecha_inicio,fecha_fin,id_usuario) VALUES(?,?,?,?)";
		try{
			$comando=Database::getinstance()->getDb()->prepare($consulta);
			$comando->execute(array($nom,$fec_i,$fec_n,$iduse));//pasar
			return $comando;
		}catch(PDOException $ex){
			return false;
		}
	}

	public static function remove($id){
		$consulta="DELETE FROM proyecto WHERE id=?";
		try{
			$comando=Database::getinstance()->getDb()->prepare($consulta);
			$comando->execute(array($id));//pasar
			return $comando;
		}catch(PDOException $ex){
			return false;
		}
	}

	public static function edit($nom,$fec_i,$fec_n,$iduse,$id){
		$consulta="UPDATE proyecto SET nombre=?,fecha_inicio=?,fecha_fin=?,id_usuario=? WHERE id=?";
		try{
			$comando=Database::getinstance()->getDb()->prepare($consulta);
			$comando->execute(array($nom,$fec_i,$fec_n,$iduse,$id));//pasar
			return $comando;
		}catch(PDOException $ex){
			return false;
		}
	}
}
?>