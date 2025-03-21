<?php
    require "connection.php";
    require "send.php";
    
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    
    //$email = "test@abc.com";
    //$pass = "success";
    
    $qry = "insert into login(email, password, type)values('$email', '$pass', 'employee')";
    
    $result = mysqli_query($con, $qry);
    
    if($result){
        echo "Employee's account created";
        $subject = "RV - Creating Account";
        $msg = "Your account has been created successfully<br><br> You can login using<br>E-mail : ".$email." <br> Passwoord : ".$pass."<br><br>Note: This is auto generated password, We recommend you to change your password from application for prior!!<br><br>Team RVBoutique.";
        mailer($email, $subject, $msg);
    }
    else{
        echo mysqli_error($con);
    }
?>