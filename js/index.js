$(window).load(function () {
    $('.preloader').delay(500).fadeOut("slow");
});

$(function () {
    jQuery(document).ready(function () {
        $('body').backstretch([
            "static/douzhenjiang/background-0.jpg",
            "static/douzhenjiang/background-1.jpg",
            "static/douzhenjiang/background-2.jpg",
            "static/douzhenjiang/background-3.jpg"
        ], { duration: 3200, fade: 1300 });
    });
})