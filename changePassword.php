<?php
    require "connection.php";
    require "send.php";
    
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    
    //$email = "admin@gmail.com";
    //$pass = "admin";
    
    $qry = "update login set password = '$pass' where email like '$email'";
    
    $result = mysqli_query($con, $qry);
    if($result){
        echo "Password changed, Login to continue!";
        $subject = "RV - Password Reset";
        $msg = "Your password has been updated succesfully.<br><br><br>Team RVBoutique.";
        mailer($email, $subject, $msg);
    }
    else{
        echo mysqli_error($con);
    }
?>