<?php 
$conexion = mysql_connect('localhost','root','root');

if(!$conexion){
	die('no se pudo conectar:' .mysql_error());
}
	
	
	
//! = simbolo de comparacion / si no se da
// die mata la conexion

$bd = mysql_select_db('cine', $conexion);
mysql_set_charset('utf-8', $conexion);

?>