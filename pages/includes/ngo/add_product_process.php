<?php
 require_once("../functions.php");
//$ngo_id=1;   //get
if(isset($_SESSION["ngo_id"])){
    $ngo_id = $_SESSION['ngo_id'];
}
global $connection;
if(isset($_POST['add_product']))
{
//    echo "here";  
    $product_name = $_POST['product_name'];
    $product_details = $_POST['product_details'];
    $product_category = $_POST['product_category'];
    $product_cost = $_POST['product_cost'];
    $product_quantity = $_POST['product_quantity'];
    
    if(isset($_FILES['product_image'])){
        $image_name = $_FILES['product_image']['name'];
        $image_size = $_FILES['product_image']['size'];
        $temp_name = $_FILES['product_image']['tmp_name'];
        $file_type = $_FILES['product_image']['type'];

        //$file_extension =strtolower(end(explode(".",$image_name)));    
//        echo $image_name;
    }
    $query="insert into product(ngo_id,product_name,product_details,product_category,product_cost,product_quantity) values($ngo_id,'$product_name','$product_details','$product_category',$product_cost,$product_quantity)";
    echo $query;
    $result=mysqli_query($connection,$query);
           // $file_extension =strtolower(end(explode(".",$image_name)));        

        $product_id = mysqli_insert_id($connection);
//    echo $product_id;
        move_uploaded_file($temp_name,"../../../img/product/".$product_id.".jpg");
    
    $query="select * from subscription where ngo_id=$ngo_id order by user_id desc";
//    echo $query;
    $result=mysqli_query($connection,$query);
    $row=mysqli_fetch_assoc($result);
    $user_id=$row['user_id'];
    echo $user_id;

        $query="select * from users where UID=$user_id";
    echo $query;
    $result=mysqli_query($connection,$query);
    $row=mysqli_fetch_assoc($result);
    $user_email=$row['U_EMAIL'];
//    echo $user_email;
    header("Location: ../../demo.php?user_email=$user_email");

    
}

?>