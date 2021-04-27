<?php

	include 'db_connection.php';

	$mysqli = OpenCon();

	$row = fetch('username', 'loggedin');
	$result = "SELECT spot FROM shoppingcart WHERE username=\"".$row['username']."\"";



	$shoppingCart = $mysqli->query($result);?>
	<ul>
	<?php

	$query = "INSERT INTO orders(username, spot) SELECT * FROM shoppingcart WHERE username=\"".$row['username']."\"";
	execute_query($mysqli, $query);


	while($exit = $shoppingCart->fetch_assoc()){
		$query = "UPDATE parking SET avail=FALSE WHERE Spot=\"".$exit['spot']."\"";
		execute_query($mysqli, $query);
	}
	
    $query = "UPDATE user SET price=0 WHERE username=\"".$row['username']."\"";
    $mysqli->query($query);

    $query = "DELETE FROM shoppingcart WHERE 1";
	$mysqli->query($query);

	// $query = "DROP TABLE IF EXISTS shoppingcart"; 
	// execute_query($mysqli, $query);

	// $query = "CREATE TABLE shoppingcart(username varchar(20), seat varchar(20))";
	// execute_query($mysqli, $query);

	header("location:menu.php");

	CloseCon($mysqli);

?>