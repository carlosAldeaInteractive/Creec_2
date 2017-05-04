$(function(){
    $("h3").click(function() {
        var $self = this;
        var id = $(this).attr("id");
        $(this).toggleClass("open");
        if($(this).hasClass("open")) {
            $($(this).find("~section")[0]).slideDown(300);
            $(this).siblings("h3").each(function() {
                $(this).removeClass("open");
                $($(this).find("~section")[0]).slideUp(300);
            });
        }else {
            $($(this).find("~section")[0]).slideUp(300);
        }
    });
    var scroller = $("#scroller");
    var initialOffset = scroller.offset().top-30;
    $(window).scroll(function() {
        var top = $(this).scrollTop();
        if(top>=initialOffset) {
            scroller.addClass("fix");
        }else {
            scroller.removeClass("fix");
        }
    }).trigger("scroll");
    scroller.find("span").click(function() {
        var toIdSelector = $(this).attr("to");
        $("html, body").stop().animate({scrollTop:$(toIdSelector).offset().top}, 1000, 'swing', function() {});
    });
});