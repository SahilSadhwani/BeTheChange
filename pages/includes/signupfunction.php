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
    
    if($connection->connect_error){
        echo "Connection failed";
    }
    
    // print_r($stmt);
    // echo "Hello3";
    $uname=$_POST['username'];
    $u_email=$_POST['email'];
    $password=$_POST['password'];
    $u_phone = $_POST['phone'];
    if($_POST['category_id']=='NGO')
    {
        $u_type=3;
    }elseif($_POST['category_id']=='Donor')
    {
        $u_type=1;
    }else
    {
        $u_type=2;
    }
    
    
    $stmt= $connection->prepare("INSERT INTO users (UNAME, U_EMAIL, PASSWORD,U_PHONE,U_TYPE) VALUES (?,?,?,?,?);");
    $stmt->bind_param('sssii', $uname, $u_email, $password,$u_phone,$u_type);
    $stmt->execute();
    $stmt->close();
    $_SESSION["phone_number"] = $u_phone;
    header("Location: ../../otp.php");
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