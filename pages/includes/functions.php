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

function convertHtmlTime($date,$time){
    $newDate = date($date);
    $newTime = date($time);
    $datetime = new DateTime($newDate.$newTime);
    return date_format($datetime, 'YmdHis');
}

function getngo(){
    global $connection;
    $query = "SELECT * FROM ngo";
    $ngo=mysqli_query($connection,$query);
    if($row=mysqli_fetch_all($ngo)){
        return($row);
    }
}
function getngoevents(){
    global $connection;
    $query = "SELECT * FROM ngoevents";
    $ngo=mysqli_query($connection,$query);
    if($row=mysqli_fetch_all($ngo)){
        return($row);
    }
}

// function getngoevents(){
//     global $connection;
//     $query = "SELECT * FROM activengoevents";
//     $ngo=mysqli_query($connection,$query);
//     if($row=mysqli_fetch_all($ngo)){
//         return($row);
//     }
// }

function getngodonations(){




    
    global $connection;
    $query = "SELECT * FROM donations";
    $ngo=mysqli_query($connection,$query);
    if($row=mysqli_fetch_all($ngo)){
        return($row);
    }
}

// function getngodonations(){
//     global $connection;
//     $query = "SELECT * FROM DONATIONS";
//     $ngo=mysqli_query($connection,$query);
//     if($row=mysqli_fetch_all($ngo)){
//         return($row);
//         print_r($row);
//         exit;
//     }
// }


function addngoevent($nid,$etitle,$desc,$location,$req_reg){
    global $connection;
    $query = "INSERT INTO ngoevents (NID, E_TITLE, E_DESCRIPTION, location, REQ_REGISTERED) VALUES ($nid,'$etitle','$desc','$location',$req_reg)";
    // print_r($query2);
    $resultset = mysqli_query($connection,$query);
    checkQueryResult($resultset);
    return $resultset;
}

function addngodonation($dtitle,$damt,$nid,$decs){
    global $connection;
    $query = "INSERT INTO donations (D_TITLE,DAMOUNT, NID, D_DESCRIPTION) VALUES ('$dtitle',$damt,$nid,'$decs')";
    $resultset = mysqli_query($connection,$query);
    checkQueryResult($resultset);
    return $resultset;
}
function addusertoevent($eid,$vid){
    global $connection;
    $query1="Select * from ngoeventspartcpn where EID=$eid and VID=$vid";
    $resultset1 = mysqli_query($connection,$query1);
    // echo "hello";
    if($resultset1){
        $row=mysqli_fetch_all($resultset1);
        if(!empty($row))
        {
            // print_r($row);
            $resultset="Already Registered";
            return $resultset;
        }
    }
        $query = "INSERT INTO  ngoeventspartcpn (EID,VID) VALUES ($eid,$vid)";
        $resultset = mysqli_query($connection,$query);
        checkQueryResult($resultset);
        return $resultset; 
}


// function adduserdonation($dnid,$did,$amnt){

//     // echo "In function";
//     // global $connection;
//     // $did=$_SESSION['did'];
//     // $query = $connection->prepare("INSERT INTO  donationtransaction (DNID,DID,AMOUNT) VALUES (:dnid, :did, :amnt)");
//     // //$query->bindValue('iii', $dnid, $did, $amnt);
//     // // $query->bindParam(1, $dnid, PDO::PARAM_INT);
//     // // $query->bindParam(2, $did, PDO::PARAM_INT);
//     // // $query->bindParam(3, $amnt, PDO::PARAM_INT);
//     // echo $query;
//     // $query->execute(array(':dnid' => $dnid, ':did' => $did, ':amnt' => $amnt));
//     // // $query->execute();
//     // // $query->close();
//     // // $resultset = mysqli_query($connection,$query);
//     // // checkQueryResult($resultset);
//     // // return $resultset;
//     // $resultset="Amount Donated!";
//     // return $resultset;
    
//     global $connection;
//     $did=$_SESSION['did'];
//     $queryd ="INSERT INTO donationtransaction (DNID,DID,AMOUNT) VALUES ($dnid,$did,$amnt)";
//     // $queryd = "INSERT INTO donationtransaction (DNID,DID,AMOUNT) VALUES ($dnid,$did,$amnt)";
//     echo $queryd;
//     $resultset = mysqli_query($connection,$queryd);
//     checkQueryResult($resultset);
//     echo checkQueryResult($resultset);
//     if($resultset==true)
//     {
//         $resultset="Amount Donated!";
//         return $resultset;
//     }
    
// }

function adduserdonation($dnid, $did, $amnt){
    global $connection;

    // Prepare an insert statement
    $sql = "INSERT INTO donationtransaction (DNID, DID, AMOUNT) VALUES (?, ?, ?)";
    
    if($stmt = mysqli_prepare($connection, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "iii", $dnid, $did, $amnt);
        
        mysqli_stmt_execute($stmt);
        
        $resultset="Amount Donated!";
        return $resultset;
        echo "Records inserted successfully.";
    } else{
        echo "ERROR: Could not prepare query: $sql. " . mysqli_error($link);
    }
    // Close statement
    mysqli_stmt_close($stmt);
    
    
}


function geteventsexe($nid=null,$vid=null){
    global $connection;
    $query = "SELECT * FROM ngoeventspartcpn";
    do{
        if(!empty($nid)&&isset($nid)&&!empty($vid)&&isset($vid))
        {
            $query = $query." where VID=$vid and EID=(SELECT EID FROM ngoevents where NID=$nid)";
            break;  
        }elseif(!empty($vid)&&isset($vid))
        {
            $query = $query." where VID=$vid";  
            break;
        }elseif(!empty($nid)&&isset($nid)){
            $query = $query. " where EID=(SELECT EID FROM ngoevents where NID=$nid)";
            break;
        }
    }while(0);
    // print_r($query);
    $ngo=mysqli_query($connection,$query);
    if($ngo){
        $row=mysqli_fetch_all($ngo);
        return($row);
    }
}
function getdonationsexe($nid=null,$did=null){
    global $connection;
    $query = "SELECT * FROM donationtransaction";
    do{
        if(!empty($nid)&&isset($nid)&&!empty($did)&&isset($did))
        {
            $query = $query." where DID=$did and DNID=(SELECT DNID FROM donations where NID=$nid)";
            break;  
        }
        elseif(!empty($did)&&isset($did))
        {
            $query = $query." where DID=$did"; 
            break; 
        }elseif(!empty($nid)&&isset($nid)){
            $query = $query. " where DNID=(SELECT DNID FROM donations where NID=$nid)";
            break;
        }
        
    }while(0);
    // echo "<br>";
    // print_r($query);
    $ngo=mysqli_query($connection,$query);
    if($row=mysqli_fetch_all($ngo)){
        return($row);
    }
}
function getparticipationcount($eid){
    global $connection;
    $query = "SELECT * FROM ngoeventspartcpn where EID=$eid";
    $ngo=mysqli_query($connection,$query);
    if($row=mysqli_fetch_all($ngo)){
        return($row);
    }
}
function getdonationscount($dnid){
    global $connection;
    $result=[];
    $query2="SELECT sum(amount) as count FROM donationtransaction where DNID=$dnid";
    // print_r($query2);
    $conect = mysqli_query($connection,$query2); 
    if($conect)
    {
       $cnt = mysqli_fetch_assoc($conect); 
        $result['count'] = $cnt['count']; 
    }
    

    $query = "SELECT * FROM donationtransaction where DNID=$dnid";
    $ngo=mysqli_query($connection,$query);
    if($row=mysqli_fetch_all($ngo)){
        $result['result']=$row;
        return($result);

    }
}

//respective ngo events
function ngoevents($nid){
    global $connection;
    $query = "SELECT * FROM ngoevents where NID=$nid";
    $ngo=mysqli_query($connection,$query);
    if($row=mysqli_fetch_all($ngo)){
        return($row);
    }
}

//respective ngo donations
function ngodonations($nid){
    global $connection;
    $query = "SELECT * FROM donations where NID=$nid";
    $ngo=mysqli_query($connection,$query);
    if($row=mysqli_fetch_all($ngo)){
        return($row);
    }
}

//getnago() already exists and returns all the ngos.
//updateprfile
function updateprofile($uid, $name, $email, $phone, $pass){
    global $connection;
    $query = "update users set UNAME='$name', U_EMAIL='$email', U_PHONE=$phone, PASSWORD=$pass where UID=$uid";
    $user=mysqli_query($connection,$query);
    if($user){
        // console.log("In function $user");
        return($user);
    }
}

//admin functionality
function getalldonors(){
    global $connection;
    $query = "SELECT * FROM donors";
    $ngo=mysqli_query($connection,$query);
    if($row=mysqli_fetch_all($ngo)){
        return($row);
    }
}

function getallvolunteers(){
    global $connection;
    $query = "SELECT * FROM volunteers";
    $ngo=mysqli_query($connection,$query);
    if($row=mysqli_fetch_all($ngo)){
        return($row);
    }
}

function deleteuser($uid){
    global $connection;
    $query = "DELETE from users where UID=$uid";
    $user=mysqli_query($connection,$query);
    if($row=mysqli_fetch_all($user)){
        return($row);
    }
}

function getallvolunteersparticipated($eid){
    global $connection;


    $query = "SELECT users.* from ngoeventspartcpn
INNER JOIN users ON ngoeventspartcpn.vid=users.uid where eid=$eid";
    // print_r($query);
    $ngo=mysqli_query($connection,$query);
    if($row=mysqli_fetch_all($ngo)){
        return($row);
    }
}
function getalldonorparticipated($dnid){
    global $connection;


    $query = "SELECT users.uname,users.u_email,donationtransaction.amount from donationtransaction
INNER JOIN users ON donationtransaction.did=users.uid where dnid=$dnid";
    // print_r($query);
    $ngo=mysqli_query($connection,$query);
    if($row=mysqli_fetch_all($ngo)){
        return($row);
    }
}
?>