<?php
require_once("db.php");
// session_start();
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

if(!empty($_POST['amount']))
{
	// echo ("expression");
	$damt=$_POST['amount'];
	$nid=$_SESSION['nid'];
	$dtitle=$_POST['name'];
	$decs=$_POST['desc'];
	$res=addngodonation($dtitle,$damt,$nid,$decs);
	if($res==1)
	{
		$result["done"] = "Donation Added";
    	$result["success"]=true;
    	// convert the result array to json format
        echo json_encode($result);
        exit;
	}else
    {
    	$result["done"] = false;
    	$result["success"]=true;
    	echo json_encode($result);
    	exit;
    }
}
