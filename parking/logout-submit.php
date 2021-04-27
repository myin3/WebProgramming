<?php 

    include 'db_connection.php';

    $mysqli = OpenCon();

    $user = fetch('username', 'loggedin');
    echo $user['username'];

    $exit = "DELETE FROM loggedin WHERE username=\"".$user['username']."\"";
    execute_query($mysqli, $exit);
    header("location:menu.php");

	$query = "DROP TABLE IF EXISTS shoppingcart"; 
	execute_query($mysqli, $query);

	$query = "CREATE TABLE shoppingcart(username varchar(20), seat varchar(20))";
	execute_query($mysqli, $query);

?>