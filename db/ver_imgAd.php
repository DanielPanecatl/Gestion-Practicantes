<?php
require_once('conexion.php'); //importamos el archivo de conexión
//Funcion para recuperar el mime
function fObtenerMime($wfParamCadena){//creamos una función que recibira un parametro en este caso la extensión del archivo
    $fsExtension = $wfParamCadena;	
    if  ($fsExtension =='bmp'){ $mime = 'image/bmp'; }
    if  ($fsExtension =='gif' ){ $mime ='image/gif' ; }
    if  ($fsExtension =='jpe' ){ $mime ='image/jpeg' ; }
    if  ($fsExtension =='jpeg'){ $mime = 'image/jpeg' ; }
    if  ($fsExtension =='jpg' ){ $mime ='image/jpeg'; }
    if  ($fsExtension =='png' ){ $mime = 'image/png'; }    
    return $mime;//en base a su extenxión la function retornara un tipo de mime 
}


	$idImagen = $_GET['id']; //Recuperamos el prametro que contiene el id de la imagen que vamos a consultar.

	$resultado = mysql_query("SELECT estado FROM img WHERE id_usuario='".$idImagen."'",$conn);
	$fila = mysql_fetch_row($resultado);
	if ($fila[0]==1) {
		$result = mysqli_query($Conexion,"Select * from img where id_usuario = $idImagen");//Realizamos una consulta a la imagen seleccionada
		$imagen =  mysqli_fetch_assoc($result);//recuperamos los registros de la consulta
		$mime = fObtenerMime($imagen['extension']);//Obtenemos el mime del archivo.
		$contenido = $imagen['binario'];//Obtenemos el contenido almacenado en el campo Binario.
		
		header("Content-type:$mime");//le indicamos al navegador que tipo de información mostraremos.
		print $contenido; //Imprimimos el contenido.
	}
	else
	{
		echo"<script type=\"text/javascript\">
		alert('Aun no se ha agregado un diagrama !'); 
		window.location='../views/user_view.php';
		</script>";
	}

	
	mysqli_close($Conexion);//cerramos la conexión
?>