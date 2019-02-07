<?php
require_once('conexion.php'); //importamos el archivo de conexión
//Comienzo de lectura del archivo
	/*
		Comprovamos que se aya pasado un parametro: isset($_FILES['miArchivo'])
		Comprovamos que el parametro no esta vacio isset($_FILES['miArchivo'] !='')
	*/
	session_start();
	$id = $_SESSION["u_User4"];	
	if((isset($_FILES['miArchivo'])) && ($_FILES['miArchivo'] !='')){
		$file = $_FILES['miArchivo']; //Asignamos el contenido del parametro a una variable para su mejor manejo
		
		$temName = $file['tmp_name']; //Obtenemos el directorio temporal en donde se ha almacenado el archivo;
		$fileName = $file['name']; //Obtenemos el nombre del archivo
		$fileExtension = substr(strrchr($fileName, '.'), 1); //Obtenemos la extensión del archivo.
		
		//Comenzamos a extraer la información del archivo
		$fp = fopen($temName, "rb");//abrimos el archivo con permiso de lectura
		$contenido = fread($fp, filesize($temName));//leemos el contenido del archivo
		//Una vez leido el archivo se obtiene un string con caracteres especiales.
		$contenido = addslashes($contenido);//se escapan los caracteres especiales
		fclose($fp);//Cerramos el archivo
		
		$resultado = mysql_query("SELECT id_usuario FROM img WHERE id_usuario='".$id."'",$conn);
		$fila = mysql_fetch_row($resultado);

		if ($fila[0]!=$id) {
			$query = "INSERT INTO img (fileName ,extension ,binario,estado,id_usuario ) 
			VALUES ('$fileName' ,'$fileExtension' ,'$contenido','1','$id' )";
			//Ejecutando el Query
			$result = mysqli_query($Conexion, $query);
			echo"<script type=\"text/javascript\">
			alert('El diagrama se inserto con exito!'); 
			window.location='../ui/iniciou.php';
			</script>";
			mysqli_close($Conexion);//cerramos la conexión
		}
		else
		{
			echo"<script type=\"text/javascript\">
			alert('Ya existe un diagrama!'); 
			window.location='../ui/iniciou.php';
			</script>";
		}
		
	}
?>