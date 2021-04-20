<?php

$host = "codd.cs.gsu.edu:22"; 
$user = ""; 
$pass = ""; 
$db = "codd"; 

function execute_query($mysqli, $query) {
	if ($mysqli->query($query) === TRUE) {
	  echo "Query Executed\n";
	} else {
	  echo "Query Failed " . $mysqli->error;
	}
}

$mysqli = new mysqli($host, $user, $pass, $db);

if (!$mysqli) {
    echo "Could not connect to server\n";
    trigger_error(mysqli_error(mysqli), E_USER_ERROR);
} else {
    echo "Connection established\n"; 
}

$query = "DROP TABLE IF EXISTS Cars"; 
execute_query($mysqli, $query);

$query = "CREATE TABLE Cars(Id INT PRIMARY KEY, Name TEXT, 
    Price INT) ENGINE=InnoDB";
execute_query($mysqli, $query);

$query = "INSERT INTO Cars VALUES(1,'Audi',52642)";
execute_query($mysqli, $query);

// $query = "INSERT INTO Cars VALUES(2,'Mercedes',57127)";
// execute_query($query);

// $query = "INSERT INTO Cars VALUES(3,'Skoda',9000)";
// execute_query($query);

// $query = "INSERT INTO Cars VALUES(4,'Volvo',29000)";
// execute_query($query);

// $query = "INSERT INTO Cars VALUES(5,'Bentley',350000)";
// execute_query($query);

// $query = "INSERT INTO Cars VALUES(6,'Citroen',21000)";
// execute_query($query);

// $query = "INSERT INTO Cars VALUES(7,'Hummer',41400)";
// execute_query($query);

// $query = "INSERT INTO Cars VALUES(8,'Volkswagen',21600)";
// execute_query($query);

mysqli_close(mysqli);

?>