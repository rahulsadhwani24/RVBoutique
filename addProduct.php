<?php
    require "connection.php";
    
    /*$name = "black jeans";
    $price = "800";
    $categoryId = "1";*/
    $name = $_POST["name"];
    $price = $_POST["price"];
    $categoryId = $_POST["categoryId"];
    $description = $_POST["description"];
    $size = $_POST["size"];
    $quantity = $_POST["quantity"];
    $cgst = $_POST["cgst"];
    $sgst = $_POST["sgst"];
    $igst = $_POST["igst"];
    
    $query = "select cost, cid from products where name like '$name'";
    $res = mysqli_query($con, $query);
    
    if(mysqli_num_rows($res) > 0){
        while($row = mysqli_fetch_assoc($res)){
            $cost = $row["cost"];
            $category = $row["cid"];
        }
    }
    
    if($cost == $price && $category == $categoryId){
        echo "This product with same price and category already added!";
    }
    
    else{
        /*echo "Perfect";*/        
        $qry = "insert into products(name, cid, quantity, cost, cgst, sgst, igst, description, size)
            values('$name', '$categoryId', '$quantity', '$price', '$cgst', '$sgst', '$igst', '$description', '$size')";
    
        $result = mysqli_query($con, $qry);
        
        if($result){
            echo "Product added";
        }
        else{
            echo mysqli_error($con);
        }
    }
?>
