var $ = jQuery;
$(function() {


    var width = $(window).width();
    var mainH = $(window).height();
    var mainW = $(window).width();


    if(screen.width > 800) {
        var baseSizeAttr = width+"px auto";
        var zoomSizeAttr = (width+50)+"px auto";
        $("#slide_2 .back").css("background-size",baseSizeAttr).attr("baseZoom",baseSizeAttr).attr("zoomZoom",zoomSizeAttr);

        var height = 720;
        var baseSizeAttr = "auto "+height+"px";
        var zoomSizeAttr = "auto "+(height+50)+"px";
        $("#pm_block .back").css("background-size",baseSizeAttr).attr("baseZoom",baseSizeAttr).attr("zoomZoom",zoomSizeAttr);

        $("#slide_2 .back").addClass("anim");
        var minH = $("#slide_2").outerHeight();

        var rel = 170/876;
        var marTop = parseInt(mainH*rel)-40;

        if(width>1024) {
            var bgSizeFlag = false;
            bgSizeFlag = mainW > mainH;
            $(".viewTop").css("margin-top",marTop+"px");
            $("#slide_1").height(mainH).css("background-size",bgSizeFlag?"110% auto":"auto 110%");

            var count = 0;
            setInterval(function() {
                var top = Math.sin(count+=0.5);
                top *= 3;
                $("#downArrow").css("background-position","center Calc(50% + "+top+"px)");
            },70);
        }
    }


    if(screen.width > 800) {
        $("#slide_2 .margin").css("min-height",minH+"px");

        $("#slide_2>.margin").on("click",function() {
            if(!$(this).hasClass("no_click")){
                $(this).addClass("no_click");
                desZoom = false;
                $(this).find(".linkToFullView").addClass("invisible");
                var id = $(this).attr("id");
                setTimeout(function() {
                    $("#slide_2>.margin#"+id).addClass("fullWidth");
                    $("#slide_2>.margin:not(#"+id+")").addClass("noWidth");
                    setTimeout(function() {
                        $("#slide_2>.margin:not(#"+id+")").hide();
                        $("#slide_2>.margin#"+id+" .back").addClass("blur");
                        setTimeout(function() {
                            $("#slide_2>.margin#"+id+" .submargin").slideDown(450);
                            setTimeout(function() {
                                $("#slide_2>.margin#"+id+" .submargin").removeClass("invisibleColor");
                                setTimeout(function() {
                                    showCells(id,1);
                                },2000);
                            },300);
                        },300)
                    },750);
                },200);
            }
        });
        $("span.close").on("click",function() {
            hideCells();
            var id = $(this).parent().parent().attr("id");
            var parent =  $(this).parent().parent();
            $("#slide_2>.margin#"+id+" .submargin").addClass("invisibleColor");
            setTimeout(function() {
                $("#slide_2>.margin#"+id+" .submargin").slideUp(450);
                setTimeout(function() {
                    $("#slide_2>.margin:not(#"+id+")").show();
                    $("#slide_2>.margin#"+id+" .back").removeClass("blur");
                    setTimeout(function() {
                        $("#slide_2>.margin#"+id).removeClass("fullWidth");
                        $("#slide_2>.margin:not(#"+id+")").removeClass("noWidth");
                        setTimeout(function() {
                            $("#slide_2>.margin#"+id+" .linkToFullView").removeClass("invisible");
                            desZoom = true;
                            $(".linkToFullView").trigger("mouseleave");
                            parent.removeClass("no_click");
                        },200);
                    },750);
                },300);
            },300);
        });
    }else {
        $("#slide_2>.margin").on("click",function() {
            if(!$(this).hasClass("no_click")){
                $(this).addClass("no_click");
                $(this).find(".linkToFullView").addClass("invisible");
                var id = $(this).attr("id");
                $("#slide_2>.margin#"+id).addClass("fullWidth");
                $("#slide_2>.margin#"+id+" .back").addClass("blur");
                $("#slide_2>.margin#"+id+" .submargin").slideDown(450);
                setTimeout(function() {
                    $("#slide_2>.margin#"+id+" .submargin").removeClass("invisibleColor");
                    setTimeout(function() {
                        showCells(id,1);
                    },2000);
                },300);
            }
        });
        $("span.close").on("click",function() {
            hideCells();
            var id = $(this).parent().parent().attr("id");
            var parent =  $(this).parent().parent();
            $("#slide_2>.margin#"+id+" .submargin").addClass("invisibleColor");
            setTimeout(function() {
                $("#slide_2>.margin#"+id+" .submargin").slideUp(450);
                setTimeout(function() {
                    $("#slide_2>.margin:not(#"+id+")").show();
                    $("#slide_2>.margin#"+id+" .back").removeClass("blur");
                    $("#slide_2>.margin#"+id).removeClass("fullWidth");
                    $("#slide_2>.margin#"+id+" .linkToFullView").removeClass("invisible");
                    $(".linkToFullView").trigger("mouseleave");
                    parent.removeClass("no_click");
                },300);
            },300);
        });
    }




    var desZoom = true;

    $("#slide_2>.margin").on("mouseenter",function() {
        $(this).find(".back").css("background-size",$(this).find(".back").attr("zoomZoom"));
    }).on("mouseleave",function() {
        if(desZoom) {
            $(this).find(".back").css("background-size",$(this).find(".back").attr("baseZoom"));
        }
    });
    $("#downArrow").click(function() {
        $("html, body").stop().animate({scrollTop:$("#slide_2").offset().top}, 1000, 'swing', function() {});
    });

    function showCells(id,num) {
        if(num<=3) {
            $(".cell[num='"+num+"']").removeClass("hiddenCell");
            setTimeout(function() {
                showCells(id,num+1);
            },250);
        }
    }
    function hideCells() {
        $(".cell[num]").addClass("hiddenCell");
    }


    $("[imghref]").click(function() {
        window.open($(this).attr("imghref"), '_blank')
    });

});