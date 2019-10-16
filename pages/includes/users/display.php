<?php
    require_once("../functions.php");
  global $connection;
    $ngo_id = $_GET['ngo_id'];
    echo $ngo_id;
    $query = "Select * from ngo where ngo_id = $ngo_id";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
    $category_id = $row['ngo_category_id'];
    echo $category_id;
        if($category_id == 1){
            header("Location: products_display.php?ngo_id=$ngo_id");
        }elseif($category_id == 2){
            header("Location: video_display.php?ngo_id=$ngo_id");

        }elseif($category_id == 3){
            header("Location: donation_ngo.php?ngo_id=$ngo_id");

        }else{
            header("Location: event_display.php?ngo_id=$ngo_id");

        }
            
        

?>