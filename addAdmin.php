<?php
    require "connection.php";
    
    //$email = "admin@gmail.com";
    //$pass = "admin";
    
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    
    $query = "select email from login where email like '$email'";
    
    $res = mysqli_query($con, $query);
    
    if(mysqli_num_rows($res) > 0){
        echo "This email already registered";
    }
    else{
        //echo "account created";
        $qry = "insert into login(email, password, type)values('$email', '$pass', 'admin')";
    
        $result = mysqli_query($con, $qry);
    
        if($result){
            echo "added";
        }
        else{
            echo mysqli_error($con);
        }
    }
?>