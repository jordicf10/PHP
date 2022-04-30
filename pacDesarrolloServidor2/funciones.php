<?php 

	include "consultas.php";


	function pintaCategorias($defecto) {
		// Completar...	
		//Obtenemos las categorías llamando a la función y las almacenamos en una variable
		$categorias = getCategorias();

		if(is_string($categorias)){
			echo $categorias;     //Si no hay categorías mostramos el mensaje de error
		}else{
				/*echo "<table>\n
						<tr>\n
							<th>Categoría</th>\n
						</tr>\n";*/
			/*echo "<table>\n
					<tr>\n
						<form action='formArticulos.php' method='post'>	
							<th>Categoría</th>\n
							</form>
					</tr>\n";*/

			while ($fila = mysqli_fetch_assoc($categorias)){
				
				foreach ($categorias as $columna) {
						echo "<tr>\n
							<form action='articulos.php' method='post'>	 
								<td><option value" . $columna['CategoryID'] . "</td>\n    
							</form>
						</tr>\n";
					/*if ($defecto == $categorias['CategoryID']){
						echo "<option selected='true' value='" . $fila["Name"] . "'>" . $fila["CategoryID"] . "</option>";
					
				}else{
					echo "<option value='" . $fila=["Name"] . "'>" . $fila["CategoryID"] . "</option>";
				}*/
			}

		}
	}
}
		
	

		
	function pintaTablaUsuarios(){
		// Completar...	

		//Obtenemos los usuarios llamando a la función y los almacenamos en una variable
		$usuarios = getListaUsuarios();

		if(is_string($usuarios)){
			echo $usuarios;     //Si no había usuarios mostramos el mensaje de error
		}else{
			echo "<table>\n
					<tr>\n
						<th>Nombre</th>\n
						<th>Email</th>\n
						<th>Autorizado</th>\n
					</tr>\n";

			while ($fila = mysqli_fetch_assoc($usuarios)){
				
					foreach ($usuarios as $columna) {
						if($columna['Enabled'] == 1){      //Si el campo Enabled de la tabla user tiene valor 1 lo imprimiremos con fondo naranja
							echo "<tr>\n
								<form action='usuarios.php' method='post'>	 
									<td>" . $columna['FullName'] . "</td>\n
									<td>" . $columna['Email'] . "</td>\n
									<td style= 'background-color: orange'>" . $columna['Enabled'] . "</td>\n     
								</form>
							</tr>\n";
						
						}else{                        // Si el valor de Enabled no es 1 no se pintará el fondo
							echo "<tr>\n
								<form action='usuarios.php' method='post'>	 
									<td>" . $columna['FullName'] . "</td>\n
									<td>" . $columna['Email'] . "</td>\n
									<td>" . $columna['Enabled'] . "</td>\n
								</form>
							</tr>\n";

						}
					}

						
			}
		
		echo "</table>";

		};
	

	}



		
	function pintaProductos($orden) {
		// Completar...	
		$productos = getProductos($orden);

		$conexion = crearConexion();
		$myquery = "SELECT * FROM product";
		$consulta = mysqli_query($conexion, $myquery);

		if(is_string($productos)) {
			echo $productos;
		}else if(mysqli_num_rows($consulta) > 0){    //Para saber el número de filas que devuelve. Si es mayor a 0 está bien, si no, la consulta no está bien hecha
			$fila = mysqli_fetch_assoc($consulta);
			/*echo "<table>\n
					<tr>\n
						<form action='formArticulos.php' method='post'>	
							<th><input type='hidden' name='ID' value='" . $fila["ProductID"] . "'><a href=''>ID</th>
							<th><input type='hidden' name='Nombre' value='" . $fila["Name"] . "'><a href=''>Nombre</th>
							<th><input type='hidden' name='Coste' value='" . $fila["Cost"] . "'><a href=''>Coste</th>
							<th><input type='hidden' name='Precio' value='" . $fila["Price"] . "'><a href=''>Precio</th>
							<th><input type='hidden' name='Categoría' value='" . $fila["CategoryID"] . "'><a href=''>Categoría</th>
							<th>Acciones</th>
						</form>
					</tr>\n";*/
					echo "<table>\n
					<tr>\n

						<form action='articulos.php' method='post'>	
							<th name='idForm' value='idOrden'><a href=''>ID</th>
							<th name='nombreForm' value='nombreOrden'><a href=''>Nombre</th>
							<th name='costeForm' value='costeOrden'><a href=''>Coste</th>
							<th name='precioForm' value='precioOrden'><a href=''>Precio</th>
							<th name='categoriaForm' value='categoriaOrden'><a href=''>Categoría</th>
							<th>Acciones</th>
						</form>
					</tr>\n";

					/*echo "<table>\n
					<tr>\n
						<form action='formArticulos.php' method='post'>	
							<th><input type='hidden' name='ID' value=''><a href=''>ID</th>
							<th><input type='hidden' name='Nombre' value=''><a href=''>Nombre</th>
							<th><input type='hidden' name='Coste' value=''><a href=''>Coste</th>
							<th><input type='hidden' name='Precio' value=''><a href=''>Precio</th>
							<th><input type='hidden' name='Categoría' value=''><a href=''>Categoría</th>
							<th>Acciones</th>
						</form>
					</tr>\n";*/

					
			//if($fila['Autenticación'] == 1){
				

					while($fila = mysqli_fetch_assoc($productos)){
						foreach ($productos as $columna) {
							echo "<tr>\n
								<form action='formArticulos.php' method='post'>	   
									<td>" . $columna['ProductID'] . "</td>\n
									<td>" . $columna['Name'] . "</td>\n
									<td>" . $columna['Cost'] . "</td>\n
									<td>" . $columna['Price'] . "</td>\n
									<td>" . $columna['CategoryID'] . "</td>\n
									<td>" . "<a href='formArticulos.php'>Editar</td>\n
									<td>" . "<a href='formArticulos.php'>Borrar</td>\n
									"/*<td><a href='formArticulos.php' >Editar</td><form action=formArticulos.php method='post><input type='hidden' name='Editar' value='". $columna["ProductID"] . "'>
									<td><a href='formArticulos.php' >Editar</td><form action=formArticulos.php method='post><input type='hidden' name='Editar' value='". $columna["ProductID"] . "'>
									"/*<td><a href='formArticulos.php?borrar = " . $columna["ProductID"] . "; ?>'>Borrar</td><form action=formArticulos.php method='post><input type='hidden' name='Borrar' value='". $columna["ProductID"] . "'>*/."
								</form>
							</tr>\n";
						}
					}
				
			
		
			/*}else{               
					while($fila = mysqli_fetch_assoc($productos)){
						foreach ($productos as $columna) {                         
							echo "<tr>\n
									<form action='formArticulos.php' method='post'>	   
											<td>" . $columna['ProductID'] . "</td>\n
											<td>" . $columna['Name'] . "</td>\n
											<td>" . $columna['Cost'] . "</td>\n
											<td>" . $columna['Price'] . "</td>\n
											<td>" . $columna['CategoryID'] . "</td>\n
									</form>
								</tr>\n";
						}				
					}
			}
		echo "</table>";*/
			
		};
//cerrarConexion($conexion);
	//if($orden == "ID"){
		crearConexion($conexion);
		//$myquery = "SELECT ProductID, Name, Cost, Price, CategoryID FROM product";
	
		while ($fila = mysqli_fetch_assoc($productos)){
	if($orden == "idForm"){
		//$consultaOrden = "SELECT ProductID, Name, Cost, Price, CategoryID FROM product ORDER BY ProductID DESC";
		$consultaOrden = "SELECT ProductID, Name, Cost, Price, CategoryID FROM product ORDER BY ProductID DESC";
	}else if($orden == "nombreForm"){
		$consultaOrden = "SELECT ProductID, Name, Cost, Price, CategoryID FROM product ORDER BY Name DESC";
	}else if($orden == "costeForm"){
		$consultaOrden = "SELECT ProductID, Name, Cost, Price, CategoryID FROM product ORDER BY Cost DESC";
	}else if($orden == "precioForm"){
		$consultaOrden = "SELECT ProductID, Name, Cost, Price, CategoryID FROM product ORDER BY Price DESC";
	}else if($orden == "categoríaForm"){
		$consultaOrden = "SELECT ProductID, Name, Cost, Price, CategoryID FROM product ORDER BY CategoryID DESC";
	}
	
	$myquery = mysqli_query($conexion, $consultaOrden);

	if(mysqli_num_rows($myquery) > 0){    //Para saber el número de filas que devuelve. Si es mayor a 0 está bien, si no, la consulta no está bien hecha
		return $myquery;			
	}else{
		echo "No hay nada en la lista de productos ";
	}
}

	cerrarConexion($conexion);
}


	

	



?>