<html>
    <head>
        <title>Forms</title>
        <link rel="stylesheet" href="css/login1.css">
        <link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/login.js"></script>
    </head>
    <body style="background:#fda401;">
       <div id="box">
       
           <div id="main"></div>
           
            <div id="login_form">
              <a href='index.php'><img src="css/img/black-logo.png" height="200px"; width="200px";></a>
               <h1>Login</h1>
               <form action="pages/includes/loginfunction.php" method="POST">
                    <input type="email" placeholder="Email" name="email" required>
                    <input type="password" placeholder="Password" name="password" required><br>
                   <button type="submit">LOGIN</button>
               </form>
              
            </div>
            <div id="signup_form">
               <a href='index.php'><img src="css/img/black-logo.png" height="200px"; width="200px";></a>
                <h1>Sign Up</h1>
                <form action="pages/includes/signupfunction.php" method="POST" id="login" name="login" onsubmit="return validateForm()" >
                    <input type="text" placeholder="Name" name="username" required=""><br>
                    <!-- <input type="text" placeholder="age" name="age" required=""><br> -->
                    <input type="email" placeholder="Email" name="email" required=""><br>
                    <input type="password" placeholder="Password" name="password" required=""><br>
                    <input type="phone" placeholder="PhoneNumber" name="phone" required=""><br><br>
                    <div class="form-group">
                        <select name="category_id" id="category_id" class="form-control" style="border:1px solid #454545;">
                           <option>Choose Ur Role</option>
                           <option>Volunteer</option>
                           <option>Donor</option>
                           <option>NGO</option>
                            
                        </select>
                    </div>
                
                    
                    
<!-- 
                    <span><input type="radio" value="1" name="role">Be A Donor<br>
                    <input type="radio" value="2" name="role">Be A Volunteer<br>
                    <input type="radio" value="3" name="role">NGO<br></span>
 -->
               <button type="submit">SIGN UP</button>
            </form>
            </div>
            <div id="login_msg">Have an Account?</div>
            <div id="signup_msg">Don't have an Account?</div>
        <button id="log_button">LOGIN</button>
        <button id="signup_button">SIGN UP</button>
        </div>
        
    </body>
</html>
<!-- <script>
  function validateForm() {
    var x = document.forms["login"]["age"].value;
    if (x > 100) {
        alert("Please Enter Valid Age");
        return false;
    }
  }
</script> -->