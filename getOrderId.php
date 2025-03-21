<?php
    require "connection.php";
  
    $result = mysqli_query($con, "SELECT id FROM purchase");
    
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $maxId = $row["id"];
        }
        $maxId = $maxId + 1;
        echo $maxId;
    }
?>