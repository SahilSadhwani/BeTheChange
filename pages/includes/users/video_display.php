<?php
  require_once("../functions.php");
ob_start();
 $ngo_id=$_GET['ngo_id'];   //get

  // print_r($_SESSION);
//  if($_SESSION['did']==NULL)
//  {
//      header("Location: ../../../index.php");
//  }
//  
  // $donations=getngodonations();
  // echo "<pre>";
  // print_r($donations);
         // echo "<pre>";
         //    print_r($donations);
        
    
  ?>
<html>
  <head>
    <title>Add Video</title>
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
      </div>
      
      <div class="right-container pull-left">
           <div class="right-wala">
        <div class="add-event-form">
            <div class="card-container" style="height:600px; margin-left:150px">
           <h1>ADD VIDEO</h1>
           <hr class="rule">
            <form method="POST"  action="add_video_process.php" enctype="multipart/form-data"  >
                
                Video Title <input type="text" class="form-control" id="video_title" name="video_title"><br>
                Video Description  <input type="text" class="form-control" id="video_description" name="video_description">
                <br>
                Video Comment <br><textarea name="voideo_comment" id="" cols="80" rows="3"></textarea> 
                <br>
                <br>
                <div class="fileinput fileinput-new" data-provides="fileinput" >
<!--                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">-->
<!--                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>-->
<!--                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>-->
                    <div>
                       Upload Video
                        <span class="btn default btn-file">
<!--                            <span class="fileinput-new btn" style="color:black;border-radius:0px;border:1px solid black;" > Select image </span>-->
                            <input type="file" name="video"/>
                             </span>
                    </div>
                </div>
                <br>
                <button class="btn" type="submit" style="background:#fda401;border-radius:0px;color:white;float:left;" name="add_video">Add Video</button>
                <input type="text" name="ngo_id" value=<?php echo $ngo_id ?> hidden>
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
  </body>
</html>