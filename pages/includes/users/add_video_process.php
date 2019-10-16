
<?php
require_once("../functions.php");
$user_id=2;
//$user_id=$_GET['uid'];  //changeit
$ngo_id=$_POST['ngo_id'];   //get
global $connection;
if(isset($_POST['add_video']))
{
    //$target_dir = "http://localhost/bethechange/pages/includes/ngo/";
    
    //$target_file = $target_dir.basename($_FILES["video"]["name"]);
    
    //echo "here";
    $video_title = $_POST['video_title'];
    $video_description = $_POST['video_description'];
    $voideo_comment = $_POST['voideo_comment'];
        
    
    if(isset($_FILES['video'])){
        $video_path=$_FILES['video']['name'];    
        echo $video_path;
$temp_name = $_FILES['video']['tmp_name'];
echo $temp_name;
       // move_uploaded_file($_FILES["video"]["tmp_name"],$target_file);
        
        
    $query="INSERT INTO video( user_id, ngo_id, video_title, video_description, voideo_comment)VALUES($user_id,$ngo_id,'$video_title','$video_description','$voideo_comment')";
    
    echo $query;
    $result=mysqli_query($connection,$query);
        
            $video_id = mysqli_insert_id($connection);
    echo $video_id;
        echo $temp_name;
        move_uploaded_file($temp_name,"../../../img/product/".$_FILES['video']['name']);

        

    }
    
    
}
?>