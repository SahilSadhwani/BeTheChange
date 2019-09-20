$(document).ready(function(){
    $("#signup_button").click(function(){
        $("#main").animate({left:"22.5%"},400);
        $("#main").animate({left:"30%"},400);
        $("#login_form").css("visibility","hidden");
        $("#login_form").animate({left:"25%"},400);
        
        $("#signup_form").animate({left:"17%"});
        $("#signup_form").animate({left:"30%"});
        $("#signup_form").css("visibility","visible");
    });
        
    $("#log_button").click(function(){
        $("#main").animate({left:"77.5%"},400);
        $("#main").animate({left:"70%"},400);
        
        $("#signup_form").css("visibility","hidden");
        $("#signup_form").animate({left:"25%"},400);
        
        $("#login_form").animate({left:"83.5%"});
        $("#login_form").animate({left:"70%"});
        $("#login_form").css("visibility","visible");
        
        
        
    });

                             
    
                  
});