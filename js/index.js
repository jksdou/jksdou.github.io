$(window).load(function() {
    $('.preloader').delay(1000).fadeOut("slow"); 
});

$(function() {
    jQuery(document).ready(function() {
        $('body').backstretch([
          "images/background-0.jpg",
          "images/background-1.jpg",
          "images/background-2.jpg",
          "images/background-3.jpg"
        ], { duration: 3200, fade: 1300 });
    });
})