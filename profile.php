<?php
require_once("pages/includes/functions.php");
session_start();
//print_r($_SESSION);
if($_SESSION['uid']==NULL)
{
   header("Location: index.php");
}

?>


<html>
    <head>
        <title>Profile</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i" rel="stylesheet">
    <link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/assets/owl.theme.default.css">
        <link rel="stylesheet" href="vendors/bootstrap-toastr/toastr.min.css">
        <link rel="stylesheet" href="vendors/OwlCarousel2-2.3.4/dist/owl.carousel.min.js">
        
    
    <link href="vendors/WOW-master/dist/wow.min.js">
    <link rel="stylesheet" href="css/profile1.css">
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
                <?php if(empty($_SESSION['uid']))
                    {
                        ?>
                    <li class="big"><a href="volunteers.php" style="color:white;">HOME</a></li>
                     <li><a href="#" style="color:white;">ABOUT</a></li>
                    <li><a href="index.php" style="color:white;">LOGOUT</a></li>
                   
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
                   <span class="blog-text">MY PROFILE</span>
               </div>
               <div class="same-section">
                <span class="add"></span><span class="text">CHANGE IS READY FOR YOU</span>
                </div>
        
            </div>
           </div>
        </div>
    </div>
<div class="clearfix"></div>
      <section id="profile">
          <div class="left-profile"><img src="css/img/user.png" class="img-responsive" width="250px" height="250px"></div>
          <div class="right-profile">
          <div class="card-container">
           <h1>My Profile</h1>
           <hr class="rule">
            <form method="POST" enctype="multipart/form-data" action="javascript:void(0)">
                
                Name : <input type="text" class="name" id="name"><br>
                <!-- Address : <input type="text" class="name" id="name"><br> -->
                Email : <input type="text" class="email" id="email"><br>
                Phone : <input type="text" class="phone" id="phone"><br>
                Password : <input type="password" name="password" required=""><br>
                
                <button class="btn" type="submit" style="background:#fda401;border-radius:0px;color:white;float:left;">UPDATE</button>
                
            </form>
            </div>
    
              
          </div>
        </section>
  <div class="clearfix"></div>
   <section id="team">
           <div class="content-box">
               <div class="content-title wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".3s">
                   <h2 class="text-heading text-center">NGO's WORKED WITH</h2>
                   <div class="content-title-underline"></div>
                   
               </div>
               <div class="container">
                   <div class="row wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                   <div class="col-md-12">
                      <div class="team-members owl-one owl-carousel owl-theme">
                       <div class="team-member">
                          <img src="css/img/ngo1.JPG" alt="Team Member 1" width="300px" height="250px">
                          <div class="team-member-info text-center">
                              <h4 class="team-member-name">Your NGO</h4>
                              
                              
                          </div><!--.team-member-info-->
                           
                       </div><!--.team-member-->
                       <div class="team-member">
                          <img src="css/img/ngo3.gif" alt="Team Member 1" width="300px" height="250px">
                          <div class="team-member-info text-center">
                              <h4 class="team-member-name">YourStory NGO</h4>
                              
                              
                          </div><!--.team-member-info-->
                           
                       </div><!--.team-member-->
                       <div class="team-member">
                          <img src="css/img/ngo2.jpg" alt="Team Member 1" width="300px" height="250px">
                          <div class="team-member-info text-center">
                              <h4 class="team-member-name">We NGO</h4>
                              
                              
                          </div><!--.team-member-info-->
                           
                       </div><!--.team-member-->
                       <div class="team-member">
                          <img src="css/img/ngo1.JPG" alt="Team Member 1" width="300px" height="250px">
                          <div class="team-member-info text-center">
                              <h4 class="team-member-name">Kranti NGO</h4>
                              
                              
                          </div><!--.team-member-info-->
                           
                       </div><!--.team-member-->
                       
                       </div>
                   </div>
                   
                </div>
               </div>
           </div>
        </section>         

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
        
        <script src="vendors/bootstrap-fileinput/bootstrap-fileinput.js"></script>
        <script src="vendors/bootstrap-toastr/toastr.min.js"></script>
        <script src="js/script.js"></script>
        <script>
                toastr.options = {
                  "closeButton": true,
                  "debug": false,
                  "newestOnTop": true,
                  "progressBar": true,
                  "positionClass": "toast-top-right",
                  "preventDuplicates": false,
                  "onclick": null,
                  "showDuration": "300",
                  "hideDuration": "1000",
                  "timeOut": "5000",
                  "extendedTimeOut": "1000",
                  "showEasing": "swing",
                  "hideEasing": "linear",
                  "showMethod": "fadeIn",
                  "hideMethod": "fadeOut"
                }
            
        </script>
 
        <script type="text/javascript">
           
            $("form").submit(function(){
            var form_data = $(this).closest("form");
            $name = form_data[0]["name"].value;
            $email = form_data[0]["email"].value;
            $phone=form_data[0]["phone"].value;
            $pass=form_data[0]["password"].value;
            console.log("aj")
            console.log(form_data);
            // var data = form_data.split("&");
            // console.log(form_data[0]["evid"].value);

            //fetching all the other values from database using ajax ans loading them onto their respective edit fields!
            // console.log($eid);
            $.ajax({
                url: "pages/includes/updateprofile.php",
                method:"POST",
                data:{name:$name,email:$email,phone:$phone, pass:$pass},
                dataType:"json",
                success:function(response){
                  if(response.done=="Profile Updated")
                  {
                    //alert("You Have Succesfullty registered for this event");
                      toastr["success"]("YOU HAVE SUCCCESFULLY UPDATED YOUR PROFILE", "Donations");
                      
                  }
                  
                },
                error: function () {
                    toastr["error"]("There was some error, try again later", "Donations");
                }  
                    
                
            });
        });
        </script>   
 
    </body>
</html>