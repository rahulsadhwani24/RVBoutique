<?php
    require "connection.php";
  
    $qry = "SELECT employee.ename FROM employee WHERE 
            NOT EXISTS (SELECT * FROM login WHERE login.email = employee.email)";
    
    $result = mysqli_query($con, $qry);
    
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo $row["ename"]."<br>";
        }
    }
?>