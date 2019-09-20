<?php
require_once("pages/includes/ngofunction.php");
session_start();
//print_r($_SESSION);
if($_SESSION['nid']==NULL)
{
    header("Location: index.php");
}
// echo "string";
$ngo=getngo();
$event=getngoevent();
$donations=getngodonations();

// print_r();
// print_r($ngo['ORGNAME']);
// print_r($_SESSION);
//if($_SESSION['nid']==NULL)
//{
//    header("Location: index.php");
//}
//$donations=getngodonations();
// print_r($donations);
?>
<html>
    <head>
        <title>Ngo</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i" rel="stylesheet">
    <link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/assets/owl.theme.default.css">
    <link rel="stylesheet" href="vendors/OwlCarousel2-2.3.4/dist/assets/owl.theme.blue.css">
    <link href="vendors/WOW-master/dist/wow.min.js">
    <link rel="stylesheet" href="css/ngo1.css">
    <style>
   
</style>
    </head>
    <body>
        <div class="header-strip">
        <div class="dot">
        <span class="icon"><img src="img/call-answer%20(1).png" height="20px" width="20px"></span><span class="number">+88 0987654334567</span>
        <span class="icon1"><img src="img/close-envelope.png" height="20px" width="20px"></span><span class="number">info@example.com</span>
        </div>
        </div>
        <div class="clearfix"></div>
        <nav class="navbar navbar navbar-inverse" style="border-radius: 0px;height:90px;">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="container">
            <div class="navbar-header margin" style="border-radius: 0px;">
                <a class="navbar-brand" href="index.php"><img src="css/img/mylogo.png" style="margin-top:-70px;"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">

                <ul class="nav navbar-nav navbar-right change">

                    <li class="big"><a href="#" style="color:white;">HOME</a></li>
                    <?php if(!empty($_SESSION['nid']))
                    {
                        ?>

                            <li><a href="profile.php" style="color:white;">PROFILE</a></li>
                            <li><a href="about.html" style="color:white;">ABOUT</a></li>
                            <li><a href="pages/includes/logout.php" style="color:white;" id="logout">LOGOUT</a></li>
                        <?php

                    }
                    ?>
                   
                   
                    


                </ul>


            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>
    
    <div class="img-overlay">
        <div class="cover bg-parallax">
        <div class="overlay"></div>
          <div class="containers">
           <div class="something">
               <div class="heading">
                   <span class="blog-text">NGO PROFILE</span>
               </div>
               <div class="same-section">
                <span class="add"></span><span class="text">CHANGE IS READY FOR YOU</span>
               </div>
                
            
            
            
            
           </div>
        </div>
    </div>
<div class="clearfix"></div>
<div class="new-section">
        <div class="sidebar-container pull-left">
            <div class="box">
               <div class="content">
                <h1 class="text-center">5236</h1>
                <h2 class="text-center">Total Volunteers</h2>
                </div>
            </div>
            <div class="box">
               <div class="content">
                <h1 class="text-center">95862</h1>
                <h2 class="text-center">Donations Done</h2>
                </div>
            </div>
            <div class="box">
               <div class="content">
                <h1 class="text-center">289</h1>
                <h2 class="text-center">Total NGO's</h2>
                </div>
            </div>
            <div class="box">
               <div class="content">
                <h1 class="text-center">7264</h1>
                <h2 class="text-center">New Donations</h2>
                </div>
            </div>
            <div class="box">
               <div class="content">
                <h1 class="text-center">3294</h1>
                <h2 class="text-center">New Volunteers</h2>
                </div>
            </div>
            
        </div>
        <div class="right-container pull-left">
           <div class="right-wala">
              
               <h1 style="font-family:roboto;text-align:center;"><?php print_r($ngo['ORGNAME']) ;?></h1>
               <hr style="background:#fda401;width:100px;height:5px;border-radius:25px;">
               <img src="css/img/ngo3.gif" class="img-responsive" style="width:1000px;height:400px;margin-left:30px;background-size:cover;background-position:center;">
               <div class="description-section" style="border:2px solid #fda401;padding:10px;width:1000px;margin-left:30px;">
                    <p style="font-family: nunito;font-size: 22px">We value the trust our donors place in us. Our partner nonprofits are thoroughly checked to ensure credibility of operations. We also ensure that your money is put to the right use by conducting periodic visits to the end beneficiaries of the donations. GiveAssured is our seal of trust built over 18 years of operations</p>
               </div>
<section class="two-containers" style="margin-top:1%;">
    <div class="col-md-5" style="margin-left:5%;">
        <div class="card" style="height:250px;">
            <h1 class="label1 text-center animated zoomIn wow"><a  href="respngoevent.php">NGO EVENT</a></h1>
            <div class="inner-card animated fadeInLeft wow" style="padding:10px;">
                <p style="font-family:roboto;font-size:25px;text-align:center;"><?php print_r($event['accm']) ;?> Events Accomplished</p>
                <p style="font-family:roboto;font-size:25px;text-align:center;"><?php print_r($event['going']) ;?>  Events Ongoing</p>
                <a href="add-event.php"><button class="btn" style="background:#fda401;color:white;margin-left:37%;height:40px;margin-top:5%;">ADD EVENTS</button></a>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="card" style="height:250px;">
            <h1 class="label1 text-center animated zoomIn wow"><a  href="respngodonation.php">NGO DONATION</a></h1>
            <div class="inner-card animated fadeInLeft wow" style="padding:10px;">
                <p style="font-family:roboto;font-size:25px;text-align:center;"><?php print_r($donations['accm']) ;?> Donations Accomplished</p>
                <p style="font-family:roboto;font-size:25px;text-align:center;"><?php print_r($donations['going']) ;?> Donations Ongoing</p>
                <a href="add-donation.php"><button class="btn" style="background:#fda401;color:white;margin-left:37%;height:40px;margin-top:5%;">ADD DONATIONS</button></a>
            </div>
            
        </div>
        
    </div>
</section>
</div>
    </div>  
     </div>
        </div>   
       <script src="vendors/jquery/jquery-3.3.1.min.js"></script>
        <!--Bootstrap Script-->
        <script src="vendors/bootstrap/js/bootstrap.min.js"></script>
        <!--END OF CORE JS-->
        <!--Custom Js-->
        <script src="vendors/WOW-master/dist/wow.min.js"></script>
        <script src="vendors/jquery.magnific-popup.min.js"></script>
        <script src="vendors/owl.carousel.min.js"></script>
        <script src="vendors/jquery.waypoints.min.js"></script>
        <script src="vendors/jquery.counterup.min.js"></script>
        <script src="vendors/jquery-ui.min.js"></script>
        <script src="js/script.js"></script>
        
    </body>    
        
</html>

 
    