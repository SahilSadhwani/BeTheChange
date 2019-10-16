<?php
  require_once("../functions.php");
ob_start();
//$user_id=$_GET['uid'];
$user_id=2;
    
global $connection;


$ngo_id=$_GET['ngo_id'];
echo $ngo_id;
$query="insert into subscription values($user_id,$ngo_id)";
$result_set=mysqli_query($connection,$query);
            $_SESSION['status']='sub';

header("Location: users.php");
exit();

 ?>