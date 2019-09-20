
<?php
	require_once("pages/includes/functions.php");
    if(isset($_POST["eid"])&&isset($_POST["vid"])){
	    $eid = $_POST["eid"];
	    $vid = $_POST["vid"];
	    $addusertoevent=addusertoevent($eid,$vid);
	    // print_r($addusertoevent);
	    // exit;
	    if($addusertoevent==="Already Registered")
	    {
	    	$result["done"] = $addusertoevent;
        	$result["success"]=true;
        	// convert the result array to json format
	        echo json_encode($result);
	        exit;
	    }
	    if($addusertoevent==true)
	    {
	    	$result["done"] = true;
        	$result["success"]=true;
	    	echo json_encode($result);
	    	exit;
	    }
	    elseif($addusertoevent==false)
	    {
	    	$result["done"] = false;
        	$result["success"]=true;
	    	echo json_encode($result);
	    	exit;
	    }
    
	}
?>