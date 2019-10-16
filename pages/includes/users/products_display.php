<?php
require_once("../functions.php");
  global $connection;
$ngo_id = $_GET['ngo_id'];
$query = "Select * from product where ngo_id = $ngo_id";
//echo $query;
$result = mysqli_query($connection, $query);


?>

<html>
  <head>
    <title>Products</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" href="../../../vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
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
    <div class="new-section" style="padding-top:1px;">
      <div class="sidebar-container pull-left" style="height:2200px">
          
          <a href="" style="text-decoration:none;" class="side-bar"><h2 class="text-center side-option" style="color:#777;font-size:30px;"><i class="fa fa-donate"></i>   Donations</h2></a>
          <hr style="width:100%;background:#000000;">
          
          <a href="" style="text-decoration:none;" class="side-bar"><h2 class="text-center side-option" style="color:#777;font-size:30px;"><i class="fa fa-thumbs-up"></i>  Subscribed</h2>
              <hr style="width:100%;"></a>
          
          <a href="" style="text-decoration:none;" class="side-bar"><h2 class="text-center side-option" style="color:#777;font-size:30px;"><i class="fa fa-shopping-cart"></i>  Purchased Items</h2>
              <hr style="width:100%;"></a>
              
             <a href="" style="text-decoration:none;" class="side-bar"><h2 class="text-center side-option" style="color:#777;font-size:30px;"><i class="fa fa-user-circle"></i>    Profile</h2>
              <hr style="width:100%;"></a>
          
          
      </div>
      
      <form action="buy_product.php?" method="get">
      <?php
                while($row = mysqli_fetch_assoc($result)){
                    $product_id = $row['product_id'];
                    $product_name=$row['product_name'];
                    $product_description = $row['product_details'];
                    $product_category = $row['product_category'];
                    $product_cost = $row['product_cost'];
                    $product_quantity = $row['product_quantity'];
                    $made_by = $row['made_by'];
                ?>
      
      <div class="right-container pull-left" style="height: 475px;">
           <div class="right-wala" style="margin-left:120px;">
        <div class="add-event-form">
            <div class="card-container" style="height:425px;">
<!--
            <form method="POST" enctype="multipart/form-data" action="javascript:void(0)">
                
                NGO Name <input type="text" class="form-control" id="name" name="name"><br>
                Email <input type="text" class="form-control" id="amount" name="amount"><br>
                               Contact <input type="text" class="form-control" id="amount" name="amount"><br>
                Address  <input type="text" class="form-control" id="amount" name="amount"><br>
                                               Location <input type="text" class="form-control" id="amount" name="amount"><br>

                Category
                     <select class="form-control">
                    <option value="">Women Empowerment</option>
                    <option value="">Child Education</option>
                    <option value="">Donation</option>
                    <option value="">Other</option>
                    </select>   
                    
            <br>
                <button class="btn" type="submit" style="background:#fda401;border-radius:0px;color:white;float:left;">ADD DONATION</button>
                
                
                
            </form>
            
-->       
            <h2><?php echo $product_name; ?></h2>
           <hr class="rule">
           <div class="row">
               <div class="col-md-3" style="margin-right: 10px; width=20%">
                 <img src="../../../img/product/<?php echo $product_id;?>.jpg" alt="" width='330px' height='200px' >  
               </div>
               <div class="col-md-6" style="margin-left: 120px;">
<!--
                       <p>Made by: </p>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde aperiam quos, sunt fugiat repudiandae! Deserunt veniam natus aperiam iusto omnis optio voluptas doloremque, eaque voluptatibus, ea, suscipit consectetur illum enim.</p>
                       <button> buy </button>
                       
-->
              <div class="bottom-container">
              <p class="bold1" style="margin-bottom:0px;"><?php echo $product_category; ?></p>
                <p class="bold2" style="margin-bottom:0px;"><?php echo $product_description; ?></p>
                <p class="bold2" style="margin-bottom:0px;">This is maded by: <?php echo $made_by; ?></p>
                <p class="bold1" style="margin-bottom:0px;"> Rs: <?php echo $product_cost; ?></p>
                <input type="text" class="form-control" id="name" name="quantity" placeholder="Add Quantity...">
                 
                  <span><a type="submit" class="btn read-more open-AddDialog" href="buy_product.php?ngo_id=<?php echo $ngo_id?>&product_id=<?php echo $product_id?>&quantity=16" style="margin-top:15px;">BUY NOW</a></span>
                  
                </div>
               </div>
           </div>
            </div>
        </div>
    </div>
</div>
     <?php
                }
                ?>
                </form>

     
        </div>
        
          <div class="clearfix"></div>

    <script src="../../../vendors/jquery/jquery-3.3.1.min.js"></script>
    <!--Bootstrap Script-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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
//        $_SESSION['status']='sub';
//        $a=1;
            if(isset($_SESSION['status']) && $_SESSION['status'] == 'sub'){
//        if($a=1){
            ?>

            <script>
                toastr["warning"]("Sorry not enough items left!!!", "Out of stock")

                toastr.options = {
                    "closeButton": true,
                    "debug": false,
                    "newestOnTop": true,
                    "progressBar": true,
                    "positionClass": "toast-top",
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
