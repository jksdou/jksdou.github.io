$(window).load(function () {
    $('.preloader').delay(230).fadeOut("slow");
});

$(function () {
    jQuery(document).ready(function () {
        $('body').backstretch([
            "static/img/background-0.jpg",
            "static/img/background-1.jpg",
            "static/img/background-2.jpg",
            "static/img/background-3.jpg"
        ], { duration: 3200, fade: 1300 });
    });
})