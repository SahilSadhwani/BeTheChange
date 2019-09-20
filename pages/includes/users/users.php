<?php
  require_once("../functions.php");
ob_start();
 
  // print_r($_SESSION);
  if($_SESSION['did']==NULL)
  {
      header("Location: ../../../index.php");
  }
  
  // $donations=getngodonations();
  // echo "<pre>";
  // print_r($donations);


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

        $total_pages_sql = "SELECT COUNT(*) FROM donations";
        $result = mysqli_query($connection,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $sql = "SELECT * FROM donations LIMIT $offset, $no_of_records_per_page";
        $res_data = mysqli_query($connection,$sql);
        while($row = mysqli_fetch_array($res_data)){
         
            $donations[]=$row;
          
        }
         // echo "<pre>";
         //    print_r($donations);
        
    
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
            <?php if(!empty($_SESSION['did']))
              {
                  ?>
            <li><a href="../../../profile.php" style="color:white;">PROFILE</a></li>
            <li><a href="../../../about.html" style="color:white;">ABOUT</a></li>
            <li><a href="../../../pages/includes/logout.php" style="color:white;">LOGOUT</a></li>
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
          
          <h2 class="text-center side-option" style="color:#777;font-size:30px;">Donations</h2>
          <hr style="width:100%;background:#000000;">
          
          <h2 class="text-center side-option" style="color:#777;font-size:30px;">Donations</h2>
          <hr style="width:100%;background:#000000;">
          
          <h2 class="text-center side-option" style="color:#777;font-size:30px;">Donations</h2>
          <hr style="width:100%;background:#000000;">
          
          <h2 class="text-center side-option" style="color:#777;font-size:30px;">Donations</h2>
          <hr style="width:100%;background:#000000;">
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
        <div class="right-wala">
          <?php $img[]=[];?>
          <?php $img[0]='../../../css/img/pic1.jpg';?>
          <?php $img[1]='../../../css/img/pic2.jpg';?>
          <?php $img[2]='../../../css/img/pic3.jpg';?>
          <?php $img[3]='../../../css/img/pic4.jpg';?>
          <?php $img[4]='../../../css/img/pic5.jpg';?>
          <?php $img[5]='../../../css/img/pic6.jpg';?>
          <?php $img[6]='../../../css/img/pic1.jpg';?>
          <?php $img[7]='../../../css/img/pic2.jpg';?>
          <?php $img[8]='../../../css/img/pic3.jpg';?>
          <?php $img[9]='../../../css/img/pic4.jpg';?>
          <?php $i=0;?>


          <?php 
            foreach($donations as $value)
            {
             // print_r($value[3]);
            
            ?>
          <div class="first1">
            <img src="<?php echo $img[$i];?>" height="220px" width="330px">
            <?php $i++;?>
            <div class="bottom-container">
              <p class="bold1"><?php print_r($value[4]) ?></p>
              <p class="bold2"><?php print_r($value[5]) ?></p>
              <form action="javascript:void(0);">
                <div class="form-group">
                  <input type="hidden" name="dtitle" id="dnid" value="<?php echo $value[4] ?>">
                  
                  <input type="hidden" name="per" id="per" 
                  value="<?php
                          $score=($value[2]/$value[1])*100;
                          echo(round($score, 2))."%";
                          ?>"
                  >
                  <input type="hidden" name="pled" id="pled" value="<?php echo $value[1] ?>">
                  <input type="hidden" name="desc" id="desc" value="<?php echo $value[5] ?>">
                  <span><button type="button" class="btn read-more open-AddDialog" data-toggle="modal" data-target="#readModal" type="submit">Read More</button></span>
                  <button type="button" class="btn read-more mores" data-toggle="modal" data-target="#myModal<?php  echo ($value[0]) ?>" >Donate</button>
                </div>

              </form>
              
              
              <div class="modal fade" id="myModal<?php  echo ($value[0]) ?>" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header" style="background:#fda401;color:white;border:1px solid #fda401;">
                      <button type="button" class="close" style="color:black;" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title"><?php print_r($value[4]) ?></h4>
                    </div>
                    <div class="modal-body">
                      <form action="javascript:void(0);">
                        <div class="form-group">
                          <label for="usr">Please Enter Amount to be Donated</label>
                          <input type="text" class="form-control" iname="amnt" id="amnt" value="">
                          <input type="hidden" name="dnid" id="dnid" value=<?php  echo ($value[0]) ?>>
                        </div>
                        <!--  Amount to be donated <input type="text" name="amnt" id="amnt" value=""> -->
                    </div>
                    <div class="modal-footer">
                    <button class="btn pay" type="submit" id="contribute" style="background:#fda401;color:white;">Contribute</button>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal fade" id="readModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                    <div class="modal-header" style=" height: 61px;">
                      <h5 class="modal-title" id="exampleModalLongTitle" style="margin: 0px;padding:0px"><p class="bold1" style="margin: 0px;padding:0px" name="dtitle" id="dtitle"></p></h5>
                      
                    </div>
                    <div class="modal-body">
                       

                      <h4>Progress Status</h4>
                      
                      <div class="box1">

                        <div class="box2" name="per2" id="per2"><span class="percent">
                          

                        </span></div>
                      </div>
                      <div>
                        <p class="bold2" name="ple" id="ple"></p>
                        <p class="bold2" name="desc2" id="desc2"></p>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php
            }
            ?>
            
      </div>
    </div>
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