
<?php
	require_once("pages/includes/functions.php");
    if(isset($_POST["eid"])){
	    $eid = $_POST["eid"];
	    $addusertoevent=getallvolunteersparticipated($eid);
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