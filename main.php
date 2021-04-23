<?php

	include 'db_connection.php';

	$mysqli = OpenCon();

	$query = "DROP TABLE IF EXISTS flights"; 
	execute_query($mysqli, $query);
	$query = "CREATE TABLE flights(Id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, Seat varchar(20), avail boolean)";
	execute_query($mysqli, $query);

	//A seats

	$query = "INSERT INTO flights (Seat, avail) VALUES('A1', TRUE), ('A2', TRUE), ('A3', TRUE), ('A4', TRUE), ('A5', TRUE), ('A6', TRUE), ('A7', TRUE), ('A8', TRUE), ('A9', TRUE), ('A10', TRUE)";
	execute_query($mysqli, $query);


	//B seats

	$query = "INSERT INTO flights (Seat, avail) VALUES('B1', TRUE), ('B2', TRUE), ('B3', TRUE), ('B4', TRUE), ('B5', TRUE), ('B6', TRUE), ('B7', TRUE), ('B8', TRUE), ('B9', TRUE), ('B10', TRUE)";
	execute_query($mysqli, $query);

	//C seats

	$query = "INSERT INTO flights (Seat, avail) VALUES('C1', TRUE), ('C2', TRUE), ('C3', TRUE), ('C4', TRUE), ('C5', TRUE), ('C6', TRUE), ('C7', TRUE), ('C8', TRUE), ('C9', TRUE), ('C10', TRUE)";
	execute_query($mysqli, $query);

	//D seats

	$query = "INSERT INTO flights (Seat, avail) VALUES('D1', TRUE), ('D2', TRUE), ('D3', TRUE), ('D4', TRUE), ('D5', TRUE), ('D6', TRUE), ('D7', TRUE), ('D8', TRUE), ('D9', TRUE), ('D10', TRUE)";
	execute_query($mysqli, $query);

	$query = "DROP TABLE IF EXISTS user"; 
	execute_query($mysqli, $query);

	$query = "CREATE TABLE user(username varchar(20) PRIMARY KEY, password varchar(20))";
	execute_query($mysqli, $query);

	$query = "INSERT INTO user (username, password) VALUES('admin', 'admin')";
	execute_query($mysqli, $query);

	$query = "DROP TABLE IF EXISTS loggedin"; 
	execute_query($mysqli, $query);

	$query = "CREATE TABLE loggedin(username varchar(20) PRIMARY KEY)";
	execute_query($mysqli, $query);

	$query = "DROP TABLE IF EXISTS shoppingcart"; 
	execute_query($mysqli, $query);

	$query = "CREATE TABLE shoppingcart(username varchar(20), seat varchar(20))";
	execute_query($mysqli, $query);

	$query = "DROP TABLE IF EXISTS orders"; 
	execute_query($mysqli, $query);

	$query = "CREATE TABLE orders(username varchar(20) PRIMARY KEY, seat varchar(20))";
	execute_query($mysqli, $query);




	header("location:menu.php");

	CloseCon($mysqli);

?>