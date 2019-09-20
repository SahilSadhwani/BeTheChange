<?php

$phone_number = $_POST["phone_number"];
$random_number = rand(1000,9999);
$_POST["random_number"] = $random_number;
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://api.msg91.com/api/sendhttp.php?country=91&sender=NIKHIL&route=4&mobiles=".$phone_number."&authkey=242769ABa2cfCGg5bc34724&message=The otp is ".$random_number,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);



?>


<html>
   <body>
      <form action="samplemsg91otp.php" method="post">
           <input type="text" name="random_number" value="<?php echo $random_number?>" hidden>
         <input type="text" name="otp_test">
         <input type="submit" name="otp_submit">
      </form>
   </body>
</html>