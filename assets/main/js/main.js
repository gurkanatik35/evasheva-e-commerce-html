
$(document).click(function(e) {
    var target = e.target;

    if ($('.bott').hasClass("opened")) {
        if (!$(target).is('.bott') && !$(target).is('.navOpener') && !$(target).is('.navOpener i')){
            $('.bott').removeClass("opened");
            $('.overlay').fadeToggle( "slow", "linear" );
        }
    }
});
$(".navOpener").click(function () {

    $('.bott').toggleClass("opened");
    $('.overlay').fadeToggle( "slow", "linear" );

});

$(".plus").click(function () {

    var counted = $('.counted').val();
    $('.counted').attr('value',parseInt(counted)+1);

});
$(".minus").click(function () {

    var counted = $('.counted').val();
    if (counted != 1 || counted > 1){
        $('.counted').attr('value',parseInt(counted)-1);
    }

});
$('.owl-carousel.mainCarousel').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});

$('.owl-carousel.productCarousel').owlCarousel({
    margin:10,
    autoplay:true,
    autoplayTimeout:4000,
    nav:false,
    dots:false,
    loop:false,
    center:true,
    URLhashListener:true,
    autoplayHoverPause:true,
    startPosition: 'URLHash',
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})