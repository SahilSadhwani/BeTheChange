$(function(){
    new WOW().init();
$(".customer-testimonials").owlCarousel({
    items:1,
    autoplay:true,
    smartSpeed:700,
    loop:true,
    autoplayHoverPause:true,
//    responsive:{
//        0:{
//            items:1,
//            autoplayHoverPause:false,
//        },
//        480:{
//            items:2,
//        },
//        768:{
//            items:3,
//        },
//        
//    },
//    
});
$(".owl-one").owlCarousel({
    items:3,
    autoplay:true,
    smartSpeed:700,
    loop:true,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1,
            autoplayHoverPause:false,
        },
        480:{
            items:2,
        },
        768:{
            items:3,
        },
        
    },
    

});   

});