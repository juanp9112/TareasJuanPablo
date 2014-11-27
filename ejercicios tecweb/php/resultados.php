
<?php
	include_once ('conexion.php');
	$titulo = "Hola Mundo";
	
    ?>
    
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $titulo; ?></title>
</head>
<body>
	<h1><?php echo $titulo; ?></h1>

	<?php include_once('menu.php'); ?>
    
    
    <h3>RESULTADO POR GET</h3>
    
    
    <?php
		echo "la variable es: " . $_GET['id'];
	?>
</body>
</html>
