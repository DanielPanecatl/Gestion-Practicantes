<?php
require_once('../db/conexion.php'); //importamos el archivo de conexión
	$idUser = $_GET['id']; //Recuperamos el prametro que contiene el id de la imagen que vamos a consultar.

	$resultado = mysql_query("SELECT estado FROM img WHERE id_usuario='".$idUser."'",$conn);
	$fila = mysql_fetch_row($resultado);
	if($fila[0]==1)
	{

		$resultado1 = mysql_query("SELECT id_usuario FROM img WHERE id_usuario='".$idUser."'",$conn);
		$fila1 = mysql_fetch_row($resultado1);
		if ($fila1[0]==$idUser)
		{
			$resultado2 = mysql_query("SELECT id_usuario FROM formulario WHERE id_usuario='".$idUser."'",$conn);
			$fila2 = mysql_fetch_row($resultado2);
			if ($fila2[0]!=$idUser) {
				$result = mysqli_query($Conexion,"INSERT INTO formulario(estado,id_usuario )values('1',$idUser)");//Realizamos una consulta a la
				if($result)
				{
					header("Location: ../views/user_view.php");
				}
				else
				{
					echo "no";
				}
					mysqli_close($Conexion);
			}
			else{
				echo"<script type=\"text/javascript\">
			alert('Este proyecto ya fue dado de alta !'); 
			window.location='../views/user_view.php';
			</script>";
			}
			//cerramos la conexión
		}
		else
		{
			echo"<script type=\"text/javascript\">
			alert('Este proyecto ya fue dado de alta !'); 
			window.location='../views/user_view.php';
			</script>";
		}
	}
	else
	{
		echo"<script type=\"text/javascript\">
		alert('Aun no se ha agregado un diagrama !'); 
		window.location='../views/user_view.php';
		</script>";
	}
?>