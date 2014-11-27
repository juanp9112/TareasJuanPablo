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
			
			
			$url_id= $_GET['ID'];
			
			
			mysql_query("delete INTO alumnos WHERE id=$url_id");
			
			header('location:alumnos.php');
		?>		
	</body>
</html>