$(document).ready(function() {

    $("#btnIngresar").click(function() {

        var expr = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
        var exprLetNum = /^[0-9a-zA-Z]+$/;

        var nick = $('#inputEmailOrNick').val();
        var pass = $('#inputPassword').val();

        /* Nombre */

        if (nick.length === 0){
            $("#errorNick").fadeIn("slow");
            return false;
        }
        else{
            $("#errorNick").fadeOut();
        }

       /* if(!exprLetNum.test(nick) || !expr.test(nick)){
            $("#errorNick2").fadeIn("slow");
            return false;
        }
        else {
            $("#errorNick2").fadeOut();
        }

        /* Password */

        if (pass.length === 0){
            $("#errorPass").fadeIn("slow");
            return false;
        }
        else{
            $("#errorPass").fadeOut();
        }

        if (pass.length < 6 && pass.length < 15) {
            $("#errorPass2").fadeIn("slow");
            return false;
        }
        else{
            $("#errorPass2").fadeOut();
        }

    });

});
