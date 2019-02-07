<?php
include ('../db/conexion.php');
 $archivo = $_FILES["archivito"]["tmp_name"];
 $tamanio = $_FILES["archivito"]["size"];
 $tipo    = $_FILES["archivito"]["type"];
 $nombre  = $_FILES["archivito"]["name"];
 $idac  = $_POST["idact"];
 if ( $archivo != "none" )
 {
    $fp = fopen($archivo, "rb");
    $contenido = fread($fp, $tamanio);
    $contenido = addslashes($contenido);
    fclose($fp);
    $qry = "INSERT INTO archivos (id_actividad,nombre,contenido,tipo) 
    VALUES ('".$idac."','".$nombre."','".$contenido."','".$tipo."')";
    mysql_query($qry);
    if(mysql_affected_rows($conn) > 0)
       echo"<script type=\"text/javascript\">alert('Actividad enviada correctamente'); window.location='../ui/iniciou.php';</script>";
    else
       echo"<script type=\"text/javascript\">alert('Error al cargar actividad!'); window.location='../ui/iniciou.php';</script>";
 }
 else
    print "No se ha podido subir el archivo al servidor";
 ?>