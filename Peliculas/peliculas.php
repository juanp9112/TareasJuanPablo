
<?php include_once ("variables.php");
	$titulo_pagina = "las mejores peliculas";
	$peliculas = mysql_query("SELECT * FROM peliculas");
?>
?>
    
<!doctype html>
<html>
<head>

<link href='fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="CSS/Estilo.css" type="text/css" charset="utf-8">
<meta charset="utf-8">
<title><?php echo $titulo_sitio; ?></title>


</head>

<body>
	<?php while($fila = mysql_fetch_array($paises)){ 
		echo $fila['id']. "-";
		echo $fila['pais'];
		echo "<br />";
		//imagen
		echo "img src= 'img src='img/peliculas/posters".#fila['poster']."'/>";
	
	} ?>

<header>
	<h1><?php echo $titulo_sitio; ?></h1>
    <?php include_once ("menu.php"); ?>
    
    
    
</header>

</body>
</html>
