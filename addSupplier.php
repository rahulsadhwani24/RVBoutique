<?php
    require "connection.php";
    
   /* $name = "Punjabi2";
    $email = "akashdhembare23@gmail.com";
    $number = "9722134560";
    $joining = "";
    $address = "";*/
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $joining = $_POST["joining"];
    $address = $_POST["address"];
        
    $query = "select name from supplier where name like '$name'";
    $res = mysqli_query($con, $query);
    
    $query2 = "select email from supplier where email like '$email'";
    $res2 = mysqli_query($con, $query2);
    
    $query3 = "select mobile from supplier where mobile like '$number'";
    $res3 = mysqli_query($con, $query3);
    
    if(mysqli_num_rows($res) > 0){
        echo "Supplier with the same name already registered!";
    }
    
    else if(mysqli_num_rows($res2) > 0){
        echo "This Email is already registered";
    }
    
    else if(mysqli_num_rows($res3) > 0){
        echo "This mobile number is already registered";
    }
    
    else{
        $qry = "insert into supplier(name, email, joiningdate, address, mobile)
            values('$name', '$email', '$joining', '$address', '$number')";
        
        $result = mysqli_query($con, $qry);
        
        if($result){
            echo "Supplier added";
        }
        else{
            echo mysqli_error($con);
        }
    }
?>
