var $ = jQuery;
$(window).on("load",function() {

    $("meta[name='viewport']").attr('content','width=device-width,initial-scale=1.0,maximum-scale=10.0,user-scalable=1');
    var services = $("header>a#services");
    var products = $("header>a#products");

    $(window).resize(function() {
        var reference = $("header a:nth-child(6)");
        var newLeft = reference[0].offsetLeft-(reference.width()/2);
        $("#slide_0").css({"left":newLeft+"px","display":"none"}).removeClass("hiddenPopup");

        var miCartera = $("header a:nth-child(7)");
        var newLeft = miCartera[0].offsetLeft-(miCartera.width()/2);
        $("#slide_00").css({"left":newLeft+"px","display":"none"}).removeClass("hiddenPopup");

        $("#serviciosDropdown").css("left",(services.offset().left-(services.width()/1.75))+"px");
        $("#productosDropdown").css("left",(products.offset().left-(products.width()/2))+"px");
        $("#productosDropdown,#serviciosDropdown").css({"display":"none"}).removeClass("hiddenPopup");
    }).trigger("resize");

    $("#slide_0 #popupClose,header a:nth-child(6)").attr("object_toggleable","#slide_0");
    $("#slide_00 #popupClose,header a:nth-child(7)").attr("object_toggleable","#slide_00");
    services.attr("object_toggleable","#serviciosDropdown");
    products.attr("object_toggleable","#productosDropdown");
    var arrayToggle = [
        {"toOpen":"header a:nth-child(6)","toClose":"#slide_0 #popupClose"},
        {"toOpen":"header a:nth-child(7)","toClose":"#slide_00 #popupClose"},
        {"toOpen":"header>a#services","toClose":"<div>"},
        {"toOpen":"header>a#products","toClose":"<div>"}
    ];
    function closeOthers(except) {
        $("[object_toggleable]").filter(function() {
            return $(this).attr("object_toggleable") != except;
        }).each(function(){
            $($(this).attr("object_toggleable")).slideUp(200);
        });
    }
    for(var object in arrayToggle) {
        if(arrayToggle.hasOwnProperty(object)) {
            var current = arrayToggle[object];
            $(current.toOpen).on("click",function() {
                var object = $($(this).attr("object_toggleable"));
                closeOthers($(this).attr("object_toggleable"));
                if(object.is(":hidden")) {
                    object.slideDown(300);
                }else {
                    object.slideUp(300);
                }
            });
            $(current.toClose).on("click",function() {
                var object = $($(this).attr("object_toggleable"));
                object.slideUp(300);
            });
        }
    }
    
    $("*").bind("click", function (e) {
        if($("header,#slide_0,#slide_00").has(e.target).length == 0 ){
            closeOthers("");
        }

        if($("#mobileMenu").has(e.target).length == 0 && e.target.id != "mobileMenuToggle"){
            toggleMenu(true);
        }
    });

    if($(window).width() > 1024) {
        if($(".square").length) {
            var squares = $(".square")
            var slide = $("#slide_1");
            var offsetTop = slide.offset().top;
            var halfW = slide.width()/2;
            var halfH = slide.height()/2;
            slide.on("mousemove",function(e) {
                squares.each(function() {
                    var square = $(this);
                    var divisorX = parseInt(square.attr("xt"));
                    var divisorY = parseInt(square.attr("yt"));
                    var x = (e.pageX-halfW)/divisorX;
                    var y = (e.pageY-offsetTop-halfH)/divisorY;
                    square.css("transform","translate("+x+"px,"+y+"px)");
                });
            });
        }
    }else {
        var squares = $(".square")
        var slide = $("#slide_1");
        var counter = 0;
        setInterval(function() {
            counter += 0.1;
            squares.each(function() {
                var square = $(this);
                var sin = Math.sin(counter)*200;
                var cos = Math.cos(counter)*200;
                var divisorX = parseInt(square.attr("xt"));
                var divisorY = parseInt(square.attr("yt"));
                var x = (sin)/divisorX;
                var y = (cos)/divisorY;
                square.css("transform","translate("+x+"px,"+y+"px)");
            });
        },30);
    }

    //mobile header
    var mobileMenu = $("#mobileMenu");
    mobileMenu.css("max-height",$(window).innerHeight() - $("header").height());

    mobileMenu.find("a").on("mousedown",function(){
        $(this).addClass("blue");
    }).on("mouseup",function(){
        $(this).removeClass("blue");
    });

    var able = true;
    var toggleBtn = $("#mobileMenuToggle");
    toggleBtn.click(function() {
        if(able) {
            if(mobileMenu.hasClass("visible")) {
                mobileMenu.removeClass("visible");
                toggleMenu(true);
            }else {
                mobileMenu.addClass("visible");
                toggleMenu(false);
            }
        }
    });
    function toggleMenu(hide) {
        able = false;
        if(hide) {
            mobileMenu.slideUp(400);
            toggleBtn.removeClass("show");
        }else {
            mobileMenu.slideDown(400);
            toggleBtn.addClass("show");
        }
        setTimeout(function() {
            able = true;
        },400);
    }
    /*comisiones popup*/
    /*mi cartera vinculo en ayuda*/
    if($(".openContact").length) {
        var contactLink = $(".openContact");
        var popupContact = $("<article id='slide_000' class='popup hiddenPopup_2'>\
                                <div id='popupClose_2' class='click_able'></div>\
                                <div class='image' id='phone_2'></div>\
                                <span>(81) 1107 1045 / (81) 1107 1055</span>\
                                <div class='image' id='at_2'></div>\
                                <span>contacto@cree-c.com</span>\
                                <span id='lastMessage_2'>¿Quieres atención más personalizada? <br id='break_13'> ¡Elige una!</span>\
                                <div class='image' id='webinar_2'></div>\
                                <div id='divisor_2'></div>\
                                <div class='image' id='chat_2'></div>\
                            </article>");
        var leftDiff = (contactLink.outerWidth() - $("#slide_0").outerWidth())/2;
        var mainH = $(window).height();
        var offset = contactLink.offset();
        popupContact.css({
            "bottom":-(offset.top-mainH-10),
            "left":offset.left+leftDiff
        });
        $("body").append(popupContact);
        popupContact.hide().removeClass("hiddenPopup_2");
        contactLink.click(function() {
            popupContact.is(":hidden")?popupContact.slideDown(300):popupContact.find("#popupClose_2").trigger("click");
        });
        popupContact.find("#popupClose_2").click(function() {
            popupContact.slideUp(300);
        });
    }

    $(window).resize(function() {
        if($(window).width() <= 1023) {
            $("header:not(.mobileHeader)").hide();
        }else {
            $("header:not(.mobileHeader)").show();
        }
    }).trigger("resize");
});