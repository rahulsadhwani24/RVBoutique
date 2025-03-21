<?php
    $server = "sql12.freesqldatabase.com";
    $username = "sql12768803";
    $password = "9xryT8ZbZ6";
    $database = "sql12768803";
    
    $con = mysqli_connect($server, $username, $password, $database);
    if(!$con){
        echo "Please check your Internet connectivity";
    }
?>
