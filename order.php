<?php

	include 'db_connection.php';

	$mysqli = OpenCon();

	$row = fetch('seat', 'orders');
	$seat = $row['seat'];

	$value = "SELECT * FROM flights";
	execute_query($mysqli, $value);

	$query = "UPDATE flights SET avail=FALSE WHERE Seat=\"$seat\"";
	execute_query($mysqli, $query);

	CloseCon($mysqli);

?>