$(function() {
    var commonPasswords = ["123456","password", "12345678", "qwerty", "123456789", "12345", "1234", "111111", "1234567",
        "dragon", "123123", "baseball", "abc123", "football", "monkey", "letmein", "696969", "shadow",
        "master", "666666", "qwertyuiop", "123321", "mustang", "1234567890", "michael", "654321", "pussy", "superman",
        "1qaz2wsx", "7777777", "fuckyou", "121212", "000000", "qazwsx", "123qwe", "killer", "trustno1", "jordan",
        "jennifer", "zxcvbnm", "asdfgh", "hunter", "buster", "soccer", "harley", "batman", "andrew", "tigger",
        "sunshine", "iloveyou", "fuckme", "2000", "charlie", "robert", "thomas", "hockey", "ranger", "daniel",
        "starwars", "klaster", "112233", "george", "asshole", "computer", "michelle", "jessica", "pepper", "1111",
        "zxcvbn", "555555", "11111111", "131313", "freedom", "777777", "pass", "fuck", "maggie", "159753", "aaaaaa",
        "ginger", "princess", "joshua", "cheese", "amanda", "summer", "love", "ashley", "6969", "nicole", "chelsea",
        "biteme", "matthew", "access", "yankees", "987654321", "dallas", "austin", "thunder", "taylor", "matrix",
        "william", "corvette", "hello", "martin", "heather", "secret", "fucker", "merlin", "diamond", "1234qwer",
        "gfhjkm", "hammer", "silver", "222222", "88888888", "anthony", "justin", "test", "bailey", "q1w2e3r4t5",
        "patrick", "internet", "scooter", "orange", "11111", "golfer", "cookie", "richard", "samantha", "bigdog",
        "guitar", "jackson", "whatever", "mickey", "chicken", "sparky", "snoopy", "maverick", "phoenix", "camaro",
        "sexy", "peanut", "morgan", "welcome", "falcon", "cowboy", "ferrari", "samsung", "andrea", "smokey", "steelers",
        "joseph", "mercedes", "dakota", "arsenal", "eagles", "melissa", "boomer", "booboo", "spider", "nascar",
        "monster", "tigers", "yellow", "xxxxxx", "123123123", "gateway", "marina", "diablo", "bulldog", "qwer1234",
        "compaq", "purple", "hardcore", "banana", "junior", "hannah", "123654", "porsche", "lakers", "iceman", "money",
        "cowboys", "987654", "london", "tennis", "999999", "ncc1701", "coffee", "scooby", "0000", "miller", "boston",
        "q1w2e3r4", "fuckoff", "brandon", "yamaha", "chester", "mother", "forever"];
    var width = screen.width;
    if(width<=568) {
        $(".g-recaptcha").insertBefore("#submit");
    }
    var emailRegex = /^(?:(?:[\w`~!#$%^&*\-=+;:{}'|,?\/]+(?:(?:\.(?:"(?:\\?[\w`~!#$%^&*\-=+;:{}'|,?\/\.()<>\[\] @]|\\"|\\\\)*"|[\w`~!#$%^&*\-=+;:{}'|,?\/]+))*\.[\w`~!#$%^&*\-=+;:{}'|,?\/]+)?)|(?:"(?:\\?[\w`~!#$%^&*\-=+;:{}'|,?\/\.()<>\[\] @]|\\"|\\\\)+"))@(?:[a-zA-Z\d\-]+(?:\.[a-zA-Z\d\-]+)*|\[\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}\])$/;
    var mexNumRegex = /(01-52|0152|0152-|01-52-)?(\d{2}-\d{4}-\d{4}|\d{10}|\d{8}|\d{4}-\d{4})/;
    var passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{6,}$/;
    function isCommon(value) {
        return commonPasswords.indexOf(value) != -1;
    }
    var validator = {
        "email":function(value)     { return value.match(emailRegex); },
        "password1":function(value) { $("#password2").trigger("change"); return !isCommon(value) && value.match(passwordRegex); },
        "password2":function(value) { return !isCommon(value) && value.match(passwordRegex) && value == $("#password1").val(); },
        "phone":function(value)     { return value.match(mexNumRegex); }
    };
    function checkUncheck(value,object) {
        if(value) {
            $(object).removeClass("error").prev().removeClass("error");
        }else {
            $(object).addClass("error").prev().addClass("error");
        }
    }
    $("input").on("change",function() {
        checkUncheck($.trim(this.value)!=''?validator[this.id]($.trim(this.value)):true,this);
    });
    $("#openComisiones").click(function() {
        $("#slide_5").fadeIn(300);
        $("html,body").addClass("stopScroll");
    });
    $("#closeSlide5").click(function() {
        $("#slide_5").fadeOut(300);
        $("html,body").removeClass("stopScroll");
    });

    $("#submit").click(function() {
        var response = $.trim(grecaptcha.getResponse());
        if(!$("input.error").length) {
            if( $.trim($("#email").val()) != '' &&
                $.trim($("#password1").val()) != '' &&
                $.trim($("#password2").val()) != '' &&
                $.trim($("[type='tel']").val()) != '') {
                if(response != '') {
                    //good
                }else {
                    $(".g-recaptcha").addClass("error_2");
                    setTimeout(function() {
                        $(".g-recaptcha").removeClass("error_2");
                    },500);
                }
            }else {
                $("input").each(function() {
                    checkUncheck(false,this);
                });
                setTimeout(function() {
                    $("input").each(function() {
                        checkUncheck(true,this);
                    });
                },500);
            }
        }
    });

});