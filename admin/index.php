<?php

require 'config.php';
require '../functions.php';

$conexion = conexion($bd_config);

if(!$conexion){
	header('Location: ../error.php');
}


require '../views/admin_index.view.php';


?>

