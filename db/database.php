<?php
require_once('datac.php');
	$Conexion = new mysqli("localhost:3306","root","nfscnfsu2","intecc");
	$conn=mysql_connect("localhost:3306","root","nfscnfsu2");
    $seldb=mysql_select_db("intecc",$conn);
    
class database{
	private static $db=null;
	private static $pdo=null;
	final function _contruct(){
		try{
			self::getDB();
		}catch(PDOException $e){
			
		}
	}
	
	public static function getinstance(){
		if(self::$db==null){
			self::$db=new self();
		}
		return self::$db;
	}
	
	
	public function getDB(){
		if (self::$pdo == null) {
            self::$pdo = new PDO(
                'mysql:dbname=' . DATABASE .';host=' . SERVER .';port:3306;',USUARIO,PASSWORD,
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
            );

            // Habilitar excepciones
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return self::$pdo;
	}
	
	final protected function _clone(){
		
	}
	
	function destructor(){
		self::$pdo=null;
	}
}
?>