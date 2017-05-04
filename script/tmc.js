$(function() {

    var slide = $("#slide_1");
    var offsetTop = slide.offset().top;
    var halfW = slide.width()/3;
    var halfH = slide.height()/2;
    var handCard = $("#hand_card");

    var fixX = 131;
    var fixY = -86;

    slide.on("mousemove",function(e) {
        var x = fixX - (e.pageX-halfW)/500;
        var y = fixY + (e.pageY-offsetTop-halfH)/30;
        handCard.css("background-position",x+"% "+y+"%");
    });

});