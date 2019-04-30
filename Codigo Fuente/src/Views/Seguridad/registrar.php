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
    <title>Registrar</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="..\..\wwwroot\lib\bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" href="..\..\wwwroot\lib\daterangepicker\daterangepicker.css">
    <link rel="stylesheet" href="..\..\wwwroot\lib\alertifyjs\css\alertify.min.css">
    <link rel="stylesheet" href="..\..\wwwroot\lib\fontawesome\css\all.min.css">
    <link rel="stylesheet" href="..\..\wwwroot\css\seguridad\registrar.css">
</head>

<body>

<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<?php
require_once("..\..\Helpers\Constantes.php");
require_once("..\..\Helpers\Conexion.php");
if ($_POST && count($_POST) && isset($_POST[Constantes::BTNREGISTRAR])) {
    $nombre = isset($_POST[Constantes::INPUTNOMBRE]) ? $_POST[Constantes::INPUTNOMBRE] : null;
    $apellido = isset($_POST[Constantes::INPUTAPELLIDO]) ? $_POST[Constantes::INPUTAPELLIDO] : null;
    $nickname = isset($_POST[Constantes::INPUTNICKNAME]) ? $_POST[Constantes::INPUTNICKNAME] : null;
    $pass = isset($_POST[Constantes::INPUTPASSWORD]) ? $_POST[Constantes::INPUTPASSWORD] : null;
    $rePass = isset($_POST[Constantes::INPUTREPASSWORD]) ? $_POST[Constantes::INPUTREPASSWORD] : null;
    $email = isset($_POST[Constantes::INPUTEMAIL]) ? $_POST[Constantes::INPUTEMAIL] : null;
    $fecha = isset($_POST[Constantes::INPUTFECHANACIMIENTO]) ? $_POST[Constantes::INPUTFECHANACIMIENTO] : null;

    if (!$nombre || ($cantLetras = strlen($nombre)) > 15 || $cantLetras < 3 || !preg_match(Constantes::REGEXLETRASYESPACIO, $nombre)) {
        header("location: ../NoCompletado/noCompletado.php");
        exit();
    }
    if (!$apellido || ($cantLetras = strlen($apellido)) > 15 || $cantLetras < 3 || !preg_match(Constantes::REGEXLETRASYESPACIO, $apellido)) {
        header("location: ../NoCompletado/noCompletado.php");
        exit();
    }
    if (!$nickname || ($cantLetras = strlen($nickname)) > 15 || $cantLetras < 3 || !preg_match(Constantes::REGEXSOLOLETRAS, $nickname)) {
        header("location: ../NoCompletado/noCompletado.php");
        exit();
    }
    if (!$pass || ($cantLetras = strlen($pass)) > 15 || $cantLetras < 6  || !preg_match(Constantes::REGEXLETRASYNUMEROS, $pass)) {
        header("location: ../NoCompletado/noCompletado.php");
        exit();
    }
    if (!$rePass || strcmp($rePass, $pass)) {
        header("location: ../NoCompletado/noCompletado.php");
        exit();
    }
    $pass = strtoupper(sha1($pass));
    if (!$email || !preg_match(Constantes::REGEXEMAIL, $email)) {
        header("location: ../NoCompletado/noCompletado.php");
        exit();
    }

    $conn = new Conexion();

    $query = "INSERT INTO Usuario (Nombre, Apellido, FechaNac, Username, UPassword, Email) VALUES ('$nombre', '$apellido', STR_TO_DATE('$fecha', '%d/%m/%Y'), '$nickname', '$pass', '$email')";
    $resultado = $conn->ejecutarQuery($query);
    if (!$resultado || !$conn->getCantFilasAfectadas()) {
        header("location: ../NoCompletado/noCompletado.php");
        $conn->desconectar();
        exit();
    }

    $query = "SELECT ID FROM Usuario WHERE Username LIKE '$nickname'";
    $resultado = $conn->ejecutarQuery($query);
    if (!$resultado || !$conn->getCantFilasAfectadas()) {
        header("location: ../NoCompletado/noCompletado.php");
        $conn->desconectar();
        exit();
    }
    header("location: ..registracionExitosa.php");

    $conn->desconectar();
}
?>
<div class="container-fluid">
    <form action="registrar.php" method="post" class="border shadow rounded mx-auto w-25 p-4 mt-5 pre-scrollable">
        <h4 class="mb-4 text-center">Regístrese</h4>

        <div class="form-group">
            <label for="inputNombre">Nombre</label>
            <input type="text" name="inputNombre" id="inputNombre" class="form-control" placeholder="Ej: Pepe">
            <div id="errorNombre" class="error"> <i class="fas fa-exclamation-triangle"></i> Ingrese su nombre</div>
            <div id="errorNombre2" class="error"> <i class="fas fa-exclamation-triangle"></i> Su nombre no debe tener mas de 15 caracteres</div>
            <div id="errorNombre3" class="error"> <i class="fas fa-exclamation-triangle"></i> Solo letras por favor</div>
        </div>

        <div class="form-group">
            <label for="inputApellido">Apellido</label>
            <input type="text" name="inputApellido" id="inputApellido" class="form-control" placeholder="Ej: González">
            <div id="errorApellido" class="error"> <i class="fas fa-exclamation-triangle"></i> Ingrese su apellido</div>
            <div id="errorApellido2" class="error"> <i class="fas fa-exclamation-triangle"></i> Su apellido no debe tener mas de 15 caracteres</div>
            <div id="errorApellido3" class="error"> <i class="fas fa-exclamation-triangle"></i> Solo letras por favor</div>
        </div>

        <div class="form-group">
            <label for="inputNickname">Nickname</label>
            <input type="text" name="inputNickname" id="inputNickname" class="form-control" placeholder="Ej: pgonzalez">
            <div id="errorNickname" class="error"> <i class="fas fa-exclamation-triangle"></i> Ingrese su Nickname</div>
            <div id="errorNickname2" class="error"> <i class="fas fa-exclamation-triangle"></i> Su NickName no debe tener mas de 15 caracteres</div>
            <div id="errorNickname3" class="error"> <i class="fas fa-exclamation-triangle"></i> Solo letras y numero por favor</div>
        </div>

        <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" name="inputEmail" id="inputEmail" class="form-control" placeholder="ejemplo@correo.com">
            <div id="errorEmail" class="error"> <i class="fas fa-exclamation-triangle"></i> Ingrese su E-Mail</div>
            <div id="errorEmail2" class="error"> <i class="fas fa-exclamation-triangle"></i> Escriba su E-Mail de forma correcta</div>
        </div>

        <div class="form-group">
            <label for="inputPassword">Contraseña</label>
            <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Ej: juan1234">
            <div id="errorPassword" class="error"> <i class="fas fa-exclamation-triangle"></i> Ingrese su contraseña</div>
            <div id="errorPassword2" class="error"> <i class="fas fa-exclamation-triangle"></i> Su contraseña debe tener entre 6 a 15 digitos</div>
            <div id="errorPassword3" class="error"> <i class="fas fa-exclamation-triangle"></i> Solo letras y numero por favor</div>
        </div>

        <div class="form-group">
            <label for="inputRePassword">Confirme su Contraseña</label>
            <input type="password" name="inputRePassword" id="inputRePassword" class="form-control" placeholder="Ej: juan1234" aria-describedby="helpIdInputRePassword">
            <small id="helpIdInputRePassword" class="text-muted">Asegúrese de que coincidan</small>
            <div id="errorRePassword" class="error"> <i class="fas fa-exclamation-triangle"></i> Confirme su contraseña</div>
            <div id="errorRePassword2" class="error"> <i class="fas fa-exclamation-triangle"></i> Sus contraseñas no coinciden</div>
        </div>


        <div class="form-group">
            <label for="inputFechaNacimiento">Fecha de Nacimiento</label>
            <div class="input-group">
                <input type="text" name="inputFechaNacimiento" id="inputFechaNacimiento" class="form-control">
                <div class="input-group-append">
                    <span class="input-group-text" id="iconoInputFechaNacimiento"><i class="fas fa-calendar-alt"></i></span>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center align-items-center my-3">
            <button type="submit" name="btnRegistrar" id="btnRegistrar" class="btn btn-primary">Registrar</button>
        </div>
    </form>
</div>
<script src="..\..\wwwroot\lib\jquery\jquery-3.4.0.min.js"></script>
<script src="..\..\wwwroot\lib\bootstrap\js\bootstrap.min.js"></script>
<script src="..\..\wwwroot\lib\fontawesome\js\all.min.js"></script>
<script src="..\..\wwwroot\lib\popper\popper.min.js"></script>
<script src="..\..\wwwroot\lib\tooltip\tooltip.min.js"></script>
<script src="..\..\wwwroot\lib\moment\moment-with-locales.min.js"></script>
<script src="..\..\wwwroot\lib\JQuery-Mask-Plugin\dist\jquery.mask.min.js"></script>
<script src="..\..\wwwroot\lib\daterangepicker\daterangepicker.js"></script>
<script src="..\..\wwwroot\lib\alertifyjs\alertify.min.js"></script>
<script src="..\..\wwwroot\lib\validate\validate.min.js"></script>
<script src="..\..\wwwroot\js\seguridad\registrar.js"></script>
<script src="..\..\wwwroot\js\seguridad\validacionRegistrar.js"></script>
</body>

</html>