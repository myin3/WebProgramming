<?php


function OpenCon(){
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$db = 'finalproject';
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect Failed: %s\n". $conn -> error);
	return $conn;
}


function execute_query($mysqli, $query) {
	if ($mysqli->query($query) === TRUE) {
	  echo "Query added\n";
	} else {
	  echo "Query not added " . $mysqli->error;
	}
}

// function fetch(){
// 	$mysqli = OpenCon();
// 	$sql = "SELECT username FROM loggedin";
// 	$result = $mysqli->query($sql);
// 	$row = $result->fetch_assoc();
// 	return $row;
// }

function fetch($retrieve, $datatable){
	$mysqli = OpenCon();
	$sql = "SELECT ".$retrieve." FROM ".$datatable;
	$result = $mysqli->query($sql);
	$row = $result->fetch_assoc();
	return $row;
}


function CloseCon($conn){
	$conn -> close();
}
?>

