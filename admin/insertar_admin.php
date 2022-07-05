<?php
	


	if(isset($_POST['agregar_admin'])){
		$usuario = $_POST['usuario'];
		$nombre = $_POST['nombre'];
		$password = $_POST['password'];

		$opciones = array(
			'cost' => 12

		);

		$password_hashed = password_hash($password, PASSWORD_BCRYPT, $opciones);

		try{
			include_once('funciones/funciones.html');
			$stmt = $conn->prepare("INSERT INTO admins (usuario, nombre, password) VALUES (?, ?, ?)");
			$stmt->bind_param("sss", $usuario, $nombre, $password_hashed);
			$stmt->execute();
			$stmt->close();
			$conn->close();
		}catch (Exception $e){
			echo "Error " . $e->getMessage();
		}
	
	
	
}