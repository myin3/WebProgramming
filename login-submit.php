<?php 

    include 'db_connection.php';

    $mysqli = OpenCon();

    if(isset($_POST['Submit'])){
        $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
        $Password = isset($_POST['Password']) ? $_POST['Password'] : '';  
        

        $result = "SELECT username, password FROM user WHERE username=\"$Username\" AND password=\"$Password\"";
        
        $query = "INSERT INTO loggedin(username) VALUES(\"$Username\")";
        execute_query($mysqli, $query);

        $num_rows = mysqli_num_rows(mysqli_query($mysqli, $result));
        if($num_rows != 0){
            header("location:user.php");
            exit;
        } else {
            header("location:login.php");
            exit();
        }
    }
    ?>