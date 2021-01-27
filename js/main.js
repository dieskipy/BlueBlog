






    $(document).ready(function() {
        $(".InputEmail").keyup(function(){

            var email = $("InputEmail").val();

            if(email != 0)
            {
                if(isValidEmailAddress(email))
                {
                    $("InputEmail").css({
                        "background-image": "url('img/validYes.png')"
                    });
                } else {
                    $("InputEmail").css({
                        "background-image": "url('img/validNo.png')"
                    });
                }
            } else {
                $("InputEmail").css({
                    "background-image": "img/validNo.png"
                });
            }

        });

    });

    $(document).ready(function() {
        $(".InputPassword").keyup(function(){

            var pass = $("InputPassword").val();

            if(pass = 0)
            {
                $("InputPassword").css({
                    "background-image": "img/validNo.png"
                });

            } else {
                $("InputPassword").css({
                    "background-image": "img/validYes.png"
                });
            }

        });

    });

function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
    return pattern.test(emailAddress);
}
