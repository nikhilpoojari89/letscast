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

    //Click To Scroll Down JS
    $(".navigate-down").click(function() {
        $('html, body').animate({
            scrollTop: $(".scroll-down").offset().top
        }, 1500);
    });
});

/******************Document Ready JS********************/
$(document).ready(function() {

    //NOFILTER Stream Video Popup JS
    var $videoSrc;  
    $('.video-btn').click(function() {
        $videoSrc = $(this).data( "src" );
    });
    console.log($videoSrc);

    $('#nofilter_modal').on('shown.bs.modal', function (e) {
        $("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" ); 
    });

    $('#nofilter_modal').on('hide.bs.modal', function (e) {
        $("#video").attr('src',$videoSrc); 
    });

    //Job Location Select JS
    $('#job_location_select').on('change', function (e) {
        $('#job_location_tab li a').eq($(this).val()).tab('show'); 
    });

    //DatePicker JS
    $('.datepicker').datepicker({
        clearBtn: true,
        format: "dd/mm/yyyy",
        todayHighlight: true,
        autoclose: true
    });

//     $("#datepicker").datepicker({ 
//         autoclose: true, 
//         todayHighlight: true
//   }).datepicker('update', new Date());

    //Dynamic Job Position & Location To Modal JS
    $('#job_application').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var job_title = button.data('title');
        var job_location = button.data('location');
        var modal = $(this);
        // modal.find('.modal-title').text('Apply for a Position of ' + job_title);
        modal.find('.modal-body input#jobappJobPosition').val(job_title);
        modal.find('.modal-body input#jobappJobLocation').val(job_location);

    });

    // bsCustomFileInput.init();

});

//Contact Form Floating JS
$(".floating-form").on("click",".floating-form-icon, .closeit",function(e){
    e.preventDefault();
    $(".floating-form").toggleClass("opened");
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

//Home Page Word Slider JS
$('.word-slider').slick({
    vertical: true,
    autoplay: true,
    autoplaySpeed: 2000,
    speed: 200,
    arrows: false,
    dots: false
});

//Career Gallery Slider JS
$('.life-sl-slider').slick({
    slidesToShow: 2,
    slidesToScroll: 2,
    dots: false,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 3000,
    prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
    nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
    responsive: [
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});

/******************Video Player With Poster JS********************/
var tag = document.createElement('script');
tag.src = "//www.youtube.com/player_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
var player;

function onYouTubeIframeAPIReady() {
    player = new YT.Player('home-video', {
        events: {
        'onReady': onPlayerReady
        }
    });
};

function onPlayerReady(event) {
    $('#playvideo').on('hide.bs.modal', function () {
        player.stopVideo();
    });
    $('#playvideo').on('show.bs.modal', function () {
        player.playVideo();
    });
};

window.addEventListener("load",function () {
    $(document).on('click','.js-videoPoster',function(ev) {
        ev.preventDefault();
        var $poster = $(this);
        var $wrapper = $poster.closest('.js-videoWrapper');
        videoPlay($wrapper);
    });

    function videoPlay($wrapper) {
        var $iframe = $wrapper.find('.js-videoIframe');
        var src = $iframe.data('src');
        $wrapper.addClass('videoWrapperActive');
        // document.getElementById('video-play').play()
        $iframe.attr('src',src);
    }
});