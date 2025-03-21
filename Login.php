<?php
    require "connection.php";
    
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    
    //$email = "rahulsadhwani345@gmail.com";
    //$pass = "sadhwani";
    
    $qry = "select type from login where email like '$email' and password like '$pass'";
    
    $result = mysqli_query($con, $qry);
    
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $type = $row["type"];
        echo $type;
    }
    
    else{
        echo "Invalid Email or Password";
    }
?>