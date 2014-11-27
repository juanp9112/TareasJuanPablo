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
		
		<?php include_once('menu.php'); ?>	
		
		
        
        <form action="insertar_alumno.php" method="post">
        
        	<label for="nombre">Nombre</label>
            <input type="text" name="nombre" value="" id="nombre">
            <br>
            
            
            <label for="a_materno">Apellido Materno</label>
            <input type="text" name="a_materno" value="" id="a_materno">
             <br>
             
            <label for="a_paterno">Apellido Paterno</label>
            <input type="text" name="a_paterno" value="" id="a_paterno">
             <br>
                        
            <label for="edad">Edad</label>
            <input type="text" name="edad" value="" id="edad">
             <br>
             
            <label for="cuenta">Cuenta</label>
            <input type="text" name="cuenta" value="" id="cuenta">
             <br>
             
            <label for="telefono">Telefono</label>
            <input type="text" name="telefono" value="" id="tel">
             <br>
             
            <label for="direccion">Direccion</label>
            <input type="text" name="direccion" value="" id="direc">
             <br>
        
        	<p><input type="submit" value="Crear Alumno"></p>
        </form>
		
	</body>
</html>