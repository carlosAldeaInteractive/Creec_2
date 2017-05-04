$(function() {
    console.log("x");
    var limit = $("#slide_2").offset().top;
    var pass = false;
    var timeout = -1;
    var once = true;
    $(window).scroll(function() {
        var top = $(this).scrollTop();
        if(top>=limit ) {
            pass = true;
            clearTimeout(timeout);
            once = false;
            $("#slide_2").addClass("passed");

        }else if(top<limit) {
            once = false;
            pass = false;
            $("#slide_2").removeClass("passed");
        }
    }).trigger("scroll");
});