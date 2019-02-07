<?php
	session_start();

	$User1=$_POST["txtUser"];
	$Pass1=$_POST["txtPass"];
	$User2=$_POST["personal_user"];
	$Pass2=$_POST["personal_pass"];
	include("conexion.php");
	if ($User1 && $Pass1 != null) {
		$Consulta = $Conexion->query("SELECT * FROM administrador WHERE email='".$User1."' AND pass='".$Pass1."'");
		if($Resul = mysqli_fetch_array($Consulta))
		{
			$_SESSION["u_User1"] = $User1;
			$resultado = mysql_query("SELECT id FROM administrador WHERE email='".$User1."'",$conn);
			$fila = mysql_fetch_row($resultado);
			$_SESSION["u_User2"] = $fila[0];

			$resultado1 = mysql_query("SELECT nombreA,apellidop,apellidom FROM administrador WHERE email='".$User1."'",$conn);
			$fila1 = mysql_fetch_row($resultado1);
			$_SESSION["u_User5"] = $fila1[0]." ".$fila1[1]." ".$fila1[2];

			if($fila[0]==1)
			{
				header("Location: ../ui/inicio.php");
			}
			else
			{
				header("Location: ../ui/inicioa.php");
			}
		}
		else
		{
			echo"<script type=\"text/javascript\">alert('Contraseña o usuario invalido !'); window.location='../index.php';</script>";
		}
	}else{
		$Consulta = $Conexion->query("SELECT * FROM usuario WHERE email='".$User2."' AND pass='".$Pass2."'");
		$resultado = mysql_query("SELECT id FROM usuario WHERE email='".$User2."'",$conn);
		$fila1 = mysql_fetch_row($resultado);
		$_SESSION["u_User4"] = $fila1[0];

		$resultado1 = mysql_query("SELECT nombreU,apellidop,apellidom FROM usuario WHERE email='".$User2."'",$conn);
		$fila1 = mysql_fetch_row($resultado1);
		$_SESSION["u_User6"] = $fila1[0]." ".$fila1[1]." ".$fila1[2];
		if($Resul = mysqli_fetch_array($Consulta))
		{
			$_SESSION["u_User3"] = $User2;
			header("Location: ../ui/iniciou.php");
		}
		else
		{
			echo"<script type=\"text/javascript\">alert('Contraseña o usuario invalido !'); window.location='../index.php';</script>";
		}
	}
?>
