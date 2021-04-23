<?php

	include 'db_connection.php';

	$mysqli = OpenCon();

	$row = fetch('username', 'loggedin');
	$result = "SELECT seat FROM shoppingcart WHERE username=\"".$row['username']."\"";

	$shoppingCart = $mysqli->query($result);?>
	<ul>
	<?php

	$query = "INSERT INTO orders(username, seat) SELECT * FROM shoppingcart WHERE username=\"".$row['username']."\"";


	while($exit = $shoppingCart->fetch_assoc()){
		$query = "UPDATE flights SET avail=FALSE WHERE Seat=\"".$exit['seat']."\"";
		execute_query($mysqli, $query);
	}
	
	

	CloseCon($mysqli);

?>