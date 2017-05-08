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
});