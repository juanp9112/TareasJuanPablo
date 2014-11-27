<?php
	include_once('conexion.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo $titulo; ?></title>
	</head>
	<body>
		<h1><?php echo $titulo; ?> </h1>
		
		<?php include_once('menu.php'); 
			
			
			$n= $_POST['nombre'];
			
			$ap=$_POST['a_materno'];
			
			$am=$_POST['a_paterno'];
			
			$e= $_POST['edad'];
			
			$c= $_POST['cuenta'];
			
			$t= $_POST['telefono'];
			
			$d= $_POST['direccion'];
			
			mysql_query("INSERT INTO alumnos (nombre, apellido_materno, apellido_paterno, edad, cuenta, telefono, direccion)
			VALUES('$n', '$ap', '$am', $e, '$c', '$t', '$d')");
			
			header('location:alumnos.php');
		?>		
	</body>
</html>