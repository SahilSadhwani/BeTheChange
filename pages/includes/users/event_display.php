
 <?php 
                   require_once("../functions.php");
                    global $connection;
?>

 
 
 <html>
  <head>
    <title>Events</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i" rel="stylesheet">
    <link rel="stylesheet" href="../../../vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="../../../vendors/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../../../vendors/assets/owl.theme.default.css">
    <link rel="stylesheet" href="../../../vendors/OwlCarousel2-2.3.4/dist/assets/owl.theme.blue.css">
    <link rel="stylesheet" href="../../../vendors/bootstrap-toastr/toastr.min.css">
    <link href="../../../vendors/WOW-master/dist/wow.min.js">
    <link rel="stylesheet" href="../../../css/donors1.css">
    
            <link rel="stylesheet" href="../../../css/add-donation.css">

  </head>
  <body style="background-color: #eee">
    <div class="header-strip">
      <div class="dot">
        <span class="icon"><img src="../../../img/call-answer%20(1).png" height="20px" width="20px"></span><span class="number">+88 0987654334567</span>
        <span class="icon1"><img src="../../../img/close-envelope.png" height="20px" width="20px"></span><span class="number">info@example.com</span>
      </div>
    </div>
    <div class="clearfix"></div>
    <nav class=" navbar-inverse" style="border-radius: 0px;height: 90px;">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="container" >
        <div class="navbar-header margin" style="border-radius: 0px;">
          <a class="navbar-brand" href="../../../index.php">
          <img src="../../../css/img/mylogo.png" style="margin-top:-80px;">
          </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-right change">
            <li class="big"><a href="#" style="color:white;">HOME</a></li>
            
            <li><a href="../../../profile.php" style="color:white;">PROFILE</a></li>
            <li><a href="../../../about.html" style="color:white;">ABOUT</a></li>
            <li><a href="../../../pages/includes/logout.php" style="color:white;">LOGOUT</a></li>
         
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
              <span class="blog-text">DONORS</span>
            </div>
            <div class="same-section">
              <span class="add"></span><span class="text">CHANGE IS READY FOR YOU</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="new-section">
      <div class="sidebar-container pull-left">
          
          <a href="" style="text-decoration:none;" class="side-bar"><h2 class="text-center side-option" style="color:#777;font-size:30px;"><i class="fa fa-donate"></i>   Donations</h2></a>
          <hr style="width:100%;background:#000000;">
          
          <a href="" style="text-decoration:none;" class="side-bar"><h2 class="text-center side-option" style="color:#777;font-size:30px;"><i class="fa fa-thumbs-up"></i>  Subscribed</h2>
              <hr style="width:100%;"></a>
          
          <a href="" style="text-decoration:none;" class="side-bar"><h2 class="text-center side-option" style="color:#777;font-size:30px;"><i class="fa fa-shopping-cart"></i>  Purchased Items</h2>
              <hr style="width:100%;"></a>
              
             <a href="" style="text-decoration:none;" class="side-bar"><h2 class="text-center side-option" style="color:#777;font-size:30px;"><i class="fa fa-user-circle"></i>    Profile</h2>
              <hr style="width:100%;"></a>
<!--
        <div class="box">
          <div class="content">
            <h1 class="text-center">1235</h1>
            <h2 class="text-center">Issues Helped</h2>
          </div>
        </div>
-->
<!--
        <div class="box">
          <div class="content">
            <h1 class="text-center">45895</h1>
            <h2 class="text-center">Donations Granted</h2>
          </div>
        </div>
        <div class="box">
          <div class="content">
            <h1 class="text-center">789</h1>
            <h2 class="text-center">Children Helped</h2>
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
-->
      </div>
      <div class="right-container pull-right">
        <div class="right-wala" style="margin-left:0px;">
                 
    <?php
            
            $query="select * from natural_calamities";
            $result=mysqli_query($connection,$query);
            //$row=mysqli_fetch_assoc($result);
//            echo $row['event_name'];
            $num=mysqli_num_rows($result);
            $count=0;
            while($count!=$num)
            {

                
            ?>
              <div class="add-event-form">
            <div class="card-container" style="height:250px;">
              
              
              
               <?php    
                $row=mysqli_fetch_assoc($result);

                echo $row['event_name'];
                echo "<br>";
                echo "<hr class='rule'>";
                echo $row['event_description'];
                $count=$count+1;
                echo "<br>";

                ?>
                <a class="btn read-more" type="submit" style="background:#fda401;border-radius:0px;color:white;float:right;" name="Donate">Donate</a>  
                <?php
                echo "<br>";
                echo "<br>";
                echo "<br>";
                echo "<br>";
             ?>
               
    
                 
                                           
      <?php

            }
            
                
    ?>    
                 
                  </div>
            </div>    
            
            
            
            <?php
            
            echo "<br>";
                        echo "<br>";
            echo "<br>";

            echo "<br>";
            echo "<br>";
            echo "<br>";
            ?>
        
    </div>
                 
                 
         
         
         <div class="container">
             <h3 style="margin-left: -100px; margin-top: 90px;">
             <?php
//ob_start();
 global $connection;
                 //$ngo_id=$_GET['ngo_id'];
                 $ngo_id=3;
                 $query = "SELECT * FROM ngo, ngo_details WHERE ngo.ngo_id = $ngo_id AND ngo.ngo_id = ngo_details.ngo_id";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result);
$ngo_name = $row["ngo_name"];
$ngo_email = $row["ngo_email"];
$ngo_contact = $row["ngo_contact"];
$ngo_address = $row["ngo_address"];
$ngo_category_id = $row["ngo_category_id"];
$ngo_description = $row["ngo_description"];
$ngo_images = $row["ngo_images"];
                 
                 
                 
                 
                 
                 
                 
                 
                 //echo $ngo_name; ?></h3>
         </div>
         
         <div class="container">
<!--            <h3 style="margin-left: -100px; margin-top: 80px;">Contact Us :</h3>-->
            <br>
            <h4 style="margin-left: -100px; margin-top: 10px;"><?php //echo $ngo_address; ?></h4>
            <h4 style="margin-left: -100px; margin-top: 10px;"><?php //echo $ngo_email; ?></h4>
            
            <h4 style="margin-left: -100px; "><?php //echo $ngo_contact; ?></h4>
         </div>
              
                 
                    
                       
                          
                             
                                   
                 
                 
                 
                 
                 
                 
                 
                 
                </div>

              
              
              

      </div>
    </div>
        
          <div class="clearfix"></div>

    <section id="testimonials" style="margin-top:-18px;">
      <div class="testimonial-cover bg-parallax">
        <div class="content-box">
          <div class="content-title wow animated fadeInDown">
            <h3 class="text-heading text-heading-white">What Our Volunteer Say</h3>
            <div class="content-title-underline"></div>
          </div>
          <div class="container">
            <div class="row wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
              <div class="col-md-12">
                <div class="customer-testimonials owl-carousel owl-theme">
                  <div class="testimonial">
                    <img src="../../../css/img/client/client-3.jpg" class="img-responsive img-circle">
                    <blockquote>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, nostrum, laborum facilis eveniet iste, ducimus harum quasi officiis suscipit molestiae placeat enim ut saepe at architecto illo aperiam officia tempore</p>
                    </blockquote>
                    <div class="testimonial-author">
                      <p>
                        <strong>Sara Smith</strong>
                        <span>CEO &amp; Founder-Microsoft</span>
                      </p>
                    </div>
                  </div>
                  <div class="testimonial">
                    <img src="../../../css/img/client/client-2.jpg" class="img-responsive img-circle">
                    <blockquote>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, nostrum, laborum facilis eveniet iste, ducimus harum quasi officiis suscipit molestiae placeat enim ut saepe at architecto illo aperiam officia tempore</p>
                    </blockquote>
                    <div class="testimonial-author">
                      <p>
                        <strong>Sara Smith</strong>
                        <span>CEO &amp; Founder-Microsoft</span>
                      </p>
                    </div>
                  </div>
                  <div class="testimonial">
                    <img src="../../../css/img/client/client-1.jpg" class="img-responsive img-circle">
                    <blockquote>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, nostrum, laborum facilis eveniet iste, ducimus harum quasi officiis suscipit molestiae placeat enim ut saepe at architecto illo aperiam officia tempore</p>
                    </blockquote>
                    <div class="testimonial-author">
                      <p>
                        <strong>Sara Smith</strong>
                        <span>CEO &amp; Founder-Microsoft</span>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="../../../vendors/jquery/jquery-3.3.1.min.js"></script>
    <!--Bootstrap Script-->
    <script src="../../../vendors/bootstrap/js/bootstrap.min.js"></script>
    <!--END OF CORE JS-->
    <!--Custom Js-->
    <script src="../../../vendors/WOW-master/dist/wow.min.js"></script>
    <script src="../../../vendors/jquery.magnific-popup.min.js"></script>
    <script src="../../../vendors/owl.carousel.min.js"></script>
    <script src="../../../vendors/jquery.waypoints.min.js"></script>
    <script src="../../../vendors/jquery.counterup.min.js"></script>
    <script src="../../../vendors/bootstrap-toastr/toastr.min.js"></script>
    <script src="../../../vendors/jquery-ui.min.js"></script>
    <script src="../../../js/script.js"></script>
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
    <script>
      // $(function () {
      //     $(".custom-close").on('click', function() {
      //         $('#myModal').modal('hide');
      //     });
      // });
      $(document).on("click", ".open-AddDialog", function () {
           var form = $(this).closest("form");
           var dtitle= form[0]["dtitle"].value;
           var desc= form[0]["desc"].value;
           // console.log(desc);
           var per= form[0]["per"].value;
           var ple= form[0]["pled"].value;

           // console.log(per);


           // console.log(dtitle);
           $("#dtitle").html(dtitle);
           $("#ple").html("Pledge Amount - "+ple);
           $("#desc2").html(desc);
           $("#per2").html(per);
           document.getElementById('per2').style.width = per;
           document.getElementById('per2').style.animation.to = per;

      });
      $("form").submit(function(){
          
          var form_data = $(this).closest("form");
          // console.log(form_data);
          $dnid = form_data[0]["dnid"].value;
          var dnid= form_data[0]["dnid"].value;
          $amnt = form_data[0]["amnt"].value;
          // console.log(form_data[0]["dnid"].value);
          // document.write(dnid);
          $('#myModal'+dnid).modal('hide');
          // $dnid = document.getElementById('dnid').value;
      
          // $amnt = document.getElementById('amnt').value;
      
          //var data = form_data.split("&");
          // console.log(form_data[2]["amnt"].value);
          // console.log($amnt);
          //fetching all the other values from database using ajax ans loading them onto their respective edit fields!
          // console.log($eid);
          $.ajax({
              // url: "http://localhost/be-the-change/getDonations.php",
              url : "getDonations.php",
              method:"POST",
              data:{dnid:$dnid,amnt:$amnt},
              dataType:"json",
              success:function(response){
                  // print_r(response);
      
                  if(response.done=="Amount Donated!")
                  {
                      toastr["success"]("YOU HAVE A SUCCCESFULLY DONATED");
                  }else if(response.done==false){
                      toastr["error"]("SOMETHING WENT WRONG1");
                  }else{
                      alert(response.done);
                  }
              
              },
              // error: function( jqXhr, textStatus, errorThrown ){
              //     console.log( JSON.stringify(errorThrown) );
              // }
              error: function () {
                  toastr["error"]("SOMETHING WENT WRONG1");
              }  
                  
              
          });
      });
    </script>
  </body>
</html>