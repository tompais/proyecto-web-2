<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Clase 7 - Registrar</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <form action="registrar.php" method="post">
        <label for="inputUsuario">Usuario</label>
        <br>
        <input type="text" name="inputUsuario" id="inputUsuario">
        <br>
        <label for="inputPassword">Contraseña</label>
        <br>
        <input type="password" name="inputPassword" id="inputPassword">
        <br>
        <label for="inputConfirmPassword">Confirmar Contraseña</label>
        <br>
        <input type="password" name="inputConfirmPassword" id="inputConfirmPassword">
        <br>
        <button type="submit" name="btnRegistrar" id="btnRegistrar">Registrar</button>
    </form>
    <?php

    require_once("Helpers/Constantes.php");
    require_once("Models/Usuario.php");
    include("conexion.php");

    if ($_POST && count($_POST) && isset($_POST[Constantes::BTNREGISTRAR])) {
        $usuario = strtolower($_POST[Constantes::INPUTUSUARIO]);
        $pass = strtoupper(md5($_POST[Constantes::INPUTPASS]));
        $passConfirm = strtoupper(md5($_POST[Constantes::INPUTPASSCONFIRM]));

        if (strcasecmp($pass, $passConfirm))
            die("Las contraseñas no son iguales");

        $host = Constantes::HOST;
        $bdUserName = Constantes::BDUSUARIO;
        $bdClave = Constantes::BDCLAVE;
        $bd = Constantes::BASEDEDATOS;

        $conexion = new Conexion("ezequiel", "ezequiel", $bd);

        $query = "INSERT INTO usuario(nombreUsuario, claveUsuario) VALUES('$usuario', '$pass')";

        $resultado = $conexion->ejecutarQuery($query);

        if (!$resultado && $conexion->filasAfectadas() == 0)
            die("Error al ejecutar la query");

        $query = "SELECT nombreUsuario, claveUsuario FROM usuario WHERE nombreUsuario LIKE '$usuario' AND claveUsuario LIKE '$pass'";

        $resultado = $conexion->ejecutarQuery($query);

        if (!$resultado)
            die("No se ha registrado correctamente al usuario");

        session_start();

        $_SESSION[Constantes::USUARIO] = serialize(new Usuario($usuario, $pass));

        header("location: agradecimiento.php");
    }
    ?>
    <script src="" async defer></script>
</body>

</html>