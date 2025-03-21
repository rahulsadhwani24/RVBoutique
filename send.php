<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;
        
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/Exception.php';
    require 'PHPMailer/SMTP.php';
    
    /*$a = "rvboutique123@gmail.com";
    $sub = "Testing";
    $msg = "Hello php mailer";
    
    echo mailer($a, $sub, $msg);*/
    
    function mailer($to, $subject, $message){
        $sender = "rvboutique123@gmail.com";
        $password = "ucuurrekdtxjmczk";
        
        $mail = new PHPMailer();
        $mail -> isSMTP();
        $mail -> Mailer = "smtp";
        //$mail -> SMTPDebug = 2;
        $mail -> Host = "smtp.gmail.com";
        $mail -> SMTPAuth = true;
        $mail -> SMTPSecure = "tls";
        $mail -> Port = 587;
        $mail -> isHTML(true);
        $mail -> Username = $sender;
        $mail -> Password = $password;
        
        $mail -> SetFrom($sender);
        $mail -> AddAddress($to);
        $mail -> Subject = $subject;
        $mail -> Body = $message;
    
        $mail-> send();
    }
        
        
?>