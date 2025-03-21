<?php
    require "connection.php";
    
    $date = $_POST["date"];
    $productName = $_POST["productName"];
    $productId = $_POST["productId"];
    $productCost = $_POST["productCost"];
    $supplierName = $_POST["supplierName"];
    $supplierId = $_POST["supplierId"];
    $quantity = $_POST["quantity"];
    $totalAmount = $_POST["totalAmount"];
    
    $qry = "insert into purchase(prd_id, qty, sup_id, totalcost, date, sname, pname)
                values('$productId', '$quantity', '$supplierId', '$totalAmount', '$date', '$supplierName', '$productName')";
    
    $result = mysqli_query($con, $qry);
    
    if($result){
        $qry = "update products set quantity = '$quantity' where id = '$productId'";
        $res = mysqli_query($con, $qry);
        if($res){
            echo "Order placed";
        }
    }
    else{
        echo mysqli_error($con);
    }
?>
