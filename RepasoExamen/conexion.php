<?php
$conexion = mysql_connect('localhost','root',,'root');


//! = simbolo de comparacion / si no se da
// die mata la conexion
if(!conexion){
	
	die('no se pudo conectar'. mysql_error());
	
}
$bd= mysql_select_db('rock', $conexion);
	mysql_set_charset('utf-8', $conexion);
	
?>