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

						<!--<form action='formArticulos.php' method='get'>	-->
						<form action="articulos.php" method="post">
						<table>
							<tr>
								<th input type='submit' name='idForm' value="idOrden"><input type='hidden' name='idForm' value="idOrden"><a href=''>ID</th>
								<th input type='submit' name='nombreForm' value="nombreOrden"><input type='hidden' name='nombreForm' value="nombreOrden"><a href=''>Nombre</th>
								<th input type='submit' name='costeForm' value="costeorden"><input type='hidden' name='costeForm' value="costeorden"><a href=''>Coste</th>
								<th input type='submit' name='precioForm' value="precioOrden"><input type='hidden' name='precioForm' value="precioOrden"><a href=''>Precio</th>
								<th input type='submit' name='categoriaForm' value="categoriaOrden"><input type='hidden' name='categoriaForm' value="categoriaOrden"><a href=''>Categoría</th>
								<th>Acciones</th>
								</tr>
						</form>
						
					
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

		if(isset($_POST['idForm'])){
			$orden = "idOrden";
			//getProductos($orden);
		}else if(isset($_POST['nombreForm'])){
			$orden = "nombreOrden";
			//getProductos($orden);
		}else if(isset($_POST['costeForm'])){
			$orden = "costeOrden";
			//getProductos($orden);
		}else if(isset($_POST['precioform'])){
			$orden = "precioOrden";
			//getProductos($orden);
		}else if(isset($_POST['categoriaForm'])){
			$orden = "categoriaOrden";
			//getProductos($orden);
		}
		
		pintaProductos($orden);
			
		
	
	?>
		

</body>
</html>