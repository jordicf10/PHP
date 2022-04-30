<?php 

	include "conexion.php";

	
	/*session_start();
	

	$myquery = "SELECT * FROM user WHERE FullName = '$usuario' AND Email = '$correo'";
	$consulta = mysqli_query($conexion, $myquery);

	if(mysqli_num_rows($consulta) > 0){
		$fila = mysqli_fetch_assoc($consulta);
		echo "Hola" . $fila["FullName"];	
	}else{
		echo "El usuario no se encuentra en la base de datos";
	}*/

	function esAdminONo (){
		$conexion = crearConexion();
		$nombre= $_POST['Nombre'];
		$correo= $_POST['Correo'];


		$myquery = "SELECT * FROM user WHERE Fullname = '$_POST[Nombre]' AND Email = '$_POST[Correo]'";    //TOT AIXÒ ÉS PROVISIONAL, CREC QUE NO ÉS ADEQUAT FER UN $fila['UserID]==3 per trobar el superadmin
		$consulta = mysqli_query($conexion, $myquery);                                        //TOT AIXÒ ÉS PROVISIONAL, CREC QUE NO ÉS ADEQUAT FER UN $fila['UserID]==3 per trobar el superadmin
		if(isset($_POST['Enviar'])){      //Si se presiona Enviar							//TOT AIXÒ ÉS PROVISIONAL, CREC QUE NO ÉS ADEQUAT FER UN $fila['UserID]==3 per trobar el superadmin
			if(isset($_POST['Nombre']) && isset($_POST['Correo'])){	  // Si el tamaño de cada uno de los campos es mayor o igual a 1 es que hay texto
				if(mysqli_num_rows($consulta) > 0){    //Para saber el número de filas que devuelve. Si es mayor a 0 está bien, si no, la consulta no está bien hecha
					$fila = mysqli_fetch_assoc($consulta);	
					if(isset($fila['UserID'])){
						if($fila['UserID'] == 3){
							esSuperadmin($_POST["Nombre"],$_POST["Correo"]);					//TOT AIXÒ ÉS PROVISIONAL, CREC QUE NO ÉS ADEQUAT FER UN $fila['UserID]==3 per trobar el superadmin
						}else{																	//TOT AIXÒ ÉS PROVISIONAL, CREC QUE NO ÉS ADEQUAT FER UN $fila['UserID]==3 per trobar el superadmin
							tipoUsuario($_POST["Nombre"],$_POST["Correo"]);						//TOT AIXÒ ÉS PROVISIONAL, CREC QUE NO ÉS ADEQUAT FER UN $fila['UserID]==3 per trobar el superadmin
						}
					}
				}else{
						echo "El usuario no está registrado en el sistema."; 
				}	
			}	
		}
	}
	


	function tipoUsuario($nombre, $correo){
		// Completar...
		$conexion = crearConexion();
		$nombre = $_POST['Nombre'];
		$correo = $_POST['Correo'];
		$myquery = "SELECT * FROM user WHERE Fullname = '$nombre' AND Email = '$correo'";
		$consulta = mysqli_query($conexion, $myquery);

		if(isset($_POST['Enviar'])){      //Si se presiona Enviar
			if(isset($_POST['Nombre']) && isset($_POST['Correo'])){	  // Si el tamaño de cada uno de los campos es mayor o igual a 1 es que hay texto
				if(mysqli_num_rows($consulta) > 0){    //Para saber el número de filas que devuelve. Si es mayor a 0 está bien, si no, la consulta no está bien hecha
					$fila = mysqli_fetch_assoc($consulta);
					if($fila['Enabled'] == 1){
						echo "Bienvenido " . $fila['FullName'] . ". Pulsa " . "<a href='articulos.php'>AQUÍ</a> para entrar al panel de artículos.";
				}else{                                        //He puesto el datos incorrectos en la función añadida esAdminONo()
					echo "Bienvenido " . $fila['FullName'] . ". No tienes permisos para continuar.";      // Si los campos están mal escritos, o se introduce un correo que no corresponde al usuario, devolverá error
				}
			}
		
			}
		}
		cerrarConexion($conexion);
	}

	function esSuperadmin($nombre, $correo){
		// Completar...
		$conexion = crearConexion();
		$nombre = $_POST['Nombre'];
		$correo = $_POST['Correo'];
		$myquery = "SELECT * FROM pac3_daw.user su INNER JOIN pac3_daw.setup au ON au.SuperAdmin = su.UserID WHERE Fullname = '$nombre' AND Email = '$correo'";   //COMPROVADA AMB LA BASE DE DADES, ÉS CORRECTE
		$consulta = mysqli_query($conexion, $myquery);
		//$permisos = $_GET['Enabled'];
		
		if(isset($_POST['Enviar'])){      //Si se presiona Enviar
			if(isset($_POST['Nombre']) && isset($_POST['Correo'])){	  // Si el tamaño de cada uno de los campos es mayor o igual a 1 es que hay texto
				if(mysqli_num_rows($consulta) > 0){    //Para saber el número de filas que devuelve. Si es mayor a 0 está bien, si no, la consulta no está bien hecha
					$fila = mysqli_fetch_assoc($consulta);
					echo "Bienvenido " . $fila['FullName'] . ". Pulsa " . "<a href='usuarios.php'>AQUÍ</a> para entrar al panel de usuarios.";			
				}/*else{                                       //He puesto el datos incorrectos en la función añadida esAdminONo()
					echo "El usuario no está registrado en el sistema.";      // Si los campos están mal escritos, o se introduce un correo que no corresponde al usuario, devolverá error
				}*/
			}
		}
		cerrarConexion($conexion);
	}


	function getPermisos() {
		// Completar...	
		$conexion = crearConexion();
		$myquery = "SELECT Autenticación FROM setup";
		//$permisos = $_GET['Autenticación'];
		$consulta = mysqli_query($conexion, $myquery);

		if(mysqli_num_rows($consulta) > 0){    //Para saber el número de filas que devuelve. Si es mayor a 0 está bien, si no, la consulta no está bien hecha
			$fila = mysqli_fetch_assoc($consulta);
			echo $fila['Autenticación'];
				return $consulta;
		}else{
			echo "No se puede leer en la tabla setup";
		}

		cerrarConexion($conexion);
	}


	function cambiarPermisos() {
		// Completar...	
		$permisos = getPermisos();
		$conexion = crearConexion();
		$myquery = "SELECT Autenticación FROM setup";
		$consulta = mysqli_query($conexion, $myquery);

		/*if(is_string($permisos)) {
			echo $permisos;
		}else */if(mysqli_num_rows($consulta) > 0){    //Para saber el número de filas que devuelve. Si es mayor a 0 está bien, si no, la consulta no está bien hecha
			$fila = mysqli_fetch_assoc($consulta);
			if(isset($_POST['Cambiar'])){
					if($fila['Autenticación'] == 1){
						$cambio = "UPDATE setup set Autenticación = 0";
						return $cambio;
						echo "Los permisos actuales están a 0";
					}else{
						$cambio = "UPDATE setup set Autenticación = 1";
						return $cambio;
						echo "Los permisos actuales están a 1";
					}
		
			}else{
				echo "No se puede acceder a los usuarios";
			}
		}
		
		cerrarConexion($conexion);
	
	}	


	function getCategorias() {
		// Completar...	
		$conexion = crearConexion();
		$myquery = "SELECT CategoryID FROM product";  //AQUÍ TAMBÉ HAIG DE FER UN INNER JOIN
		//$myquery = "SELECT * FROM pac3_daw.product su INNER JOIN pac3_daw.category au ON au.Name = su.CategoryID";
		/*$nombre = $_POST['Name'];
		$categoria = $_POST['CategoryID'];
		$myquery = "SELECT Name, CategoryID FROM pac3_daw.product su INNER JOIN pac3_daw.category au ON au.Name = su.CategoryID WHERE Name = '$nombre' AND CategoryID = '$categoria'";*/
		//$myquery = "SELECT CategoryID FROM pac3_daw.product ca INNER JOIN pac3_daw.category na ON na.Name = ca.CategoryID";
		//"SELECT * FROM pac3_daw.user su INNER JOIN pac3_daw.setup au ON au.SuperAdmin = su.UserID WHERE Fullname = '$nombre' AND Email = '$correo'";
		$consulta = mysqli_query($conexion, $myquery);

		if(mysqli_num_rows($consulta) > 0){    //Para saber el número de filas que devuelve. Si es mayor a 0 está bien, si no, la consulta no está bien hecha
			while($fila = mysqli_fetch_assoc($consulta)){
				return $consulta;
			}			
		}else{
			echo "No se puede leer en la tabla category";
		}

		cerrarConexion($conexion);
	}


	function getListaUsuarios() {
		// Completar...	
		$conexion = crearConexion();
		$myquery = "SELECT FullName,Email,Enabled FROM user";
		$consulta = mysqli_query($conexion, $myquery);

		if(mysqli_num_rows($consulta) > 0){    //Para saber el número de filas que devuelve. Si es mayor a 0 está bien, si no, la consulta no está bien hecha
			while($fila = mysqli_fetch_assoc($consulta)){
				return $consulta;
			}			
		}else{
			echo "No se puede leer en la tabla user";
		}

		cerrarConexion($conexion);

	}


	function getProducto($ID) {
		// Completar...	
		$conexion = crearConexion();
		$myquery = "SELECT * FROM product WHERE ProductID = '$ID'";
		$consulta = mysqli_query($conexion, $myquery);

		if(mysqli_num_rows($consulta) > 0){    //Para saber el número de filas que devuelve. Si es mayor a 0 está bien, si no, la consulta no está bien hecha
			while($fila = mysqli_fetch_assoc($consulta)){
				return $consulta;
			}
		}else{
			echo "No se ha podido obtener el producto";
		}

		cerrarConexion($conexion);
	}


	function getProductos($orden) {
		// Completar...	
		$conexion = crearConexion();
		//$myquery = "SELECT * FROM product ORDER BY $orden";
		$myquery = "SELECT * FROM product";
		$consulta = mysqli_query($conexion, $myquery);

		if(mysqli_num_rows($consulta) > 0){    //Para saber el número de filas que devuelve. Si es mayor a 0 está bien, si no, la consulta no está bien hecha
			while($fila = mysqli_fetch_assoc($consulta)){
				return $consulta;
			}			
		}else{
			echo "No se puede leer en la tabla product";
		}
		
		cerrarConexion($conexion);

		$conexion = crearConexion($conexion);
		$consultaOrden = "";

		if($orden == "idForm"){
			//$consultaOrden = "SELECT ProductID, Name, Cost, Price, CategoryID FROM product ORDER BY ProductID DESC";
			$consultaOrden = "SELECT * FROM product ORDER BY ProductID DESC";
		}else if($orden == "nombreForm"){
			$consultaOrden = "SELECT * FROM product ORDER BY Name DESC";
		}else if($orden == "costeForm"){
			$consultaOrden = "SELECT * FROM product ORDER BY Cost DESC";
		}else if($orden == "precioForm"){
			$consultaOrden = "SELECT * FROM product ORDER BY Price DESC";
		}else if($orden == "categoriaForm"){
			$consultaOrden = "SELECT * FROM product ORDER BY CategoryID DESC";
		}
		
		$myquery = mysqli_query($conexion, $consultaOrden);
	
		if(mysqli_num_rows($myquery) > 0){    //Para saber el número de filas que devuelve. Si es mayor a 0 está bien, si no, la consulta no está bien hecha
			return $myquery;			
		}else{
			echo "No hay nada en la lista de productos ";
		}

		cerrarConexion($conexion);

	}


	function anadirProducto($nombre, $coste, $precio, $categoria) {
		// Completar...	
		$conexion = crearConexion();

		$nombre = $_POST['Nombre'];
		$coste = $_POST['Coste'];
		$precio = $_POST['Precio'];
		$categoria = $_POST['Categoria'];

		$myquery = "INSERT INTO product (Name, Cost, Price, CategoryID) VALUES ('$nombre', '$coste', '$precio', '$categoria')";
		$consulta = mysqli_query($conexion, $myquery);

		if(isset($_POST['Anadir']) && isset($nombre) && isset($coste) && isset($precio) && isset($categoria)){      //Si se presiona Enviar
			if(isset($_POST['Nombre']) && isset($_POST['Coste']) && isset($_POST['Precio']) && isset($_POST['Categoria'])){	  // Si el tamaño de cada uno de los campos es mayor o igual a 1 es que hay texto
				//if(isset($nombre) && isset($coste) && isset($precio) && isset($categoria)){
				//if(mysqli_num_rows($consulta) > 0){    //Para saber el número de filas que devuelve. Si es mayor a 0 está bien, si no, la consulta no está bien hecha
					if($consulta){ 
					//echo "Producto añadido";	
					return $consulta;
				}else{                                        //He puesto el datos incorrectos en la función añadida esAdminONo()
					echo "Rellena todos los campos para añadir un producto";
					//echo "No se ha podido añadir el producto";
				
				}
			}
			
			/*}else{
				
			
			echo "Se ha añadido el producto";
	}*/
}	
	cerrarConexion($conexion);

}
		
			/*if(isset($_POST['añadir'])){
				if(isset($nombre) && isset($coste) && isset($precio) && isset($categoria)){
					if($consulta){
						
						//echo "Se ha añadido el producto";
						return $consulta;
						
						
					}else{
						echo "Rellena todos los campos para añadir un producto";
					}	
				}else{
					echo "No se ha podido añadir el artículo";
			}
			}*/
			

			

	


	function borrarProducto($id) {
		// Completar...	
		$conexion = crearConexion();
		//$id = $_POST['ID'];
		/*$nombre = $_POST['Nombre'];
		$coste = $_POST['Coste'];
		$precio = $_POST['Precio'];
		$categoria = $_POST['Categoria'];*/

		
		$myquery = "DELETE FROM product WHERE ProductID = '" . $id . "'";
		$consulta = mysqli_query($conexion, $myquery);

		//if($consulta){
			if(isset($_POST['Borrar'])){
			//if(isset($nombre) && isset($coste) && isset($precio) && isset($categoria)){
				if($consulta){
					echo "El producto se ha eliminado";
					return $consulta;
				}
				
			}


		cerrarConexion($conexion);

	}


	function editarProducto($id, $nombre, $coste, $precio, $categoria) {
		// Completar...	
		$id = $_POST['ID'];
		$producto = getProducto($id);
		$conexion = crearConexion();
		$id = $_POST['Id'];
		$nombre = $_POST['Nombre'];
		$coste = $_POST['Coste'];
		$precio = $_POST['Precio'];
		$categoria = $_POST['Categoria'];


		
		$myquery = "UPDATE product SET Name = '" . '$nombre' . ", Cost =  '" . '$coste' . ", Price = '" . '$precio' .", CategoryID = '". '$categoria' ."' WHERE ProductID = '.$id' .";
		$consulta = mysqli_query($conexion, $myquery);

		//if($consulta){
			//if(isset($nombre) && isset($coste) && isset($precio) && isset($categoria)){
				if($consulta){
					return $consulta;
				}else{
					echo "Rellena todos los campos para añadir un producto";
				}	
			/*}else{
				echo "No se ha podido editar el artículo";*/
		//}

		cerrarConexion($conexion);

	}

?>