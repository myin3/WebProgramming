<?php

	include 'db_connection.php';

	$mysqli = OpenCon();

	$row = fetch('username', 'loggedin');
	$result = "SELECT seat FROM shoppingcart WHERE username=\"".$row['username']."\"";

	$shoppingCart = $mysqli->query($result);?>
	<ul>
	<?php

	$query = "INSERT INTO orders(username, seat) SELECT * FROM shoppingcart WHERE username=\"".$row['username']."\"";
	execute_query($mysqli, $query);


	while($exit = $shoppingCart->fetch_assoc()){
		$query = "UPDATE flights SET avail=FALSE WHERE Seat=\"".$exit['seat']."\"";
		execute_query($mysqli, $query);
	}
	
	$query = "DROP TABLE IF EXISTS shoppingcart"; 
	execute_query($mysqli, $query);

	$query = "CREATE TABLE shoppingcart(username varchar(20), seat varchar(20))";
	execute_query($mysqli, $query);

	
	header("location:menu.php");

	CloseCon($mysqli);

?>
