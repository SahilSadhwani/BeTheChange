<?php
  require_once("../functions.php");
ob_start();
global $connection;
if(isset($_POST['add_ngo'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $address=$_POST['address'];
    $location=$_POST['location'];
    $category=$_POST['category'];
    echo "$category";
    $query="insert into  ngo(ngo_name,ngo_email,ngo_contact,ngo_address,ngo_location,ngo_category_id) values('$name','$email',$contact,'$address','$location',$category)";
    echo $query;
    $result_set=mysqli_query($connection,$query);
    header("Location: add_ngo.php");
}   
?>