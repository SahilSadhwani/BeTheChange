<html>
    <head>
        <title>Forms</title>
        <link rel="stylesheet" href="css/login1.css">
        <link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/login.js"></script>
    </head>
    <body style="background-color:#fda401">
       <!-- <div id="box"> -->
       
       <div id="main" style="margin:0 auto;left:50%;"></div>
       
        <div id="login_form" style="left:50%;">
          <img src="css/img/black-logo.png" height="200px"; width="200px";>
           <h1>Admin Login</h1>
           <form action="pages/includes/loginfunction.php" method="POST">
                <input type="email" placeholder="Email" name="email" required><br>
                <input type="password" placeholder="Password" name="password" required><br>
               <button type="submit" style="text-align: center;">LOGIN</button>
           </form>
          
        <!-- </div> -->
        
        </div>
        
    </body>
</html>