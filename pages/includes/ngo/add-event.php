<?php
  require_once("../functions.php");
ob_start();

$ngo_id = $_SESSION['ngo_id'];
//echo $ngo_id;
if(isset($_POST["add_product"])){
    
    $event_name = $_POST["event_name"];
    $event_description = $_POST["event_description"];
    $query = "INSERT INTO natural_calamities(ngo_id,event_name,event_description) VALUES($ngo_id,'$event_name','$event_description')";
//    echo $query;
    $result = mysqli_query($connection, $query);
    $_SESSION['status']='sub';
}

$uid = $_SESSION['uid']; 
$uid = $_SESSION['uname'];
$ngo_id = $_SESSION['ngo_id'];

$query = "SELECT * FROM ngo, ngo_details WHERE ngo.ngo_id = $ngo_id AND ngo.ngo_id = ngo_details.ngo_id";
//echo $query;
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result);
$ngo_name = $row["ngo_name"];
$ngo_email = $row["ngo_email"];
$ngo_contact = $row["ngo_contact"];
$ngo_address = $row["ngo_address"];
$ngo_category_id = $row["ngo_category_id"];
$ngo_description = $row["ngo_description"];
$ngo_images = $row["ngo_images"];
    
  ?>
<html>
  <head>
    <title>blog</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i" rel="stylesheet">
    <link rel="stylesheet" href="../../../vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../vendors/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../../../vendors/assets/owl.theme.default.css">
    <link rel="stylesheet" href="../../../vendors/OwlCarousel2-2.3.4/dist/assets/owl.theme.blue.css">
    <link rel="stylesheet" href="../../../vendors/bootstrap-toastr/toastr.min.css">
    <link href="../../../vendors/WOW-master/dist/wow.min.js">
    <link rel="stylesheet" href="../../../css/donors1.css">
        <link rel="stylesheet" href="../../../css/add-donation.css">
<!---->
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
      <div class="sidebar-container pull-left" >
          
          <h2 class="text-center side-option" style="color:#777;font-size:30px;">Add Event</h2>
          <hr style="width:100%;background:#000000;">
          
          <h2 class="text-center side-option" style="color:#777;font-size:30px;">View all transactions</h2>
          <hr style="width:100%;background:#000000;">
          
          
      </div>
      
      <div class="right-container pull-left">
           <div class="right-wala">
        <div class="add-event-form" style="margin-left:200px">
            <div class="card-container" style="height:500px;">
           <h1>ADD EVENT</h1>
           <hr class="rule">
            <form method="POST"  action="" enctype="multipart/form-data"  >
                
                Event Name <input type="text" class="form-control" id="event_name" name="event_name"><br>
                Event Description <br><textarea name="event_description" id="" cols="88" rows="3"></textarea> 
                <br>
                <br>
                <br>
                <button class="btn read-more" type="submit" style="background:#fda401;border-radius:0px;color:white;float:left;" name="add_product">Add Event</button>
                
                
                
                
            </form>
            </div>
        </div>
    </div>
</div>

     
        </div>
        
          <div class="clearfix"></div>

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
    
      
        
          
            
              
        <?php
            if(isset($_SESSION['status']) && $_SESSION['status'] == 'sub'){
            ?>

            <script>
                toastr["success"]("You have successfully Subscribed!!!", "Subscribed")

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
            <?php
                unset($_SESSION['status']);
            }
        ?>            
                  
                    
                        
  </body>
</html>