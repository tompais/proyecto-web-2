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
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <form action="login.php" method="post">
        <label for="inputUsuario">Usuario</label>
        <br>
        <input type="text" name="inputUsuario" id="inputUsuario">
        <br>
        <label for="inputPassword">Contraseña</label>
        <br>
        <input type="password" name="inputPassword" id="inputPassword">
        <br>
        <button type="submit" name="btnSubmit" id="btnSubmit">Loguear</button>
        <input type="button" value="Andá a registrarte!" onclick="location.href = 'registrar.php'">
    </form>

    <?php

    require_once("Helpers/Constantes.php");
    include("conexion.php");

    if ($_POST != null && count($_POST) != 0 && isset($_POST[Constantes::BTNLOGIN])) {

        $usuario = strtolower($_POST[Constantes::INPUTUSUARIO]);
        $pass = strtoupper(md5($_POST[Constantes::INPUTPASS]));
        
        $host = Constantes::HOST;
        $bdUserName = Constantes::BDUSUARIO;
        $bdClave = Constantes::BDCLAVE;
        $bd = Constantes::BASEDEDATOS;

        $conexion = new Conexion("ezequiel", "ezequiel", $bd);

        $query = "SELECT nombreUsuario, claveUsuario FROM usuario WHERE nombreUsuario LIKE '$usuario' AND claveUsuario LIKE '$pass'";

        $resultado = $conexion->ejecutarQuery($query);

        if(!$resultado)
            die("Ha ocurrido un error al ejecutar la query");

        $fila = $conexion->getFila($resultado);

        if($usuario == $fila[0] && $pass == $fila[1]) {
            header("location: bienvenido.php");
            exit();
        } else {
            die("Tu no eres mi padre");
        }
    }
    ?>
    <script src="" async defer></script>
</body>

</html>