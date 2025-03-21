<?php
    $server = "rvboutique.c4u3kbg9cpc1.us-east-1.rds.amazonaws.com";
    $username = "admin";
    $password = "Sadhwani2402";
    $database = "rvboutique";
    
    $con = mysqli_connect($server, $username, $password, $database);
    if(!$con){
        echo "Please check your Internet connectivity";
    }
?>