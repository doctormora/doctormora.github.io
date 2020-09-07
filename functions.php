<?php
// funcion para conectar a la base de datos 
function conexion($bd_config){
		try{
		$conexion = new PDO('mysql:host=localhost;dbname='.$bd_config['basedatos'], $bd_config['usuario'], $bd_config['pass']);
			return $conexion;
	}catch (PDOException $e){
			return false;
	}
}

// funcion para limpiar los datos y evitar inyeccion sql
function limpiarDatos($datos){
	$datos = trim($datos);
	$datos = stripcslashes($datos);
	$datos = htmlspecialchars($datos);
	return $datos;
}


function obtener_categorias($conexion){
	$total_categorias = $conexion->prepare("SELECT * FROM categorias");
	$total_categorias->execute();
	return $total_categorias->fetchAll();
}



// funcion para obtener los post
function pagina_actual(){
	return isset($_GET['p']) ? (int)$_GET['p'] : 1;
}

function obtener_post($post_por_pagina, $conexion){
	$inicio = (pagina_actual() > 1) ? pagina_actual() * $post_por_pagina - $post_por_pagina : 0;
	$sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos LIMIT $inicio, $post_por_pagina");
	$sentencia->execute();
	return $sentencia->fetchAll();
}


function numero_paginas($post_por_pagina, $conexion){
	$total_post = $conexion->prepare('SELECT FOUND_ROWS() as total');
	$total_post->execute();
	$total_post = $total_post->fetch()['total'];
	
	$numero_paginas = ceil($total_post / $post_por_pagina);
	return $numero_paginas;
}





function id_categoria($id){
	return (int)limpiarDatos($id);
}


function obtener_categoria_por_id($conexion, $id){
	$resultado = $conexion->query("SELECT * FROM categorias where id = $id LIMIT 1");
	$resultado = $resultado->fetchAll();
	return ($resultado) ? $resultado : false;
}


function fecha($fecha){
	$timestamp = strtotime($fecha);
	$meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Noviembre', 'Diciembre'];
	$dia = date('d', $timestamp);
	$mes = date('m', $timestamp) - 1;
	$year = date ('Y', $timestamp);
	
	$fecha = "$dia de ". $meses[$mes] . " del $year";
	return $fecha;
}


function comprobarSession(){
	if(!isset($_SESSION['admin'])){
		header('Location: ' . RUTA);
	}
}


?>