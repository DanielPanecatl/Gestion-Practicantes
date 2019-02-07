<?php 
require_once('../db/database.php');
class Administrador{
	
	function _construct(){
		
	}
	
	public static function getAll(){
		$consulta="SELECT * FROM administrador";
		try{
			$comando=Database::getinstance()->getDb()->prepare($consulta);
			$comando->execute();
			return $comando->fetchAll(PDO::FETCH_ASSOC);
		}catch(PDOException $ex){
			return false;
		}
	}

	public static function add($name, $apellP, $apellM, $cor, $con, $tele){
		$consulta="INSERT INTO administrador (nombreA, apellidop, apellidom, email, pass, telefono) VALUES(?,?,?,?,?,?)";
		try{
			$comando=Database::getinstance()->getDb()->prepare($consulta);
			$comando->execute(array($name, $apellP, $apellM, $cor, $con, $tele));//pasar
			return $comando;
		}catch(PDOException $ex){
			return false;
		}
	}
	
	public static function remove($id){
		$consulta="DELETE FROM administrador WHERE id=?";
		try{
			$comando=Database::getinstance()->getDb()->prepare($consulta);
			$comando->execute(array($id));//pasar
			return $comando;
		}catch(PDOException $ex){
			return false;
		}
	}
	
	public static function edit($name, $apell, $apellM, $cor, $con, $tele,$idAdmi){
		$consulta="UPDATE administrador SET nombreA=?, apellidop=?, apellidom=?, email=?, pass=?, telefono=? WHERE id=?";
		try{
			$comando=Database::getinstance()->getDb()->prepare($consulta);
			$comando->execute(array($name, $apell, $apellM, $cor, $con, $tele,$idAdmi));//pasar
			return $comando;
		}catch(PDOException $ex){
			return false;
		}
	}
}
?>