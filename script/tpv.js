$(function() {
    var winWidth = screen.width;

    var limit = 170;
    if(winWidth<=1024) limit = 300;
    if(winWidth<=768) limit = 200;
    if(winWidth<=736) limit = 550;
    if(winWidth<=667) limit = 620;
    if(winWidth<=414) limit = 650;
    if(winWidth<=320) limit = 840;

    var def = 600;
    if(winWidth<=736) def = 1000;
    if(winWidth<=601) def = 1300;
    if(winWidth<=414) def = 800;

    var init = $("#slide_1").offset().top;
    $(window).scroll(scroll);
    function scroll() {
        var top = $(this).scrollTop();
        if(top>init) {
            top -= def;
            if(top>-322 && top <= limit) {
                $("#card").css("background-position","85.4% "+top+"px");
            }
        }
    }

});

