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
    <title>Proyecto Web 2 - Login</title>
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
                <label for="Email">Email</label>
                <input type="email" name="inputEmail" id="inputEmail" class="form-control" placeholder="ejemplo@correo.com" required>
            </div>
            <div class="form-group">
                <label for="inputPassword">Contraseña</label>
                <input type="password" class="form-control" name="inputPassword" id="inputPassword" required minlength="6" maxlength="15">
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
                <small>¿Olvidaste tu contraseña? <a href="#">Click aquí</a></small>
                <small>¿Primera vez aquí? <a href="registrar.php">Regístrate</a></small>
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
</body>

</html>