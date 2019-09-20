<?php
  require_once("pages/includes/functions.php");
  session_start();
    // print_r($_SESSION);
    // console.log($_SESSION);
    if($_SESSION['uid']==NULL or $_SESSION['nid']!=NULL or $_SESSION['did']!=NULL or $_SESSION['vid']!=NULL)
    {
        header("Location: index.php");
    }
  $vol=getallvolunteers();
  // echo "<pre>";
  // print_r($vol);
  // exit;
  ?>
  <html>
      <head>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
          <link rel="stylesheet" href="vendors/datatables/datatables.min.css">
          <link rel="stylesheet" href="vendors/datatables/plugins/bootstrap/datatables.bootstrap.css">
          <link rel="stylesheet" href="header.css">
      </head>
      <body>
          <div class="topnav" id="myTopnav">
    <span class="logo">DASHBOARD</span>
    
    <a href="pages/includes/logout.php" class="pull-right">Logout</a>

    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
   
    <div class="sidenav">
    <div class="top-wala">
      <!-- <img src="css/img/black-logo.png" height="150px"; width="200px";> -->
    <a href="header.php">View Volunteer</a>
    <a href="viewdonor.php">View Donor</a>
    <a href="viewngo.php">View NGO</a>
    <!-- <a href="#">My Profile</a> -->
  </div>
  </div>
  <!-- <table class="table table-striped table-hover table-bordered" style="margin-top:50px;margin-left:200px;">
      <thead>
          <tr>
              
              <th style="width:150px;">VOLUNTEER NAME</th>
              <th style="width:150px;">VOLUNTEER PHONE</th>
              <th style="width:200px;">Delete </th>
              
              
          </tr>
      </thead>

  </table> -->
 <div class="container" style="margin-left: 0px;">
  <table class="table table-striped" style="margin-top:50px;margin-left:220px;">
    <thead>
      <tr>
        <!-- <th scope="col">#</th> -->
        <th scope="col">Name</th>
        <th scope="col">Email</th>
         <th scope="col">View</th>
        <th scope="col">Delete</th>
       
      </tr>
    </thead>
    <tbody>
      <?php foreach ($vol as $key => $value) {
        ;?>
        <tr>
          <!-- <th scope="row">1</th> -->
          <td><?php echo $value[1] ;?></td>
          <td><?php echo $value[2] ;?></td>
          <td><i class="fa fa-eye" aria-hidden="true"></i></td>
          <td><i class="fa fa-trash" aria-hidden="true"></i></td>
        </tr>
          <?php
    } 
    ?>

</table> 

<!-- Use any element to open the sidenav -->
<span onclick="openNav()">open</span>
    </body>
    <script src="vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="datatable.js"></script>
    <script src="vendors/datatables/datatables.min.js"></script>
    <script src="vendors/datatables/plugins/bootstrap/datatables.bootstrap.js"></script>
    <script>
    /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
       
        
    </script>
    
</html>