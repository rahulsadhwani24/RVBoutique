<?php
    require "connection.php";
    
    $name = $_POST["name"];
    
    //$name = "Punjabi";
  
    $qry = "select id from supplier where name = '$name'";
    
    $result = mysqli_query($con, $qry);
    
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo $row["id"];
        }
    }
?>