<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario de artículos</title>
</head>
<body>




<!--if(isset($_GET['Anadir'])){
	anadirProducto($_POST['Nombre'],$_POST['Coste'],$_POST['Precio'],$_POST['Categoria']);
	//echo "Producto añadido";
}


if(isset($_GET['Editar'])){
	$id = $_GET['Editar'];
	$campos = mysqli_fetch_assoc(getProducto($id));
	//foreach($campos as $columna){
		echo $columna['ProductID'];
		echo $columna['Name'];
		echo $columna['Cost'];
		echo $columna['Price'];
		echo $columna['CategoryID'];
	//}

	}else{
		$id = "";
		$campos = [
			"ProductID" => "",
			"Name" => "",
			"Cost" => "",
			"Price" => "",
			"CategoryID" => ""];

	}

	if(isset($_GET['Borrar'])){
		$id = $_GET['Borrar'];
		$campos = mysqli_fetch_assoc(getProducto($id));
		//foreach($campos as $columna){
			echo $columna['ProductID'];
			echo $columna['Name'];
			echo $columna['Cost'];
			echo $columna['Price'];
			echo $columna['CategoryID'];
		//}

		}else{
			$id = "";
			$campos = [
				"ProductID" => "",
				"Name" => "",
				"Cost" => "",
				"Price" => "",
				"CategoryID" => ""];

		}


/*if(isset($_POST['Borrar'])){
	if(isset($_POST['ProductID'])){
		//$id = $_POST['ProductID'];
		borrarProducto($_POST['ID']);
		echo "Se ha borrado el producto";
	}


	
}-->


	
	<form action="formArticulos.php" method="post">


		<label for="ID">ID: </label><input type="text" id="id" name="ID" disabled>
		<br><br>
		<label for="Nombre">Nombre: </label><input type="text" id="nombre" name="Nombre">
		<br><br>
		<label for="Coste">Coste: </label><input type="text" id="coste" name="Coste">
		<br><br>
		<label for="Precio">Precio: </label><input type="text" id="precio" name="Precio">
		<br><br>
		<label for="Categoria">Categoría: </label>
			<select name="Categoria" id="id">
				

				<!--getProductos($campos['CategoryID']);
				pintaCategorias($campos['CategoryID']);-->

				
				<option value="1">PANTALÓN</option>
				<option value="2">CAMISA</option>
				<option value="3">JERSEY</option>
				<option value="4">CHAQUETA</option>

				

				

			</select>
		<br><br>

		


		<?php if(isset($_POST['Anadir'])): ?>
			<input type="submit" id="anadir" name="anadir" value="anadir"></input><a href="articulos.php">Volver</a>
			<?php echo "He entrado en Añadir producto";
		endif ?>
		<?php if(isset($_POST['Editar'])): ?>
			<input type='submit' id='Editar' name='Editar' value='Editar'></input><a href='articulos.php'>Volver</a>
			<?php echo "He entrado en Editar producto";
		endif ?>
		<?php if(isset($_POST['Borrar'])): ?>
			<input type='submit' id='Borrar' name='Borrar' value='Borrar'></input><a href='articulos.php'>Volver</a>
			<?php echo "He entrado en Borrar producto";
		endif ?>



		<!--AQUEST FUNCIONA!!!!
		AQUEST FUNCIONA!!!!
		AQUEST FUNCIONA!!!!
		<input type='submit' id='borrar' name='Borrar' value='Borrar'> </input><a href='articulos.php'>Volver</a> AQUEST FUNCIONA!!!!
		AQUEST FUNCIONA!!!!
		AQUEST FUNCIONA!!!!
		AQUEST FUNCIONA!!!!-->
			
		<!--<input type='hidden' id='Anadir' name='Anadir' value=''></input><input type="submit" name="Anadir" value="Anadir"><a href='articulos.php'>Volver</a><br><br><br>
		<input type='hidden' id='Editar' name='Editar' value=''></input><input type="submit" name="Editar" value="Editar"><a href='articulos.php'>Volver</a><br><br><br>
		<input type='hidden' id='Borrar' name='Borrar' value=''></input><input type="submit" name="Borrar" value="Borrar"><a href='articulos.php'>Volver</a><br><br><br>-->

		<!--<input type='hidden' name='Anadir' value=''></input><input type="submit" name="Anadir" value="Anadir"><a href='articulos.php'>Volver</a>-->

		<!--<input type='submit' id='Anadir' name='Anadir' value='Anadir'> </input><a href='articulos.php'>Volver</a>-->
		
</form>
	
				<!--if(isset($_POST['Anadir'])){
					/*echo "'<input type='submit' id='enviar' name='Anadir' value='Añadir'></input><a href='articulos.php'>Volver</a>'";
					"'<br><br>'";*/

					//echo "
						"<form action='formArticulos.php' method='post'>	
						<input type='submit' id='enviar' name='Anadir' value='Añadir'></input><a href='formArticulos.php'>Volver</a>'
						</form>";
					//";
					

				}
				
				if(isset($_POST['Borrar'])){
					/*echo "'<input type='submit' id='borrar' name='Borrar' value='Borrar'></input><a href='articulos.php'>Volver</a>'";
					"'<br><br>'";*/

					//echo "
					"<form action='formArticulos.php' method='post'>	
					<input type='submit' id='borrar' name='Borrar' value='Borrar'></input><a href='formArticulos.php'>Volver</a>'
					</form>";
				//";




				//}-->
		


	<?php 

		include "funciones.php";

		if(isset($_POST['anadir'])){
			
			anadirProducto($_POST['Nombre'],$_POST['Coste'],$_POST['Precio'],$_POST['Categoria']);
			?><a href='articulos.php'>Volver</a><?php

		};

		
			

		/*if(isset($_POST['Editar'])){
			echo "<form action='formArticulos.php' method='post'>";
			echo "<input type='submit' id='Editar' name='Editar' value='Editar'> </input><a href='articulos.php'>Volver</a>";
			echo "</form>";
			$ID = $_POST['editar'];
			$campos = mysqli_fetch_assoc(getProducto($ID));
			//foreach($campos as $columna){
				echo $columna['ProductID'];
				echo $columna['Name'];
				echo $columna['Cost'];
				echo $columna['Price'];
				echo $columna['CategoryID'];
			}

			if(isset($_POST['Borrar'])){
				echo "<form action='formArticulos.php' method='post'>";
				echo "<input type='submit' id='Borrar' name='Borrar' value='Borrar'> </input><a href='articulos.php'>Volver</a>";
				echo "</form>";
				if(isset($_POST['ProductID'])){
					//$id = $_POST['ProductID'];
					borrarProducto($ID);
					echo "Se ha borrado el producto";
				}

			}*/

			/*}else{
				$ID = "";
				$campos = [
					"ProductID" => "",
					"Name" => "",
					"Cost" => "",
					"Price" => "",
					"CategoryID" => ""];

			}

			if(isset($_POST['borrar'])){
				$ID = $_POST['borrar'];
				$campos = mysqli_fetch_assoc(getProducto($ID));
				//foreach($campos as $columna){
					echo $columna['ProductID'];
					echo $columna['Name'];
					echo $columna['Cost'];
					echo $columna['Price'];
					echo $columna['CategoryID'];
				//}
	
				}else{
					$ID = "";
					$campos = [
						"ProductID" => "",
						"Name" => "",
						"Cost" => "",
						"Price" => "",
						"CategoryID" => ""];
	
				}*/

				/*if(isset($_POST['Anadir'])){
					if(isset($_POST['Categoria'])){
					pintaCategorias($defecto);
					}
				}*/

				/*if(isset($_POST['Anadir'])){
					anadirProducto($_POST['Nombre'],$_POST['Coste'],$_POST['Precio'],$_POST['Categoria']);*/
					/*if (anadirProducto($_POST['Nombre'],$_POST['Coste'],$_POST['Precio'],$_POST['Categoria'])){
						echo "<h1>Se ha añadido el producto</h1>";
						echo "<p>" . "Nombre: " . $_POST['Nombre'] . "</p>";
						echo "<p>" . "Coste: " . $_POST['Coste'] . "</p>";
						echo "<p>" . "Precio: " . $_POST['Precio'] . "</p>";
						echo "<p>" . "Categoria: " . $_POST['Categoria'] . "</p>";
					} else {
						echo "No se ha podido añadir el producto";
					}*/
					
				//}

				

		

			/*$id = $_POST['ID'];
			$nombre = $_POST['Name'];
			$coste = $_POST['Cost'];
			$precio = $_POST['Price'];
			$categoria = $_POST['CategoryID'];
			

			


			if(isset($_POST['Editar'])){
				$id = $_POST['Editar'];
				if($id>0){
					if(editarProducto($_POST['ID'], $_POST['Name'], $_POST['Cost'], $_POST['Price'], $_POST['CategoryID'])){
						echo "<h1> Se ha modificado el producto</h1>";
						echo "<p>" . $id . "</p>";
						echo "<p>" . $nombre . "</p>";
						echo "<p>" . $coste . "</p>";
						echo "<p>" . $precio . "</p>";
						echo "<p>" . $categoria . "</p>";
					}
				}else{
					echo "No se ha podido modificar";
				}*/

				/*if(isset($_POST['ProductID'])){
					//$id = $_POST['ProductID'];
					editarProducto();
					echo "Se ha editado el producto";
				}*/
			//}


			
		
	
	?>

	
</body>
</html>