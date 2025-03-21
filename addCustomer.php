<?php
    require "connection.php";
    
    /*$name = "Deepa 2";
    $email = "deepaahuja2@gmail.com";
    $number = "9087654322";
    $joining = "";
    $address = "";*/
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $joining = $_POST["joining"];
    $address = $_POST["address"];
    
    $query = "select name from customer where name like '$name'";
    $res = mysqli_query($con, $query);
    
    $query2 = "select email from customer where email like '$email'";
    $res2 = mysqli_query($con, $query2);
    
    $query3 = "select mobile from customer where mobile like '$number'";
    $res3 = mysqli_query($con, $query3);
    
    if(mysqli_num_rows($res) > 0){
        echo "Customer with the same name already registered!";
    }
    
    else if(mysqli_num_rows($res2) > 0){
        echo "This Email is already registered";
    }
    
    else if(mysqli_num_rows($res3) > 0){
        echo "This mobile number is already registered";
    }
    
    else{
        $qry = "insert into customer(name, email, since, address, mobile)
            values('$name', '$email', '$joining', '$address', '$number')";
        
        $result = mysqli_query($con, $qry);
        
        if($result){
            echo "Customer added";
        }
        else{
            echo mysqli_error($con);
        }
    }
?>
