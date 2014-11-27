<?php
include_once("variables.php");
$titulo_sitio = "Filtra por generos"
$mostrar = mysql_query("SESELECT ")	
?>

<!doctype html>
<hml>
<head>
	<link href='fonts.googleapis.com/css?family=Lato'rel='stylesheet' type='text/css'>
	
<link rel="stylesheet" href="CSS/estilo.css" type="text/css" charset="utf-8">
<meta charset="utf-8">

<title><?php echo $titulo_sitio; ?></title>

</head>
<body>
	
	<header>
		
		<h1><?php echo $titulo_sitio; ?></h1>
		<?php include_once("menu.php");?>
			
	</header>
	
</body>
</html>