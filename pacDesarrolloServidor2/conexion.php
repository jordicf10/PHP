<?php 




	function crearConexion() {
		/* Tengo que revisarlo todo!!!*/
		$host = "localhost";
		$user = "root";
		$pass = "";
		$baseDatos = "pac3_daw";

		$conexion = mysqli_connect($host, $user, $pass, $baseDatos);

		if($conexion){
			//echo "Establecida con éxito la conexión con la base de datos: " . $baseDatos . "<br>";   Lo tenía activado para ver si conectaba o no
			return $conexion;
			
		}else{
			die("Fallo en la conexión con la base de datos: " . $conexion.mysqli_connect_error());
		}

		/*if(isset($_POST['Enviar'])){
			if(strlen($_POST['Nombre']) >=1 && strlen($_POST['Correo']) >=1){

				$nombre = $_POST['Nombre'];
				$correo = $_POST['Correo'];
				$myquery = "SELECT * FROM user WHERE Fullname = '$nombre' AND Email = '$correo'";
				$consulta = mysqli_query($conexion, $myquery);
				
				if(mysqli_num_rows($consulta) > 0){    //Para saber el número de filas que devuelve. Si es mayor a 0 está bien, si no, la consulta no está bien hecha
					while($fila = mysqli_fetch_assoc($consulta)){
						echo "Bienvenido " . $fila['FullName'] . ". Pulsa " . "<a href='usuarios.php'>AQUÍ</a> para entrar al panel de usuarios.";
					}			
				}else{
					echo "No se ha podido realizar el login";
				}
			}
		}*/
	}

	
	

/* Tengo que revisarlo todo!!!*/

	function cerrarConexion($conexion) {
		mysqli_close($conexion);
		//echo "Conexión cerrada";   //Lo mismo que al crear, tenía el echo para saber si cerraba la conexión o no
	}

/* Tengo que revisarlo todo!!!*/
?>