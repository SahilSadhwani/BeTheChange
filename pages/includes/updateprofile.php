<?php
require_once("db.php");
session_start();
require_once("constants.php");
require_once("functions.php");

$connection = mysqli_connect(SERVER,USER,PASSWORD,DB);
if(!$connection){
    echo "Some issue in connecting ".mysqli_connect_error($connection);
}

// function checkQueryResult($resultset){
//     global $connection;
//     if(!$resultset){
//         die("QUERY FAILED : ".mysqli_error($connection));
//     }
    
// }
// print_r($_POST);

if(!empty($_POST['name']))
{
	// echo ("expression");
	$uid=$_SESSION['uid'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $pass=$_POST['pass'];
    
	$res=updateprofile($uid,$name,$email,$phone,$pass);
	if($res)
	{
		$result["done"] = "Profile Updated";
    	$result["success"]=true;
    	// convert the result array to json format
        echo json_encode($result);
        exit;
	}else
    {
    	$result["done"] = false;
    	$result["success"]=false;
    	echo json_encode($result);
    	exit;
    }
}
