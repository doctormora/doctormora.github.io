<?php

require 'config.php';
require '../functions.php';


$conexion = conexion($bd_config);
if(!$conexion){
	header('Location: ../error.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$id = limpiarDatos($_POST['id']);
	$nombre = limpiarDatos($_POST['nombre']);
	
	
	$statement = $conexion->prepare('UPDATE  categorias SET nombre = :nombre  WHERE id = :id');
	
	$statement->execute(array(
	 ':id' => $id,
	 ':nombre' => $nombre
		
	));
	
	header('Location: ' . RUTA . 'admin/categorias.php');	

}else{
	$id_categoria = id_categoria($_GET['id']);
	
	if(empty($id_categoria)){
		header('Location: ' . RUTA . 'admin/categorias.php');
	}
	
	$cat = obtener_categoria_por_id($conexion, $id_categoria);
	
	if(!$cat){
		header('Location: ' . RUTA . 'admin/categorias.php');
	}
	
	$cat = $cat[0];
}


require '../views/categorias_edit.view.php';

?>