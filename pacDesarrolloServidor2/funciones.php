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
								<td><option value" . $columna['Name'] . "</td>\n    
							</form>
						</tr>\n";
					/*if ($defecto == $categorias['Name']){
						echo "<option selected='true' value='" . $columna["Name"] . "'>" . $fila["Name"] . "</option>";
					
				}else{
					echo "<option value='" . $columna["Name"] . "'>" . $columna["Name"] . "</option>";
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
									<td class='rojo'>" . $columna['Enabled'] . "</td>\n     
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

		/*$conexion = crearConexion();
		$myquery = "SELECT * FROM product";
		$consulta = mysqli_query($conexion, $myquery);*/

		if(is_string($productos)) {
			echo $productos;
		}else{ /*if(mysqli_num_rows($consulta) > 0){    //Para saber el número de filas que devuelve. Si es mayor a 0 está bien, si no, la consulta no está bien hecha
			$fila = mysqli_fetch_assoc($consulta);*/
					
			//if($fila['Autenticación'] == 1){

				/*echo "<table>\n
						<tr>\n
							<th><a href=formArticulos.php' . name .='idForm' . value='idOrden'></a>ID</th>\n	
							<th>Nombre</th>\n
							<th>Coste</th>\n
							<th>Precio</th>\n
							<th>Categoria</th>\n
							<th>Acciones</th>\n
						</tr>\n";*/
				

					while($fila = mysqli_fetch_assoc($productos)){
						foreach ($productos as $columna) {
							echo "<tr>\n
								<form action='formArticulos.php' method='post'>	   
									<td>" . $columna['ProductID'] . "</td>\n
									<td>" . $columna['Name'] . "</td>\n
									<td>" . $columna['Cost'] . "</td>\n
									<td>" . $columna['Price'] . "</td>\n
									<td>" . $columna['CategoryID'] . "</td>\n
									<td>" ?><input type="submit" name="Editar" value="Editar"><a href='formArticulos.php' name="Editar" value="Editar">Editar</a> <?php "</td>\n
									<td>" ?><input type="submit" name="Borrar" value="Borrar"><a href="formArticulos.php" name="Borrar" value="Borrar">Borrar</a><?php "</td>\n
								</form>
							</tr>\n";
						}
					}
				}
			}
		
			?>
											
	
											<!--
												a href='formArticulos.php' name='Borrar' value='Borrar-->