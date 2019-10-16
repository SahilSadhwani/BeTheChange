<?php
require_once("../functions.php");
  global $connection;
    $product_id = $_GET['product_id'];
    $product_quantity = $_GET['quantity'];
    $ngo_id = $_GET['ngo_id'];
    $query = "Select * from product where product_id = $product_id";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
    $quantity = $row['product_quantity'];
    
    if($product_quantity>$quantity){
        $_SESSION['status']='sub';
        header("Location: products_display.php?ngo_id=$ngo_id&q=error");
        exit();
    }
else{
        $diff = $quantity - $product_quantity;
        $query1 = "Insert into purchase(user_id,ngo_id,product_id,status) values (1,$ngo_id,$product_id,'pending')";
        echo $query1;
        $resultset = mysqli_query($connection, $query1);
        $query2 = "Update product set product_quantity = $diff where product_id = $product_id";
        echo $query2;
        $result2 = mysqli_query($connection, $query2);
        header("Location: ../../../pay/index.php");
        exit();
    }
?>