<?php
	include_once('conexion.php');
	$titulo = "GET Y POST";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo $titulo; ?></title>
	</head>
	<body>
		
		<?php include_once('menu.php'); 
			
			echo "La variable pasada por GET es : " . $_GET['nombre'];
			
			echo "La variable pasada por POST es : " . $_POST['id'];	
		?>		
	</body>
</html>