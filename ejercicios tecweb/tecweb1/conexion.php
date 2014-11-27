<?php 
$conexion = mysql_connect('localhost','root','root');
if (!$conexion){
	die('no se pudo conectar:' . mysql_error());
	}
	
$bd = mysqul_select_db('alumnos' ,$conexion);
mysql_set_charset('utf-8', $conexion);
?>
	
	