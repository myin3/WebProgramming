<?php 

    include 'db_connection.php';

    $mysqli = OpenCon();

    if(isset($_POST['submit'])){
        $user = fetch('username', 'loggedin');
        $username = $user['username'];
        if(isset($_POST['VIP'])){
            $parkingspot = isset($_POST['VIP']) ? $_POST['VIP'] : '';
            $query = "INSERT INTO shoppingcart(username, spot) VALUES(\"$username\", \"".$parkingspot."\")";
            execute_query($mysqli, $query);
            $query = "UPDATE user SET price=price+100 WHERE username=\"$username\"";
            $mysqli->query($query);
        }
        if(isset($_POST['parkingspot'])){
            $parkingspot = isset($_POST['parkingspot']) ? $_POST['parkingspot'] : '';
            $query = "INSERT INTO shoppingcart(username, spot) VALUES(\"$username\", \"".$parkingspot."\")";
            execute_query($mysqli, $query); 
        }



        // for ($i=1; $i <= 10; $i++) { 
        //     if (${"B$i"} != '') {
        //         // echo ${"A$i"};
        //         $query = "INSERT INTO shoppingcart(username, spot) VALUES(\"$username\", \"".${"B$i"}."\")";
        //         execute_query($mysqli, $query);
        //     }
        // }

        // for ($i=1; $i <= 10; $i++) { 
        //     if (${"C$i"} != '') {
        //         // echo ${"A$i"};
        //         $query = "INSERT INTO shoppingcart(username, spot) VALUES(\"$username\", \"".${"C$i"}."\")";
        //         execute_query($mysqli, $query);
        //     }
        // }
        
        // for ($i=1; $i <= 10; $i++) { 
        //     if (${"D$i"} != '') {
        //         // echo ${"A$i"};
        //         $query = "INSERT INTO shoppingcart(username, spot) VALUES(\"$username\", \"".${"D$i"}."\")";
        //         execute_query($mysqli, $query);
        //     }
        // }
    header("location:shoppingCart.php");
    exit();
    }
    ?>