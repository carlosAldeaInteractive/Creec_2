$(function() {
    var slide = $("#slide_1");
    var offsetTop = slide.offset().top;
    var halfW = slide.width()/2;
    var halfH = slide.height()/2;

    var mainW = $(window).width();
    if(mainW > 1024) {
        slide.on("mousemove",function(e) {
            var x = (e.pageX-halfW)/40;
            var y = (e.pageY-offsetTop-halfH)/20;
            $("#card").css("transform","rotateX("+y+"deg) rotateY("+x+"deg)");
        });
    }else {
        var counter = 0;
        setInterval(function() {
            counter += 0.1;
            var sin = Math.sin(counter)*3;
            var cos = Math.cos(counter)*3;
            $("#card").css("transform","rotateX("+sin+"deg) rotateY("+cos+"deg)");
        },30);
    }


    $("#openComisiones").click(function() {
        $("#slide_5").fadeIn(300);
        $("html,body").addClass("stopScroll");
    });

    $("#closeSlide5").click(function() {
        $("#slide_5").fadeOut(300);
        $("html,body").removeClass("stopScroll");
    });

    /*
    * perspective: 76em;
     perspective-origin: 50% 50px;
    * */
});