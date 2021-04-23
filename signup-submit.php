<?php 

    include 'db_connection.php';

    $mysqli = OpenCon();

    if(isset($_POST['Submit'])){
        $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
        $Password = isset($_POST['Password']) ? $_POST['Password'] : '';  
        

        $result = "SELECT username, password FROM user WHERE username=\"$Username\" AND password=\"$Password\"";
        $num_rows = mysqli_num_rows(mysqli_query($mysqli, $result));
        echo "num_rows:".$num_rows;
        if($num_rows != 0){
            header("location:signup.php");
            exit;
        } 
        else {
            $query = "INSERT INTO user(username, password) VALUES(\"$Username\", \"$Password\")";
            execute_query($mysqli, $query);
            header("location:login.php");
            exit();
        }
    }
    ?>