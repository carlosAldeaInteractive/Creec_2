$(function() {
    function isEmpty(selector) {
        return $.trim($(selector).val()) == '';
    }
    function isEmail(selector) {
        return $.trim($(selector).val()).match(/[a-z0-9]+[_a-z0-9\.-]*[a-z0-9]+@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})/);
    }
    function addErrorIf(condition,selector) {
        if(condition) $(selector).addClass("error");
    }
    $("button#submit").click(function() {
        var response = $.trim(grecaptcha.getResponse());
        $(".error").removeClass("error");
        $(".error_2").removeClass("error_2");
        if(!isEmpty("#firstName") && !isEmpty("#lastName") && isEmail("#email") && response != '') {

        }else {
            addErrorIf(isEmpty("#firstName"),"#firstName,.fName");
            addErrorIf(isEmpty("#lastName"),"#lastName,.lName");
            addErrorIf(!isEmail("#email"),"#email,.icon.email");
            if(response == '')$(".g-recaptcha").addClass("error_2");;
        }
    });

    $(".selector>h3").click(function() {
        var $this = $(this).parent();
        var $opt = $this.find(">div");
        if($this.hasClass("open")) {
            $this.removeClass("open");
            $opt.attr("hidden",'');
        }else {
            $this.addClass("open");
            $opt.removeAttr("hidden");
        }
    });
    $(".selector>div").click(function() {
        var $this = $(this).parent();
        var value = $(this).text();
        $this.find("h3").text(value);
        $('[type="hidden"]').val(value);
        $(".selector>h3").trigger("click");
    });

});