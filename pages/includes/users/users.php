<?php
  require_once("../functions.php");
  global $connection;
        // Check connection
        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            die();
        }
if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 6;
        $offset = ($pageno-1) * $no_of_records_per_page;

        global $connection;
        // Check connection
        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            die();
        }

        $total_pages_sql = "SELECT COUNT(*) FROM ngo";
        $result = mysqli_query($connection,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $sql = "SELECT * FROM ngo LIMIT $offset, $no_of_records_per_page";
        $res_data = mysqli_query($connection,$sql);
        while($row = mysqli_fetch_array($res_data)){
         
            $ngo[]=$row;
          
        }

  ?>
<html>
  <head>
    <title>Dashboard</title>
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
      <form action="search.php" method="post">
      <div class="row" style="margin-top:0; padding-top: 20px; padding-left :25px; height: 50px;">
          <div class="col-md-4" style="width: 20%; margin-right: 10%; margin-left: 5%">
             <select class="form-control" style="display:inline-block; float:left;" name="location">
             <option value="">Select Location..</option>
              <?php
                $query = "Select DISTINCT ngo_id, ngo_location from ngo";
                $result = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($result)){
                    $location = $row['ngo_location'];
                    $ngo_id = $row['ngo_id'];
                 ?>
               <option value="<?php echo $ngo_id; ?>"><?php echo $location;?></option>  
            <?php   
                }
              ?>
          </select>   
          </div>
          <div class="col-md-5" style="width:20%;">
              <select class="form-control" style="display:inline-block;" name="category">
              <option value="">Select Category...</option>
              <?php
                $query = "Select * from ngo_category";
                $result = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($result)){
                    $category = $row['category'];
                    $category_id= $row['category_id']; 
                 ?>
               <option value="<?php echo $category_id; ?>"><?php echo $category;?></option>  
            <?php   
                }
              ?>
          </select>
            
          </div>
          <div class="col-md-1">
                <button type="submit" style="" class="form-control" name="filter">Filter</button>
            </div>
      </div>
      </form>

     
          
      <form action="display.php" method="get">
      <div class="right-container pull-right">
        <div class="right-wala">
         <?php
            foreach($ngo as $value){
            ?>
          <div class="first1">
           <?php
                if ($value[6] == 3){
            ?>
            <img src="../../../css/img/purpose/<?php print_r($value[7]);?>.jpg" height="220px" width="330px">
            <?php
                }else{
            ?>
            <img src="../../../css/img/category/<?php print_r($value[6]);?>.jpg" height="220px" width="330px">
            <?php
                }
            ?>
            <div class="bottom-container">
              <p class="bold1"><?php print_r($value[1]);?></p>
                <p class="bold2"><?php print_r($value[4]) ?></p>
<!--                 <input type="text" value="<?php echo $value[0] ;?>"  name="ngo_id" hidden >-->
                  <span><a type="submit" class="btn read-more open-AddDialog" href="display.php?ngo_id=<?php echo $value[0]?>">Read More</a></span>
                  
                  <span><a type="submit" class="btn read-more open-AddDialog" href="subscribe.php?ngo_id=<?php echo $value[0]?>">Subscribe</a></span>
                  
                </div>

            
              
            </div>
          <?php
            }
            ?>
            </div>
      </div>
      </form>
    </div>

        <ul class="pagination" style="text-align: center;padding-left: 30%;" >
          <li><a href="?pageno=1">First</a></li>
          <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
          </li>
          <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
          </li>
          <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
        </ul>
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