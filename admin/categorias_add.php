<?php

require 'config.php';
require '../functions.php';

$conexion = conexion($bd_config);

if(!$conexion){
	header('Location: ../error.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$nombre = limpiarDatos($_POST['nombre']);
	
	
	$statement = $conexion->prepare('INSERT INTO categorias (id, nombre) VALUES (null, :nombre)');
	
	$statement->execute(array(
		':nombre' => $nombre
	));
	
	header('Location: ' . RUTA . 'admin/categorias.php');
}







require '../views/categorias_add.view.php';

?>