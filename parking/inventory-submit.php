<?php 

    include 'db_connection.php';

    $mysqli = OpenCon();

    if(isset($_POST['submit'])){
        $A1 = isset($_POST['A1']) ? $_POST['A1'] : '';
        $A2 = isset($_POST['A2']) ? $_POST['A2'] : '';
        $A3 = isset($_POST['A3']) ? $_POST['A3'] : '';
        $A4 = isset($_POST['A4']) ? $_POST['A4'] : '';  
        $A5 = isset($_POST['A5']) ? $_POST['A5'] : '';
        $A6 = isset($_POST['A6']) ? $_POST['A6'] : '';
        $A7 = isset($_POST['A7']) ? $_POST['A7'] : '';
        $A8 = isset($_POST['A8']) ? $_POST['A8'] : ''; 
        $A9 = isset($_POST['A9']) ? $_POST['A9'] : '';
        $A10 = isset($_POST['A10']) ? $_POST['A10'] : '';

        $B1 = isset($_POST['B1']) ? $_POST['B1'] : '';
        $B2 = isset($_POST['B2']) ? $_POST['B2'] : '';
        $B3 = isset($_POST['B3']) ? $_POST['B3'] : '';
        $B4 = isset($_POST['B4']) ? $_POST['B4'] : '';  
        $B5 = isset($_POST['B5']) ? $_POST['B5'] : '';
        $B6 = isset($_POST['B6']) ? $_POST['B6'] : '';
        $B7 = isset($_POST['B7']) ? $_POST['B7'] : '';
        $B8 = isset($_POST['B8']) ? $_POST['B8'] : ''; 
        $B9 = isset($_POST['B9']) ? $_POST['B9'] : '';
        $B10 = isset($_POST['B10']) ? $_POST['B10'] : '';

        $C1 = isset($_POST['C1']) ? $_POST['C1'] : '';
        $C2 = isset($_POST['C2']) ? $_POST['C2'] : '';
        $C3 = isset($_POST['C3']) ? $_POST['C3'] : '';
        $C4 = isset($_POST['C4']) ? $_POST['C4'] : '';  
        $C5 = isset($_POST['C5']) ? $_POST['C5'] : '';
        $C6 = isset($_POST['C6']) ? $_POST['C6'] : '';
        $C7 = isset($_POST['C7']) ? $_POST['C7'] : '';
        $C8 = isset($_POST['C8']) ? $_POST['C8'] : ''; 
        $C9 = isset($_POST['C9']) ? $_POST['C9'] : '';
        $C10 = isset($_POST['C10']) ? $_POST['C10'] : '';

        $D1 = isset($_POST['D1']) ? $_POST['D1'] : '';
        $D2 = isset($_POST['D2']) ? $_POST['D2'] : '';
        $D3 = isset($_POST['D3']) ? $_POST['D3'] : '';
        $D4 = isset($_POST['D4']) ? $_POST['D4'] : '';  
        $D5 = isset($_POST['D5']) ? $_POST['D5'] : '';
        $D6 = isset($_POST['D6']) ? $_POST['D6'] : '';
        $D7 = isset($_POST['D7']) ? $_POST['D7'] : '';
        $D8 = isset($_POST['D8']) ? $_POST['D8'] : ''; 
        $D9 = isset($_POST['D9']) ? $_POST['D9'] : '';
        $D10 = isset($_POST['D10']) ? $_POST['D10'] : '';

        $user = fetch('username', 'loggedin');
        $username = $user['username'];

        for ($i=1; $i <= 10; $i++) { 
            if (${"A$i"} != '') {
                // echo ${"A$i"};
                $query = "INSERT INTO shoppingcart(username, spot) VALUES(\"$username\", \"".${"A$i"}."\")";
                execute_query($mysqli, $query);
            }
        }

        for ($i=1; $i <= 10; $i++) { 
            if (${"B$i"} != '') {
                // echo ${"A$i"};
                $query = "INSERT INTO shoppingcart(username, spot) VALUES(\"$username\", \"".${"B$i"}."\")";
                execute_query($mysqli, $query);
            }
        }

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