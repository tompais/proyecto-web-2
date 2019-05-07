<?php

abstract class Constantes
{
    //Input
    const INPUTNOMBRE = "inputNombre";
    const INPUTAPELLIDO = "inputApellido";
    const INPUTNICKNAME = "inputNickname";
    const INPUTEMAILORNICK = "inputEmailOrNick";
    const INPUTPASSWORD = "inputPassword";
    const INPUTREPASSWORD = "inputRePassword";
    const INPUTEMAIL = "inputEmail";
    const INPUTFECHANACIMIENTO = "inputFechaNacimiento";
    const INPUTTELEFONO = "inputTelefono";

    //Botones
    const BTNINGRESAR = "btnIngresar";
    const BTNREGISTRAR = "btnRegistrar";
    const BTNRECUPERARPASSWORD = "btnRecuperarPassword";

    //Regex
    const REGEXLETRASYNUMEROS = "/^[0-9a-zA-Z]+$/";
    const REGEXEMAIL = "/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/";
    const REGEXSOLOLETRAS = "/^[a-zA-Z]+$/";
    const REGEXLETRASYESPACIO = "/^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/";
    const REGEXSOLONUMEROS = "/^[0-9]+$/";

    //Páginas
    const REGISTRARPAGE = "registrar.php";
}


?>