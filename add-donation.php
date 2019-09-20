<?php
require_once("pages/includes/functions.php");
//session_start();
//print_r($_SESSION);
//if($_SESSION['nid']==NULL)
//{
//    header("Location: index.php");
//}

//$donations=getngodonations();
// print_r($donations);
?>

<html>
    <head>
        <title>Add Donation</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i" rel="stylesheet">
    <link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/assets/owl.theme.default.css">
         <link rel="stylesheet" href="vendors/bootstrap-toastr/toastr.min.css">
        <link rel="stylesheet" href="vendors/OwlCarousel2-2.3.4/dist/assets/owl.theme.blue.css">
        <link rel="stylesheet" href="vendors/bootstrap-fileinput/bootstrap-fileinput.css">
        
    
    <link href="vendors/WOW-master/dist/wow.min.js">
    <link rel="stylesheet" href="css/add-donation.css">
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

                    <li class="big"><a href="ngo.php" style="color:white;">HOME</a></li>
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
        <div class="add-event-form">
            <div class="card-container">
           <h1>ADD DONATION</h1>
           <hr class="rule">
            <form method="POST" enctype="multipart/form-data" action="javascript:void(0)">
                
                Title : <input type="text" class="form-control" id="name" name="name"><br>
                Target Amount of Donation : <input type="text" class="form-control" id="amount" name="amount"><br>
               
                Image:<br>
                    
                <div class="fileinput fileinput-new" data-provides="fileinput" >
                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                    <div>
                        <span class="btn default btn-file">
                            <span class="fileinput-new btn" style="color:black;border-radius:0px;border:1px solid black;" > Select image </span>
                            <span class="fileinput-exists"> Change </span>
                            <input type="file" name="product_image" accept="image/*"> </span>
                        <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                    </div>
                </div><br><br>
                        
                    
            
                Description of Donation : <textarea type="text" class="form-control"  id="desc" name="desc" cols=15 rows=5></textarea><br>
                <button class="btn" type="submit" style="background:#fda401;border-radius:0px;color:white;float:left;">ADD DONATION</button>
                
                
                
            </form>
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
        <script src="vendors/bootstrap-toastr/toastr.min.js"></script>
        <script src="vendors/bootstrap-fileinput/bootstrap-fileinput.js"></script>
        <script src="js/script.js"></script>
        <script type="text/javascript">
           
            $("form").submit(function(){
            var form_data = $(this).closest("form");
            $damt = form_data[0]["amount"].value;
            $dtitle = form_data[0]["name"].value;
            $desc=form_data[0]["desc"].value;
            console.log("aj")
            console.log(form_data);
            // var data = form_data.split("&");
            // console.log(form_data[0]["evid"].value);

            //fetching all the other values from database using ajax ans loading them onto their respective edit fields!
            // console.log($eid);
            $.ajax({
                url: "pages/includes/savefunction.php",
                method:"POST",
                data:{amount:$damt,name:$dtitle,desc:$desc},
                dataType:"json",
                success:function(response){
                  if(response.done=="Donation Added")
                  {
                    //alert("You Have Succesfullty registered for this event");
                      toastr["success"]("YOU HAVE A SUCCCESFULLY REGISTERED", "Donations");
                      
                  }
                  
                },
                error: function () {
                    toastr["error"]("There was some error, try again later", "Donations");
                }  
                    
                
            });
        });
        </script>   
        </div>
        </div>
    </body>
</html>

 
    