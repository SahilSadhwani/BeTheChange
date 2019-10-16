<?php
//session_start();
// echo "hello";
require_once("db.php");
require_once("functions.php");

if(!empty($_POST["email"]))
{
//    echo "hello";
    $email=test_input($_POST['email']);
    $password=test_input($_POST['password']);
       
    $email=mysqli_real_escape_string($connection,$email);
    $password=mysqli_real_escape_string($connection,$password);
    
    $query="SELECT * FROM users WHERE U_EMAIL = '$email' and PASSWORD = '$password'";
     print_r($query);
    // exit;

    $select_user_details = mysqli_query($connection,$query);
    
//    proceed if there is data returned otherwise there would be errors

    checkQueryResult($select_user_details);
//     print_r($select_user_details);
    // exit;

    if(mysqli_num_rows($select_user_details)>1){
        die("ERROR 2");
        //not valid if same email exists for mmore than 1 account
    }

    if($row=mysqli_fetch_assoc($select_user_details)){
//        i have 1 row
        $uname=$row['UNAME'];
        $db_password = $row['PASSWORD'];
        $uid = $row['UID'];
        $role = $row['U_TYPE'];
        $phone = $row['U_PHONE'];
         $email = $row['U_EMAIL'];
       
      //  print_r($role);
    if(password_verify($password, $db_password)){
//        echo $role;
    
        //session variable according to role
        if($role==1)
        {
            $_SESSION['uid'] = $uid;
            $_SESSION['uname'] = $uname;
            header("Location: admin/add_ngo.php");
        }
        elseif($role==2)
        {
            $_SESSION['uid'] = $uid;
            $_SESSION['uname'] = $uname;
            header("Location: users/users.php");
        }
        elseif($role==3){
            $_SESSION['uid'] = $uid;
            $_SESSION['uname'] = $uname;
            $query = "SELECT * FROM ngo WHERE ngo_email = '$email'";
            $result = mysqli_query($connection, $query);
            $row = mysqli_fetch_assoc($result);
            $ngo_id = $row['ngo_id'];
            $_SESSION['ngo_id'] = $ngo_id;
            $ngo_category_id = $row['ngo_category_id'];
//            $query = "SELECT * FROM ngo_category WHERE category_id = $ngo_category_id";
//            $result = mysqli_query($connection, $query);
//            $row = mysqli_fetch_assoc($result);
            if($ngo_category_id==1)
                header("Location: ngo/ngo1.php");
            elseif($ngo_category_id==2)
                header("Location: ngo/ngo2.php");
            elseif($ngo_category_id==3)
                header("Location: ngo/ngo3.php");
            elseif($ngo_category_id==4)
                header("Location: ngo/ngo4.php");
            
        }

    }
        else
{
    $db_password="";
   header("Location: ../../login.php");
}
    }
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>