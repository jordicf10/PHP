<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Articulos</title>
</head>
<body>

	<?php 

		include "funciones.php";

	?>

	<h1>Lista de artículos</h1>

	<form action="funciones.php" method="post">	
	<a href='formArticulos.php' name="anade">Añadir producto</a>       <a href='index.php'>Volver</a>

						<!--<form action='formArticulos.php' method='get'>	
						<table>
							<tr>
								<th name='idForm' value="ID"><a href=''>ID</th>
								<th name='nombreForm' value="Nombre"><a href=''>Nombre</th>
								<th name='costeForm' value="Coste"><a href=''>Coste</th>
								<th name='precioForm' value="Precio"><a href=''>Precio</th>
								<th name='categoríaForm' value="Categoría"><a href=''>Categoría</th>
								<th>Acciones</th>
								</tr>
						</form>-->
					
		<!--<label for="ID">ID</label><input type="text" id="id" name="Id">
		<br><br>
		<label for="Nombre">Nombre</label><input type="text" id="nombre" name="Nombre">
		<br><br>
		<label for="Coste">Coste</label><input type="number" id="coste" name="Coste">
		<br><br>
		<label for="Precio">Precio</label><input type="number" id="precio" name="Precio">
		<br><br>
		<label for="Categoría">Categoría</label>
			<select name="Categoria" id="id">
				<option value="1">PANTALÓN</option>
				<option value="1">CAMISA</option>
				<option value="1">JERSEY</option>
				<option value="4">CHAQUETA</option>

				 O enlloc dels option value, ficar un pintaCategorias($defecto);
			</select>
		<br><br>
		<label for="Acciones">Acciones</label>
		<a href='consultas.php'>Editar</td>\n
		<a href='consultas.php'>Borrar</td>\n-->
	</form>

	<?php 
        $orden = "";

		if(!isset($_GET['idForm'])){
			$orden = "idOrden";
		}else if(!isset($_GET['nombreOrden'])){
			$orden = "Nombre";
		}else if(!isset($_GET['costeOrden'])){
			$orden = "Coste";
		}else if(!isset($_GET['precioOrden'])){
			$orden = "Precio";
		}else if(!isset($_GET['categoriaOrden'])){
			$orden = "Categoria";
		}
		
			pintaProductos($orden);
		
	
	?>
		

</body>
</html>