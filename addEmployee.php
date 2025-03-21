<?php
    require "connection.php";
    
    /*
    $name = "Rahuls24";
    $email = "sadhwanirahu3@gmail.com";
    $number = "8149126137";
    $designation = "";
    $salary = "";
    $joining = "";
    $address = "";
    $birthdate = "";
    */
   
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $designation = $_POST["designation"];
    $salary = $_POST["salary"];
    $joining = $_POST["joining"];
    $address = $_POST["address"];
    $birthdate = $_POST["birthdate"];
    
    $query = "select ename from employee where ename like '$name'";
    $res = mysqli_query($con, $query);
    
    $query2 = "select email from employee where email like '$email'";
    $res2 = mysqli_query($con, $query2);
    
    $query3 = "select emobile from employee where emobile like '$number'";
    $res3 = mysqli_query($con, $query3);
    
    if(mysqli_num_rows($res) > 0){
        echo "Employee with the same name already registered!";
    }
    
    else if(mysqli_num_rows($res2) > 0){
        echo "This Email is already registered";
    }
    
    else if(mysqli_num_rows($res3) > 0){
        echo "This mobile number is already registered";
    }
    
    else{
        $qry = "insert into employee(ename, esalary, designation, dob, doj, eaddress, emobile, email)
                values('$name', '$salary', '$designation', '$birthdate', '$joining', '$address', '$number', '$email')";
        $result = mysqli_query($con, $qry);
        
        if($result){
            echo "Employee added";
        }
        else{
            echo mysqli_error($con);
        }
    }
    
?>
