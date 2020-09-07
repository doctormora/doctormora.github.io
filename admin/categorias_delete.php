<?php

require 'config.php';
require '../functions.php';

$conexion = conexion($bd_config);
if(!$conexion){
	header('Location ../error.php');
}

$id = limpiarDatos($_GET['id']);

if(!$id){
	header('Location: ../error.php');
}
$statement = $conexion->prepare('DELETE FROM categorias WHERE id = :id');
$statement->execute(array('id' => $id));

header('Location: ' . RUTA . 'admin/categorias.php');

?>