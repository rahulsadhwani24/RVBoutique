<?php
    require "connection.php";
    
    $name = $_POST["name"];
    
    //$name = "Blue Jeans";
  
    $qry = "select id from products where name = '$name'";
    
    $result = mysqli_query($con, $qry);
    
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo $row["id"];
        }
    }
?>