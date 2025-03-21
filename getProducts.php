<?php
    require "connection.php";
  
    $qry = "select name from products";
    
    $result = mysqli_query($con, $qry);
    
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo $row["name"]."<br>";
        }
    }
?>