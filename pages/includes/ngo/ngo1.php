<?php
  require_once("../functions.php");
ob_start();

$uid = $_SESSION['uid']; 
$uid = $_SESSION['uname'];
$ngo_id = $_SESSION['ngo_id'];

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


        global $connection;
        // Check connection
        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            die();
        }

//        $total_pages_sql = "SELECT COUNT(*) FROM donations";
//        $result = mysqli_query($connection,$total_pages_sql);
//        $total_rows = mysqli_fetch_array($result)[0];
//        $total_pages = ceil($total_rows / $no_of_records_per_page);

//        $sql = "SELECT * FROM donations LIMIT $offset, $no_of_records_per_page";
//        $res_data = mysqli_query($connection,$sql);
//        while($row = mysqli_fetch_array($res_data)){
//         
//            $donations[]=$row;
//          
//        }
         // echo "<pre>";
         //    print_r($donations);
        
    
  ?>
<html>
  <head>
    <title>NGO</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i" rel="stylesheet">
    <link rel="stylesheet" href="../../../vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../vendors/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../../../vendors/assets/owl.theme.default.css">
    <link rel="stylesheet" href="../../../vendors/OwlCarousel2-2.3.4/dist/assets/owl.theme.blue.css">
    <link rel="stylesheet" href="../../../vendors/bootstrap-toastr/toastr.min.css">
    <link href="../../../vendors/WOW-master/dist/wow.min.js">
    <link rel="stylesheet" href="../../../css/donors1.css">
    
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
            <?php 
//              if(!empty($_SESSION['did']))
//              {
                  ?>
            <li><a href="../../../profile.php" style="color:white;">PROFILE</a></li>
            <li><a href="../../../about.html" style="color:white;">ABOUT</a></li>
            <li><a href="../../../pages/includes/logout.php" style="color:white;">LOGOUT</a></li>
            <?php
//              }
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
              <span class="blog-text"><?php echo $ngo_name; ?></span>
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
      <div class="sidebar-container pull-left" style="">
          
          <h2 class="text-center side-option" style="color:#777;font-size:30px;"><a href="add_product.php" style="color:#777;font-size:30px; text-decoration:none;">Add Product</a></h2>
          <hr style="width:100%;background:#000000;">
          
          <h2 class="text-center side-option" style="color:#777;font-size:30px;"><a href="view_product.php" style="color:#777;font-size:30px; text-decoration:none;">View Products</a></h2>
          <hr style="width:100%;background:#000000;">
          
          <h2 class="text-center side-option" style="color:#777;font-size:30px;"><a href="view_purchase.php" style="color:#777;font-size:30px; text-decoration:none;">View Purchases</a></h2>
          <hr style="width:100%;">
          
        
      </div>
       
      <div class="right-container pull-right">
        <div class="right-wala" style="width: 1000px; margin-left: 200px;">
         
         <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="../../../img/category/we.jpg" style="height: 500px; width: 1000px;" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="../../../img/purpose/Help%20Poor.jpg" style="height: 500px; width: 1000px;" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="../../../img/category/1.jpg" style="height: 500px; width: 1000px;" alt="Los Angeles">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
         
         
         <div class="container">
             <h3 style="margin-left: -100px; margin-top: 90px;"><?php echo $ngo_description; ?></h3>
         </div>
         
         <div class="container">
            <h3 style="margin-left: -100px; margin-top: 80px;">Contact Us :</h3>
            <br>
            <h4 style="margin-left: -100px; margin-top: 10px;"><?php echo $ngo_address; ?></h4>
            <h4 style="margin-left: -100px; margin-top: 10px;"><?php echo $ngo_email; ?></h4>
            
            <h4 style="margin-left: -100px; "><?php echo $ngo_contact; ?></h4>
         </div>
        </div>
        
         
          
               
        </div>
      </div>

    
    <script src="../../../vendors/jquery/jquery-3.3.1.min.js"></script>
    
    <!--Bootstrap Script-->
    <script src="../../../vendors/bootstrap/js/bootstrap.min.js"></script>
    <script>
      ocument.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.carousel');
    var instances = M.Carousel.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.carousel').carousel();
  });
      </script>
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