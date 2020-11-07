<?php

	$conn = new mysqli('localhost', 'root', '', 'charkasp');

	if($conn->connect_error){
		echo $error -> $conn->connect_error;
	}

?>