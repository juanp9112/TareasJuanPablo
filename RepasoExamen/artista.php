<?php
include_once("variables.php");
$titulo_pagina= "Mejores Artistas"
//$artista = mysql_query("SELECT id, artista, genero FROM trashmetal");	


while($row = mysql_fetch_array($artista)){
	
	$lista_artista = $row['id']. "-"; $row['artista']; "<br/>";
	
}

$html ="<html>
		<head>
		</head>
		<body>". $lista_artista.
		"</body>
		</html>";
		
		echo $html;

		
?>
 
<!doctype html>
<hml>
<head>
	<link href='fonts.googleapis.com/css?family=Lato'rel='stylesheet' type='text/css'>
	
<link rel="stylesheet" href="CSS/estilo.css" type="text/css" charset="utf-8">
<meta charset="utf-8">

<title><?php echo $titulo_pagina; ?></title>

</head>
<body>
	<header>
		
		<h1><?php echo $titulo_pagina; ?></h1>
		<?php include_once("menu.php");?>
			
	</header>
	
	
	
	
	
	
</body>
</html>