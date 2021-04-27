<?php 

    include 'db_connection.php';

    $mysqli = OpenCon();

    $user = fetch('username', 'loggedin');
    echo $user['username'];

    $exit = "DELETE FROM loggedin WHERE username=\"".$user['username']."\"";
    execute_query($mysqli, $exit);
    header("location:menu.php");

    $query = "DELETE FROM shoppingcart WHERE 1";
    $mysqli->query($query);
?>