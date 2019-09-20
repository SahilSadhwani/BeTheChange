<?php
	require_once("pages/includes/functions.php");

	
    if(isset($_POST["dnid"])&&isset($_POST["amnt"])){
	    $dnid = $_POST["dnid"];
        $amnt = $_POST["amnt"];
		$did = $_SESSION['did'];
		//echo "Hello";

		$adduserdonation=adduserdonation($dnid,$did,$amnt);
		
		// print_r($adduserdonation);
		//exit;
	    //echo "string";
	    //print_r($addusertoevent);
        // exit;
        
        //User can donate twice
	    // if($adduserdonation==="Already Registered")
	    // {
	    // 	$result["done"] = $addusertoevent;
        // 	$result["success"]=true;
        // 	// convert the result array to json format
	    //     echo json_encode($result);
	    //     exit;
        // }
        
        if($adduserdonation=="Amount Donated!")
        {
            $result["done"] = $adduserdonation;
        	$result["success"]=true;
        	// convert the result array to json format
	        echo json_encode($result);
	        exit;
        }
	    if($adduserdonation==true)
	    {
	    	$result["done"] = true;
        	$result["success"]=true;
	    	echo json_encode($result);
	    	exit;
	    }
	    elseif($adduserdonation==false)
	    {
	    	$result["done"] = false;
        	$result["success"]=true;
	    	echo json_encode($result);
	    	exit;
        }
        
	}
?>