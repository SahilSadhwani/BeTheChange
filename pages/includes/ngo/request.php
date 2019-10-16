<?php
  require_once("../functions.php");
ob_start();
if(isset($_GET["id"])){
    $video_id = $_GET["id"];
    $query = "SELECT * FROM video WHERE video_id = $video_id";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
    $video_title = $row["video_title"];
    $video_description = $row["video_description"];
    $video_duration = $row["video_duration"];
    $datetime = $row["datetime"];
    $video_submitted_by = $row["user_id"];
    
    $query = "SELECT UNAME, U_EMAIL FROM users WHERE UID = $video_submitted_by";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
    $UNAME = $row["UNAME"];
    $U_EMAIL = $row["U_EMAIL"];
}

if(isset($_POST["accept"])){
    $query = "UPDATE video SET video_status = 1 WHERE video_id = $video_id";
    $result = mysqli_query($connection, $query);
    header("Location: view_all_requests.php");   
}
if(isset($_POST["decline"])){
    $video_comment = $_POST["video_comment"];
//    echo $video_comment;
    $query = "UPDATE video SET voideo_comment = '$video_comment', video_status = 2 WHERE video_id = $video_id";
//    echo $query;
    $result = mysqli_query($connection, $query);
    header("Location: view_all_requests.php"); 
}




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
    
  ?>
<html>
 
 <?php
$video = "videos/$video_id.mp4";
?>
 
  <head>
    <title>Requests</title>
<!--
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i" rel="stylesheet">
-->
    <link rel="stylesheet" href="../../../vendors/bootstrap/css/bootstrap.min.css">
<!--
    <link rel="stylesheet" href="../../../vendors/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../../../vendors/assets/owl.theme.default.css">
    <link rel="stylesheet" href="../../../vendors/OwlCarousel2-2.3.4/dist/assets/owl.theme.blue.css">
    <link rel="stylesheet" href="../../../vendors/bootstrap-toastr/toastr.min.css">
    <link href="../../../vendors/WOW-master/dist/wow.min.js">
-->
    <link rel="stylesheet" href="../../../css/donors1.css">
    
    
    
<!--    jplayer script-->
    <link type="text/css" href="../jPlayer/dist/skin/pink.flag/css/jplayer.pink.flag.css" rel="stylesheet" />
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src = "../jPlayer/dist/jplayer/jquery.jplayer.min.js"></script>
        <script type="text/javascript" src = "../jPlayer/dist/jplayer/jquery.jplayer.js"></script>
     <script type="text/javascript">
    $(document).ready(function(){
      var path = "<?php echo $video; ?>";
      $("#jquery_jplayer_1").jPlayer({
        ready: function () {
          $(this).jPlayer("setMedia", {
            title: "",
            m4v: path,
            // ogv: "http://www.jplayer.org/video/ogv/Big_Buck_Bunny_Trailer.ogv",
            poster: "http://www.jplayer.org/video/poster/Big_Buck_Bunny_Trailer_480x270.png"
          });
        },
        cssSelectorAncestor: "#jp_container_1",
        swfPath: "/js",
        supplied: "m4v, ogv",
        useStateClassSkin: true,
        autoBlur: false,
        smoothPlayBar: true,
        keyEnabled: true,
        remainingDuration: false,
        toggleDuration: true,
        cssSelector: {
            videoPlay: '.jp-video-play',
            play: '.jp-play',
            pause: '.jp-pause',
            stop: '.jp-stop',
            seekBar: '.jp-seek-bar',
            playBar: '.jp-play-bar',
            mute: '.jp-mute',
            currentTime: '.jp-current-time'
        }
      });

//     while(true){
//         var time = 4.683212;
//         if(time === $("#jquery_jplayer_1").data("jPlayer").status.currentTime){
//             console.log("matched");
//         }
//     }
//
//
//      
    });
//    
//     $("button").click(function(e){
//         console.log("hello");
//         console.log($("#jquery_jplayer_1").data("jPlayer").status.currentTime);
//         document.getElementById("duration").value= $("#jquery_jplayer_1").data("jPlayer").status.currentTime;
//     });
//     document.getElementById("button").addEventListener("click", function(e){
//         console.log("hello");
//     });
    
        </script>

    
    
    
    
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
      
      <div class="container" >
        <div class="navbar-header margin" style="border-radius: 0px;">
          <a class="navbar-brand" href="../../../index.php">
          <img src="../../../css/img/mylogo.png" style="margin-top:-80px;">
          </a>
        </div>
        
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-right change">
            <li class="big"><a href="#" style="color:white;">HOME</a></li>
            
            <li><a href="../../../profile.php" style="color:white;">PROFILE</a></li>
            <li><a href="../../../about.html" style="color:white;">ABOUT</a></li>
            <li><a href="../../../pages/includes/logout.php" style="color:white;">LOGOUT</a></li>
            
          </ul>
        </div>
             
         </div>
    </nav>
   
<!--
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
-->
    <div class="clearfix"></div>
    <div class="new-section">
      <div class="sidebar-container pull-left">
          
          <h2 class="text-center side-option" style="color:#777;font-size:30px;"><a href="request.php" style="color:#777;font-size:30px; text-decoration:none;">Requests</a></h2>
          <hr style="width:100%;background:#000000;">
          
          <h2 class="text-center side-option" style="color:#777;font-size:30px;"><a href="" style="color:#777;font-size:30px; text-decoration:none;">History</a></h2>
          <hr style="width:100%;background:#000000;">
          
          <h2 class="text-center side-option" style="color:#777;font-size:30px;"><a href="" style="color:#777;font-size:30px; text-decoration:none;">View all videos</a></h2>
          <hr style="width:100%;">
          
        
      </div>
       
      <div class="right-container pull-right">
        <div class="right-wala" style="width: 1000px; margin-left: 200px;">
        
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    
                    
                    <div id="jp_container_1" class="jp-video " role="application" aria-label="media player">
                <div class="jp-type-single">
                  <div id="jquery_jplayer_1" class="jp-jplayer"></div>
                  <div class="jp-gui">
                    <div class="jp-video-play">
                      <button class="jp-video-play-icon" role="button" tabindex="0">play</button>
                    </div>
                    <div class="jp-interface">
                      <div class="jp-progress">
                        <div class="jp-seek-bar">
                          <div class="jp-play-bar"></div>
                        </div>
                      </div>
                      <div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
                      <div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
                      <div class="jp-details">
                        <div class="jp-title" aria-label="title">&nbsp;</div>
                      </div>
                      <div class="jp-controls-holder">
                        <div class="jp-volume-controls">
                          <button class="jp-mute" role="button" tabindex="0">mute</button>
                          <button class="jp-volume-max" role="button" tabindex="0">max volume</button>
                          <div class="jp-volume-bar">
                            <div class="jp-volume-bar-value"></div>
                          </div>
                        </div>
                        <div class="jp-controls">
                          <button class="jp-play" role="button" tabindex="0">play</button>
                          <button class="jp-stop" role="button" tabindex="0">stop</button>
                        </div>
                        <div class="jp-toggles">
                          <button class="jp-repeat" role="button" tabindex="0">repeat</button>
                          <button class="jp-full-screen" role="button" tabindex="0">full screen</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="jp-no-solution">
                    <span>Update Required</span>
                    To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                  </div>

<!--                  <button id="button1">Get duration</button>  -->
                  <p id="duration"></p>
                </div>
                
                <div class="row">
                      <div class="col-md-4">
                          <button id="button2" class="btn green" style="margin-left:90px; background:#eee; color:#777;">Start</button> 
                      </div>
                      <div class="col-md-4">
                          <button id="button3" class="btn green" style="margin-left:90px; margin-bottom:30px; background:#eee; color:#777;">End</button> 
                      </div>
                      <form action="" method="post">
                      <div class="test" style="display:none">
                   
                    <input type="text" id="start" name="start">
                    <input type="text" id="stop" name="stop">
                       </div>
                    
                      <div class="col-md-2">
<!--                          <button id="button3"type="submit" name="point" class="btn green">Point</button> -->
                      </div>
                          </form>
                          
                  <p id="duration"></p>
                  
                </div>
              </div>


                    
                    
                </div>
                <div class="col-md-6">
                    <h3>Title : <?php echo $video_title; ?></h3>
                    <h3>Description : <?php echo $video_description; ?></h3>
                    <h3>Duration : <?php echo $video_duration; ?> minutes</h3>
                    <h3>Submission Time : <?php echo $datetime; ?></h3>
                    <h3>Submitted By : <?php echo $UNAME; ?></h3>
                    
                    
                    
                    
                    <form action="" method="post" style="margin-top:40px; margin-left:100px;">
                       <div>
                       <p id="demo"></p>
                        <label for="" style="font-size:25px; font-weight:200; margin-top: -20px; margin-left:-100px;" >Comments : </label>
                           <div style="margin-bottom: 30px;"><textarea name="video_comment" id="video_comment" cols="70" rows="6" style="margin-left:-100px;"></textarea></div>
                    </div>
                        <button type="submit" class="btn btn-success" name="accept" style="font-size:25px;">Accept</button>
                        <button type="submit" class="btn btn-danger" style="font-size:25px; margin-left: 30px;" name="decline" id="decline">Decline</button>
                    </form>
                    
                </div>
                
                </div>
            </div>
        </div> 
         
        </div>
        
         
          
               
        </div>
      
      
      <script>
//          function myFunction() {
//  var inpObj = document.getElementById("decline").value;
//  if (inpObj==" ") {
//    document.getElementById("demo").innerHTML = "Please fill comments section";
////      alert("Please fill comments section");
//  }
}
      </script>

    
<!--    <script src="../../../vendors/jquery/jquery-3.3.1.min.js"></script>-->
    
    <!--Bootstrap Script-->
<!--    <script src="../../../vendors/bootstrap/js/bootstrap.min.js"></script>-->
<!--
    <script>
      document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.carousel');
    var instances = M.Carousel.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.carousel').carousel();
  });
      </script>
-->
    <!--END OF CORE JS-->
    <!--Custom Js-->
<!--
    <script src="../../../vendors/WOW-master/dist/wow.min.js"></script>
    <script src="../../../vendors/jquery.magnific-popup.min.js"></script>
    <script src="../../../vendors/owl.carousel.min.js"></script>
    <script src="../../../vendors/jquery.waypoints.min.js"></script>
    <script src="../../../vendors/jquery.counterup.min.js"></script>
    <script src="../../../vendors/bootstrap-toastr/toastr.min.js"></script>
    <script src="../../../vendors/jquery-ui.min.js"></script>
    <script src="../../../js/script.js"></script>
-->
    <script>
//      toastr.options = {
//        "closeButton": true,
//        "debug": false,
//        "newestOnTop": true,
//        "progressBar": true,
//        "positionClass": "toast-top-right",
//        "preventDuplicates": false,
//        "onclick": null,
//        "showDuration": "300",
//        "hideDuration": "1000",
//        "timeOut": "5000",
//        "extendedTimeOut": "1000",
//        "showEasing": "swing",
//        "hideEasing": "linear",
//        "showMethod": "fadeIn",
//        "hideMethod": "fadeOut"
//      }
      
    </script>
    <script>
      // $(function () {
      //     $(".custom-close").on('click', function() {
      //         $('#myModal').modal('hide');
      //     });
      // });
//      $(document).on("click", ".open-AddDialog", function () {
//           var form = $(this).closest("form");
//           var dtitle= form[0]["dtitle"].value;
//           var desc= form[0]["desc"].value;
//           // console.log(desc);
//           var per= form[0]["per"].value;
//           var ple= form[0]["pled"].value;
//
//           // console.log(per);
//
//
//           // console.log(dtitle);
//           $("#dtitle").html(dtitle);
//           $("#ple").html("Pledge Amount - "+ple);
//           $("#desc2").html(desc);
//           $("#per2").html(per);
//           document.getElementById('per2').style.width = per;
//           document.getElementById('per2').style.animation.to = per;
//
//      });
//      $("form").submit(function(){
//          
//          var form_data = $(this).closest("form");
//          // console.log(form_data);
//          $dnid = form_data[0]["dnid"].value;
//          var dnid= form_data[0]["dnid"].value;
//          $amnt = form_data[0]["amnt"].value;
//          // console.log(form_data[0]["dnid"].value);
//          // document.write(dnid);
//          $('#myModal'+dnid).modal('hide');
//          // $dnid = document.getElementById('dnid').value;
//      
//          // $amnt = document.getElementById('amnt').value;
//      
//          //var data = form_data.split("&");
//          // console.log(form_data[2]["amnt"].value);
//          // console.log($amnt);
//          //fetching all the other values from database using ajax ans loading them onto their respective edit fields!
//          // console.log($eid);
//          $.ajax({
//              // url: "http://localhost/be-the-change/getDonations.php",
//              url : "getDonations.php",
//              method:"POST",
//              data:{dnid:$dnid,amnt:$amnt},
//              dataType:"json",
//              success:function(response){
//                  // print_r(response);
//      
//                  if(response.done=="Amount Donated!")
//                  {
//                      toastr["success"]("YOU HAVE A SUCCCESFULLY DONATED");
//                  }else if(response.done==false){
//                      toastr["error"]("SOMETHING WENT WRONG1");
//                  }else{
//                      alert(response.done);
//                  }
//              
//              },
//              // error: function( jqXhr, textStatus, errorThrown ){
//              //     console.log( JSON.stringify(errorThrown) );
//              // }
//              error: function () {
//                  toastr["error"]("SOMETHING WENT WRONG1");
//              }  
//                  
//              
//          });
//      });
    </script>
    <script>

        // document.getElementById("button").addEventListener("click", function(){
//            document.getElementById("demo").innerHTML = "Hello World";
        // console.log("hello");
        // });
        
            
        $("#button2").click(function(){
//            ("#button3").removeAttr("disabled");  
//            ("#button2").addAttr("disabled");
            var hi = $("#jquery_jplayer_1").data("jPlayer").status.currentTime;
//            $("#start").val(hi);
//            alert(hi);
            document.getElementById("video_comment").innerHTML = "Start time : "+hi;
            
        });

        $("#button3").click(function(e){
//            ("#button2").removeAttr("disabled");  
//            ("#button3").addAttr("disabled");
            var hi = $("#jquery_jplayer_1").data("jPlayer").status.currentTime;
//            $("#stop").val(hi);
//            alert(hi);
            var s = document.getElementById("video_comment").value;
            document.getElementById("video_comment").innerHTML = s+" and End time : "+hi;
        });

        $("#button1").click(function(e){
        console.log("hello");
        console.log($("#jquery_jplayer_1").data("jPlayer").status.currentTime);
        document.getElementById("duration").value= $("#jquery_jplayer_1").data("jPlayer").status.currentTime;
        });

        $("#jquery_jplayer_1").bind($.jPlayer.event.timeupdate, function(event) { 
            console.log($("#jquery_jplayer_1").data("jPlayer").status.currentTime);
        });

</script>
  </body>
</html>