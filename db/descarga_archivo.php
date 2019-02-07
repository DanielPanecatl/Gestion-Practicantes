 <?php
include ('../db/conexion.php');

$extenciones = array("application/msword"=>"doc","application/pdf"=>"pdf","image/jpeg"=>"jpg", "application/rar"=>"rar");
$id = $_GET['id']; 


$resultado = mysql_query("SELECT id_actividad FROM archivos WHERE id_actividad=$id");
$fila1 = mysql_fetch_row($resultado);
if($fila1[0]==$id)
{
	$qry = "SELECT tipo, contenido, nombre FROM archivos WHERE id_actividad=$id";
	$res = mysql_query($qry);
	$tipo = mysql_result($res, 0, "tipo");
	$contenido = mysql_result($res, 0, "contenido");
	$nombre = mysql_result($res, 0, "nombre");

	 header("Content-type: $tipo");
	 header('Content-disposition: attachment; filename="'.$nombre.'.'.$extenciones[$type].'"'); 
	 echo $contenido; 
}
else
	echo"<script type=\"text/javascript\">alert('Aun no se ha subido una actividad'); window.location='../ui/inicioa.php';</script>";
?> 


