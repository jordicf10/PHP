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

	<form action="formArticulos.php" method="post">
	<!--<form action="articulos.php" method="post">-->
	<input type="submit" name="Anadir" value="Añade producto"></input> <a href="index.php">Volver</a><br>
	<!--<input type='hidden' name='edita' value="edita">
	<input type='hidden' name='borra' value="borra">-->

	<!--<a href="formArticulos.php" name="anadir" value="anadir">Añadir producto</a><a href="index.php">Volver</a><br>
	<a href="formArticulos.php" name="editar" value="editar">Editar producto</a><a href="index.php">Volver</a><br>
	<a href="formArticulos.php" name="borrar" value="borrar">Borrar producto</a><a href="index.php">Volver</a><br>-->



	</form>

	<form action="articulos.php" method="post">
	<table>	
		<tr>
			<!--<th input type='submit' name='idForm' value="idOrden"><input type='hidden' name='idForm' value="idOrden"><a href=''>ID</th>
			<th input type='submit' name='nombreForm' value="nombreOrden"><input type='hidden' name='nombreForm' value="nombreOrden"><a href=''>Nombre</th>
			<th input type='submit' name='costeForm' value="costeorden"><input type='hidden' name='costeForm' value="costeorden"><a href=''>Coste</th>
			<th input type='submit' name='precioForm' value="precioOrden"><input type='hidden' name='precioForm' value="precioOrden"><a href=''>Precio</th>
			<th input type='submit' name='categoriaForm' value="categoriaOrden"><input type='hidden' name='categoriaForm' value="categoriaOrden"><a href=''>Categoría</th>
			<th>Acciones</th>-->
			<th><a href="" name="idForm" value="idOrden">ID</a></th>
			<th><a href="" name="nombreForm" value="nombreOrden">Nombre</a></th>
			<th><a href="" name="costeForm" value="costeorden">Coste</a></th>
			<th><a href="" name="precioForm" value="precioOrden">Precio</a></th>
			<th><a href="" name="categoriaForm" value="categoriaOrden">Categoría</a></th>
			<th>Acciones</th>
		</tr>
	</form>

	


<?php
		/*if(isset($_POST['idForm'])){
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
		}*/


if(isset($_POST['Anadir'])){ 
 /*<form action="formArticulos.php" method="post">
	<input type="submit" id="Anadir" name="Anadir" value="Anadir"></input><a href="articulos.php">Volver</a>
	<?php*/
	anadirProducto($_POST['Nombre'],$_POST['Coste'],$_POST['Precio'],$_POST['Categoria']);
	echo "Producto añadido";
}


/*if(isset($_POST['editar'])){ ?>
<form action="formArticulos.php" method="post">
	<input type='submit' id='Editar' name='Editar' value='Editar'></input><a href='articulos.php'>Volver</a>
	<!--$ID = $_POST['editar'];
	$campos = mysqli_fetch_assoc(getProducto($ID));
	//foreach($campos as $columna){
		echo $columna['ProductID'];
		echo $columna['Name'];
		echo $columna['Cost'];
		echo $columna['Price'];
		echo $columna['CategoryID'];
		<?php
	}

	if(isset($_POST['borrar'])){ ?>
	<form action="formArticulos.php" method="post">
		<input type='submit' id='Borrar' name='Borrar' value='Borrar'></input><a href='articulos.php'>Volver</a>
		</form>
		<?php
		/*if(isset($_POST['ProductID'])){
			//$id = $_POST['ProductID'];
			borrarProducto($ID);
			echo "Se ha borrado el producto";*/

			$orden="";
		pintaProductos($orden);
			
		
	
	?>
		

</body>
</html>