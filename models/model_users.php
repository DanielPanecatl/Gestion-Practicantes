<?php 
require_once('../db/database.php');
class Users{
	
	function _construct(){}
	public static function getAll(){
		$consulta="SELECT usuario.id,usuario.nombreU,usuario.apellidop,usuario.apellidom,usuario.email,usuario.telefono , administrador.nombreA from usuario INNER JOIN administrador ON usuario.id_administrador = administrador.id;";
		try{
			$comando=Database::getinstance()->getDb()->prepare($consulta);
			$comando->execute();
			return $comando->fetchAll(PDO::FETCH_ASSOC);
		}catch(PDOException $ex){
			return false;
		}
	}

	public static function getByid($id){
		$consulta="SELECT usuario.id,usuario.nombreU,usuario.apellidop,usuario.apellidom,usuario.email,usuario.telefono , administrador.nombreA from usuario INNER JOIN administrador ON usuario.id_administrador = administrador.id where id_administrador=?;";
		try{
			$comando=Database::getinstance()->getDb()->prepare($consulta);
			$comando->execute(array($id));
			return $comando->fetchAll(PDO::FETCH_ASSOC);
		}catch(PDOException $ex){
			return false;
		}
	}


	public static function add($name, $apell, $apellM, $cor, $con, $tele,$idAdmi){
		$consulta="INSERT INTO usuario (nombreU, apellidop, apellidom, email, pass, telefono,id_administrador) VALUES(?,?,?,?,?,?,?)";
		try{
			$comando=Database::getinstance()->getDb()->prepare($consulta);
			$comando->execute(array($name, $apell, $apellM, $cor, $con, $tele,$idAdmi));//pasar
			return $comando;
		}catch(PDOException $ex){
			return false;
		}
	}

	public static function remove($id){
		$consulta="DELETE FROM usuario WHERE id=?";
		try{
			$comando=Database::getinstance()->getDb()->prepare($consulta);
			$comando->execute(array($id));//pasar
			return $comando;
		}catch(PDOException $ex){
			return false;
		}
	}
	public static function edit($name, $apell, $apellM, $cor, $con, $tele,$idAdmi,$idUser){
		$consulta="UPDATE usuario SET nombreU=?, apellidop=?, apellidom=?, email=?, pass=?, telefono=?,id_administrador=? WHERE id=?";
		try{
			$comando=Database::getinstance()->getDb()->prepare($consulta);
			$comando->execute(array($name, $apell, $apellM, $cor, $con, $tele,$idAdmi,$idUser));//pasar
			return $comando;
		}catch(PDOException $ex){
			return false;
		}
	}
}
?>