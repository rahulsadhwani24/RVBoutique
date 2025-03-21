<?php
    require "connection.php";
    require "send.php";
    
    //$email = "rahulsadhwani24@gmail.com";
    $email = $_POST["email"];
    $subject = "RV - Forget Password";
    $qry = "select password from login where email like '$email'";
    $result = mysqli_query($con, $qry);
    
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $msg = "Your password is <b>".$row["password"]."</b><br><br>Note: Your password has been sent through mail so we recommend you to change your password from application for prior!!<br><br>Team RVBoutique.";
        
        mailer($email, $subject, $msg);
    }
    else{
        echo "Email id not registered";
    }
?>