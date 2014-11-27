
<?php
	include_once ('conexion.php');
	$titulo = "Hola Mundo";
	$licenciaturas = mysql_query("SELECT * FROM licenciaturas");
    ?>
    
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

	<meta charset="utf-8">
    <title><?php echo $titulo; ?></html></title>
</head>
<body>
	<h1><?php echo $titulo; ?></h1>

	<?php
		while($row = mysql_fetch_array($licenciaturas)){
	
		echo "<p>" . $row['nombre']."</p>";
		}
 	?>
</body>
</html>
