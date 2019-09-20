<?php
    if($_POST["otp"] == $_POST["enteredOtp"]){
        header("Location: ../../login.php");
        exit();
        
    }
    else{
        echo "Entered OTP is wrong";
    }
    
?>