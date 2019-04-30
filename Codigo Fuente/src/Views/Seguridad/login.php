<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="es">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="..\..\wwwroot\lib\bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" href="..\..\wwwroot\lib\daterangepicker\daterangepicker.css">
    <link rel="stylesheet" href="..\..\wwwroot\lib\alertifyjs\css\alertify.min.css">
    <link rel="stylesheet" href="..\..\wwwroot\lib\fontawesome\css\all.min.css">
    <link rel="stylesheet" href="..\..\wwwroot\css\seguridad\login.css">
</head>

<body>
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<div class="container-fluid">
    <form action="login.php" method="post" class="border rounded shadow w-25 mx-auto p-4 mt-5">
        <h4 class="mb-4 text-center">Login de Usuario</h4>

        <div class="form-group">
            <label for="inputEmailOrNick">Nickname/Email</label>
            <input type="text" name="inputEmailOrNick" id="inputEmailOrNick" class="form-control">
            <div id="errorNick" class="error"> <i class="fas fa-exclamation-triangle"></i> Ingrese su nombre de usuario o Email</div>
            <div id="errorNick2" class="error"> <i class="fas fa-exclamation-triangle"></i> Escriba su nick o email de forma correcta</div>
        </div>

        <div class="form-group">
            <label for="inputPassword">Contraseña</label>
            <input type="password" class="form-control" name="inputPassword" id="inputPassword">
            <div id="errorPass" class="error"> <i class="fas fa-exclamation-triangle"></i> Por favor ingrese su contraseña</div>
            <div id="errorPass2" class="error"> <i class="fas fa-exclamation-triangle"></i> Su contraseña debe tener entre 6 a 15 digitos</div>
        </div>

        <div class="form-check">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="checkboxRecordarme" id="checkboxRecordarme" value="1">
                <small class="align-text-top">Recordarme</small>
            </label>
        </div>

        <div class="d-flex justify-content-center align-items-center my-3">
            <button type="submit" name="btnIngresar" id="btnIngresar" class="btn btn-primary">Ingresar</button>
        </div>

        <div>
            <small>¿Olvidaste tu contraseña? <a href="forgotPassword.php">Click aquí</a></small>
            <small>¿Primera vez aquí? <a href="registrar.php">Regístrate</a></small>
        </div>
        <?php
        require_once("..\..\Helpers\Conexion.php");
        require_once("..\..\Helpers\Constantes.php");
        if ($_POST && count($_POST) && isset($_POST[Constantes::BTNINGRESAR])) {
            $usuario = isset($_POST[Constantes::INPUTEMAILORNICK]) ? strtolower($_POST[Constantes::INPUTEMAILORNICK]) : null;
            $password = isset($_POST[Constantes::INPUTPASSWORD]) ? $_POST[Constantes::INPUTPASSWORD] : null;
            if (
                $usuario == null
                || (!preg_match(Constantes::REGEXLETRASYNUMEROS, $usuario)
                    && !preg_match(Constantes::REGEXEMAIL, $usuario))
                || $password == null || !preg_match(Constantes::REGEXLETRASYNUMEROS, $password)
            ) {
                header("location: ../NoCompletado/noCompletado.php");
                exit();
            }
            $password = strtoupper(sha1($password));
            $query = "SELECT Username, UPassword, Email FROM Usuario  where Username LIKE '$usuario' OR Email LIKE '$usuario' AND UPassword LIKE '$password'";
            $conn = new Conexion();
            $resultado = $conn->ejecutarQuery($query);
            //si el usuario ingresado es igual al usuario(db) o el mail ingresado es igual al mail(db)
            if ($resultado && $conn->getCantFilasAfectadas() && ($fila = $conn->getFila($resultado)) && ($usuario == $fila[0] or $usuario == $fila[2]) && $password == $fila[1])
                header("location: ../Home/main.php");
            else
                header("location: ../NoCompletado/noCompletado.php");
            $conn->desconectar();
        }
        ?>
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
<script src="..\..\wwwroot\js\seguridad\validacionLogin.js"></script>

</body>

</html>