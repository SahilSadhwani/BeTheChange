<?php
require_once("db.php");
// session_start();
// header('Access-Control-Allow-Origin: *');
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

if(!empty($_POST['req_reg']))
{
	// echo ("expression");
	$nid=$_SESSION['nid'];
    $etitle=$_POST['etitle'];
    $location=$_POST['location'];
    $desc=$_POST['desc'];
    $req_reg=$_POST['req_reg'];
    
	$res=addngoevent($nid,$etitle,$desc,$location,$req_reg);
	if($res==1)
	{
		$result["done"] = "Event Added";
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
