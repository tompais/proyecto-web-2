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
    <title>Proyecto Web 2 - Registrar</title>
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
    <form action="registrar.php" method="post" class="border shadow rounded mx-auto w-25 p-4 mt-5 pre-scrollable">
        <h4 class="mb-4 text-center">Regístrese</h4>
        <div class="form-group">
            <label for="inputNombre">Nombre</label>
            <input type="text" name="inputNombre" id="inputNombre" class="form-control" placeholder="Ej: Pepe" required maxlength="15">
        </div>
        <div class="form-group">
            <label for="inputApellido">Apellido</label>
            <input type="text" name="inputApellido" id="inputApellido" class="form-control" placeholder="Ej: González" required maxlength="20">
        </div>
        <div class="form-group">
            <label for="inputNickname">Nickname</label>
            <input type="text" name="inputNickname" id="inputNickname" class="form-control" placeholder="Ej: pgonzalez" required maxlength="15">
        </div>
        <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" name="inputEmail" id="inputEmail" class="form-control" placeholder="ejemplo@correo.com" required>
        </div>
        <div class="form-group">
            <label for="inputFechaNacimiento">Fecha de Nacimiento</label>
            <div class="input-group">
                <input type="text" name="inputFechaNacimiento" id="inputFechaNacimiento" class="form-control" required>
                <div class="input-group-append">
                    <span class="input-group-text" id="iconoInputFechaNacimiento"><i class="fas fa-calendar-alt"></i></span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="inputProvincia">Provincia</label>
            <input type="text" name="inputProvincia" id="inputProvincia" class="form-control" placeholder="Ej: Buenos Aires" required maxlength="40">
        </div>
        <div class="form-group">
            <label for="inputLocalidad">Localidad</label>
            <input type="text" name="inputLocalidad" id="inputLocalidad" class="form-control" placeholder="Ej: Ramos Mejía" required maxlength="40">
        </div>
        <div class="form-group">
            <label for="inputCalle">Calle</label>
            <input type="text" name="inputCalle" id="inputCalle" class="form-control" placeholder="Ej: Av. Rivadavia" aria-describedby="helpIdInputCalle" required maxlength="40">
            <small id="helpIdInputCalle" class="text-muted">Sin la altura</small>
        </div>
        <div class="form-row">
            <div class="col-5">
                <div class="form-group">
                    <label for="inputAltura">Altura</label>
                    <input type="number" name="inputAltura" id="inputAltura" class="form-control" placeholder="Ej: 404" required maxlength="5">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="inputPiso">Piso</label>
                    <input type="number" name="inputPiso" id="inputPiso" class="form-control" placeholder="Ej: 8" maxlength="2">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="inputDepto">Depto</label>
                    <input type="text" name="inputDepto" id="inputDepto" class="form-control" placeholder="Ej: C" maxlength="1">
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center my-3">
            <button type="submit" name="btnRegistrar" id="btnRegistrar" class="btn btn-primary">Registrar</button>
        </div>
    </form>
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
</body>

</html>