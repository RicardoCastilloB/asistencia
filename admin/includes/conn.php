<?php
	$conn = new mysqli('localhost', 'ricardo', 'Misbubus6', 'asistencia');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>