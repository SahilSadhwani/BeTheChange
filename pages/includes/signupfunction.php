<?php
//echo "hello";
require_once("db.php");
require_once("functions.php");
session_start();

// echo "hello";

// {
    // if($role==1)
    // {
    //     $role="Donor";
    // }
    // elseif($role==2)
    // {
    //     $role="Volunteer";
    // }
    // else{
    //     $role="NGO";
    // }
    
    global $connection;
    
    // print_r($stmt);
    // echo "Hello3";
    $uname=$_POST['username'];
    $u_email=$_POST['email'];
    $password=$_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $u_location = $_POST['location'];
    
    $query = "Insert into users(UNAME,U_EMAIL,PASSWORD,U_TYPE,U_LOCATION) values ('$uname','$u_email','$hashed_password',1,'$u_location')";
//echo $query;
    $result_set=mysqli_query($connection,$query);
header("Location: ../../index.php");
 exit();
        
//    $sql = "SELECT UID FROM users where U_EMAIL = '$u_email' and PASSWORD = '$password'";
//    $result = $connection->query($sql);
//
//    if ($result->num_rows == 1) 
//    {
//        // output data of each row
//        if($role==1)
//        {
//            $_SESSION['did'] = $result['UID'];
//        }
//        elseif($role==2)
//        {
//            $_SESSION['vid'] = $result['UID'];
//        }
//        else{
//            $_SESSION['nid'] = $result['UID'];
//        }
//    }
//
//    header("Location: ../../index.php");
//    
?>