/******************Scroll Animation JS********************/
AOS.init({
    duration: 1200,
    once: true
});

/******************Loader JS********************/
$(window).on ('load', function (){
    // Site Preloader
    $('#site-preloader').fadeOut(); // will first fade out the loading animation
    $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
    $('body').delay(350).css({'overflow':'visible'});

});

/******************Document Ready JS********************/
$(document).ready(function() {

    //Scroll To Top JS
    $(window).on( 'scroll', function(){
        if ($(window).scrollTop() > 600) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });

    $(document.body).on('click', '.scrollToTop', function() {
        $('html, body').animate({
            scrollTop: 0
        }, 800);
        return false;
    });

});


//Navbar Fixed Header When Scroll JS
$(window).scroll(function(){
    if ($(window).scrollTop() >= 100) {
        $('header').addClass('fixed-header');
    }
    else {
        $('header').removeClass('fixed-header');
    }
});


//Courses Slider JS
$('#courses-listing-slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: false,
    arrows: true,
    autoplay: false,
    autoplaySpeed: 3000,
    prevArrow:"<button type='button' class='slick-prev pull-left'><img src='./public/images/svg/play-btn.svg' width='35' alt='Prev'></button>",
    nextArrow:"<button type='button' class='slick-next pull-right'><img src='./public/images/svg/play-btn.svg' width='35' alt='Next'></button>",
    responsive: [
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});