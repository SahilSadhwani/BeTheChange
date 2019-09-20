<?php
session_start();
$phone_number = $_SESSION["phone_number"];
$random_number = rand(1000,9999);
$_POST["random_number"] = $random_number;
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://api.msg91.com/api/sendhttp.php?country=91&sender=CHANGE&route=4&mobiles=".$phone_number."&authkey=242769ABa2cfCGg5bc34724&message=The otp is ".$random_number,
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
<head>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i" rel="stylesheet">
    <link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/animate.css">
        <link rel="stylesheet" href="vendors/magnific-popup.css">
        <!--Core Styling-->
        <link rel="stylesheet" href="vendors/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/assets/owl.theme.default.css">
        <link rel="stylesheet" href="vendors/OwlCarousel2-2.3.4/dist/assets/owl.theme.blue.css">
        
    <link rel="stylesheet" href="vendors/font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
    <link href="vendors/WOW-master/dist/wow.min.js">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
   
    <div class="header-strip">
        <div class="dot">
        <span class="icon"><img src="img/call-answer%20(1).png" height="20px" width="20px"></span><span class="number">+88 0987654334567</span>
        <span class="icon1"><img src="img/close-envelope.png" height="20px" width="20px"></span><span class="number">info@example.com</span>
        </div>
        </div>
        <nav class="navbar navbar navbar-inverse" style="border-radius: 0px;height:90px;">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="container">
            <div class="navbar-header margin" style="border-radius: 0px;">
                <a class="navbar-brand" href="index.php"><img src="css/img/mylogo.png" style="margin-top:-70px;"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">

                <ul class="nav navbar-nav navbar-right change">

                    <!-- <li class="big"><a href="#" style="color:white;">HOME</a></li> -->
                    <!-- <li><a href="login.php" style="color:white;">LOGIN</a></li> -->
                    <!-- <li><a href="profile.html" style="color:white;">PROFILE</a></li> -->
                    <!-- <li><a href="about.html" style="color:white;">ABOUT US</a></li> -->
                </ul>


            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>
       <div class="container col-md-4" style="text-align: center;margin-left: 30%;">
            <form action="pages/includes/checkOtp.php" method="post">
                <label>Please Enter recieved OTP</label>
                <input type="text" value="<?php echo $random_number?>" hidden name="otp">
                <input type="text" class="form-control" placeholder="Enter OTP" name="enteredOtp"><br>
                <button type="submit" class="btn btn-warning">SUBMIT</button>
            </form>
        </div>
    </body>
</html>