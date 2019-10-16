<?php
include_once("Mailer.php");
 $mailer = new Mailer();
 
if(isset($_GET["user_email"])){
    $user_email = $_GET["user_email"];
//    $user_email = "2016.sahil.sadhwani@ves.ac.in";

$subject = "A mail for verification purpose!";
$email=$user_email;
        $body = "<div style='font-family:Roboto; font-size:16px; max-width: 600px; line-height: 21px;'>   
            <h3>Hey XXX, Thankyou for registering with us!</h3>
            <br>  
            <p style='text-decoration:none; color:#fff; background-color:#08476e;border:solid #08476e; border-width:2px 10px; line-height:2;font-weight:bold; text-align:center; display:inline-block;border-radius:4px'>
			Our new product is added. Please have a look
			</p>
            <br>
            <a href='https://www.google.com'></a>
            <br>
            <h3>Thank you for being with us and helping the needy ones.</h3>
            <br>
            <br>
            <h4>Sincerely,</h4>
            <h5>The BeTheChange Team.</h5>
			 <img src='http://ceque.org/wp-content/uploads/2016/10/ceque-mobile-logo-2.jpg'>

            </div>";

	//$mailer->AddEmbeddedImage('img/2u_cs_mini.jpg', 'logo_2u');
       return( $mailer->send_mail($email, $body, $subject));
//    echo "<script>window.location.href='includes/ngo/add_product.php</script>";
//    header("Location: includes/ngo/add_product.php");
}
?>
