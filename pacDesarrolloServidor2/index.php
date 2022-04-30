<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="estilo.css" rel="stylesheet" type="text/css">
	<title>Index.php</title>
</head>
<body>
	
	<!--<div id="fondoPortada" class="fondoPortada">-->

		<h1>Welcome to Bazar Shop</h1>
		<!--<div id="usuarios" class="usuarios">-->
			<!--<form action="conexion.php" method="post">-->
			<form action="index.php" method="post">
				<label for="nombre">Usuario: </label><input type="text" id="Nombre" name="Nombre">
				<br><br>
				<label for="correo">Correo: </label><input type="email" id="Correo" name="Correo">
				<br><br>
				
				<input type="submit" id="enviar" name="Enviar" value="Enviar"><!--<a href="-->
				<br><br>
			</form>

			

		<!--</div>
		<div id="portada" class="portada" name="portada"></div>
	</div>-->

	<?php
	
	
	include "consultas.php";
	
	
	if(isset($_POST['Enviar'])){ 
		esAdminONo();
	}
				

		

	?>
	
	
</body>
</html>