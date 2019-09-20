
<?php
	require_once("pages/includes/functions.php");
    if(isset($_POST["dnid"])){
	    $dnid = $_POST["dnid"];
	    $addusertoevent=getalldonorparticipated($dnid);
	    // print_r($addusertoevent);
	    // exit;
	    if($addusertoevent)
	    {
	    	$result["done"] = $addusertoevent;
        	$result["success"]=true;
        	// convert the result array to json format
	        echo json_encode($result);
	        exit;
	    }
	    else
	    {
	    	$result["done"] = false;
        	$result["success"]=true;
	    	echo json_encode($result);
	    	exit;
	    }
    
	}
?>