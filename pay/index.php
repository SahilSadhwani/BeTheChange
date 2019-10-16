<?php 
// Include configuration file  
require_once 'config.php'; 
?>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<div class="container">
    
     <div class="jumbotron" style="margin-top: 100px; padding-left:40px; padding-right:40px; width:680px; margin-left:200px"  >
<div class="container" style="margin-left:150px; ">
                  <div class="row">
                   <div class="col-md-2" style="width: 45px; margin-top:10px;">
                      <img src="logo.png" height=40px style="", width="40px;"> 
                   </div>
            		<div class="col-md-8">
            		    <h3>tripe Paymnet Gateway</h3>
            		</div>
            		</div>

    
    <div class="panel-body">
        <!-- Display errors returned by createToken -->
        <div class="payment-status"></div>
        <!-- Payment form -->
    <form action="https://dashboard.stripe.com/test/balance/overview" method="POST" role="form">

	<div class="form-group">
		<label for="">Email</label>
		<input type="text" class="form-control" id="" placeholder="Email" style="width:50%;" name="email">
	</div>
	<div class="form-group">
		<label for="">Card Number</label>
		<input type="text" class="form-control" id="" placeholder="1234 1234 1234" style="width:50%;" name="card_number">
	</div>
	<div class="form-group">
	<label for="">Validity</label>
	<div class="row">
	    <div class="col-md-3">
	       <input type="text" class="form-control" placeholder="MM" name="mm"> 
	    </div>
	    
	    <div class="col-md-3">
	       <input type="text" class="form-control" placeholder="YY" name="yy"> 
	    </div>
	</div>
	</div>
	<div class="form-group">
		<label for="">CVC</label>
		<input type="text" class="form-control" id="" placeholder="CVC No" style="width:50%;" name="cvc">
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>

    </div>
    </div>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- Stripe JavaScript library -->
<script src="https://js.stripe.com/v2/"></script>
<!-- jQuery is used only for this example; it isn't required to use Stripe -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>




<script>
// Set your publishable key
Stripe.setPublishableKey('<?php echo STRIPE_PUBLISHABLE_KEY; ?>');

// Callback to handle the response from stripe
function stripeResponseHandler(status, response) {
    if (response.error) {
        // Enable the submit button
        $('#payBtn').removeAttr("disabled");
        // Display the errors on the form
        $(".payment-status").html('<p>'+response.error.message+'</p>');
    } else {
        var form$ = $("#paymentFrm");
        // Get token id
        var token = response.id;
        // Insert the token into the form
        form$.append("<input type='hidden' name='stripeToken' value='" + token + "' />");
        // Submit form to the server
        form$.get(0).submit();
    }
}

$(document).ready(function() {
    // On form submit
    $("#paymentFrm").submit(function() {
        // Disable the submit button to prevent repeated clicks
        $('#payBtn').attr("disabled", "disabled");
		
        // Create single-use token to charge the user
        Stripe.createToken({
            number: $('#card_number').val(),
            exp_month: $('#card_exp_month').val(),
            exp_year: $('#card_exp_year').val(),
            cvc: $('#card_cvc').val()
        }, stripeResponseHandler);
		
        // Submit from callback
        return false;
    });
});
</script>
