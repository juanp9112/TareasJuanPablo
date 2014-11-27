<?php 
 include_once('variables.php');
 $paises = mysql_query("SELECT * FROM paises");
?>

<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
		<title><?php echo $titulo_sitio; ?></title>
		<!--echo muestra lo almacenado en una variable-->
		
		<link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="style.css" type="text/css" charset="utf-8">
		
	</head>
	<body>
    
    <header>
		<h1><?php echo $titulo_sitio; ?> </h1>
		<br>
        
        <?php
			include_once('menu.php');
		?>	
    </header>
    
    <?php
        while($fila = mysql_fetch_array($paises)){
                    echo $fila['id'] . " - " . $fila['nombre'] . "<br/>";
                }
	?>
	</body>
</html>