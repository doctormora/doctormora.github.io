<?php
	
require 'config.php';
require '../functions.php';

$conexion = conexion($bd_config);


if(!$conexion){
	header('Location: ../error.php');
}

$categorias = obtener_categorias($conexion);

require '../views/categorias.view.php';


?>