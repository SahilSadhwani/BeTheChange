<?php
require_once("db.php");
session_start();
require_once("constants.php");

$connection = mysqli_connect(SERVER,USER,PASSWORD,DB);
if(!$connection){
    echo "Some issue in connecting ".mysqli_connect_error($connection);
}

function checkQueryResult($resultset){
    global $connection;
    if(!$resultset){
        die("QUERY FAILED : ".mysqli_error($connection));
    }
    
}
function getngo(){
    global $connection;
    $nid=$_SESSION['nid'];
    $query = "SELECT * FROM ngo where nid=$nid";
    // echo $query;
    $ngo=mysqli_query($connection,$query);
    if($row=mysqli_fetch_assoc($ngo)){
        return($row);
    }

}

function getngoevent()
{
    global $connection;
    $nid=$_SESSION['nid'];
    $query = "SELECT * FROM ngoevents where nid=$nid";
    // echo $query;
    $ngo=mysqli_query($connection,$query);
    if($row=mysqli_fetch_all($ngo)){
        // print_r($row);
    }
    $count=$going=$accm=0;
    foreach ($row as $key => $value) {
        $count=$count+1;
        if($value[7]==1)
        {
            $going=$going+1;
        }else
        {
            $accm=$accm+1;
        }
        
    }

    $event=[];
    $event['count']=$count;
    $event['going']=$going;
    $event['accm']=$accm;
    return $event;

        // echo "count : ";
        // print_r($count);
        // echo "going on : ";
        // print_r($going);
        // echo "accomp : ";
        // print_r($accm);
}
function getngodonations()
{
    global $connection;
    $nid=$_SESSION['nid'];
    $query = "SELECT * FROM donations where nid=$nid";
    // echo $query;
    $ngo=mysqli_query($connection,$query);
    if($row=mysqli_fetch_all($ngo)){
        // print_r($row);
    }
    $count=$going=$accm=0;
    foreach ($row as $key => $value) {
        $count=$count+1;
        if($value[7]==1)
        {
            $going=$going+1;
        }else
        {
            $accm=$accm+1;
        }
        
    }

    $donations=[];
    $donations['count']=$count;
    $donations['going']=$going;
    $donations['accm']=$accm;
    return $donations;

        // echo "count : ";
        // print_r($count);
        // echo "going on : ";
        // print_r($going);
        // echo "accomp : ";
        // print_r($accm);
}
function savedonation()
{
    print_r($_POST);
}