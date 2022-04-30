<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>Usuarios</title>
</head>
<body>

	
			<form action="usuarios.php" method="post">
				<p id="Permisos" name="Permisos">Los permisos actuales están a 1</p> 
				<input type="submit" id="cambiar" name="Cambiar" value="Cambiar permisos">
				<br><br>
				<a href='index.php'>Volver al inicio</a>
				<br>
				<!--<label for="nombre">Nombre</label><input type="text" id="Nombre" name="Nombre">
				<br><br>
				<label for="correo">Email</label><input type="email" id="Correo" name="Correo">
				<br><br>
				<label for="autorizado">Autorizado</label><input type="text" id="Autorizado" name="Autorizado">
				<br><br>-->
				
			</form>
	<?php 

		include "funciones.php";

		pintaTablaUsuarios();

		if(isset($_POST['Cambiar'])){ 
			cambiarPermisos();
		}





		

	?>

</body>
</html>