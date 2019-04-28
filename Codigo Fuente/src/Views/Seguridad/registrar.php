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

            <!-- TODO para un futuro lejano, poder implementarlo en otra pantalla -->
            <!-- <div class="form-group">
                <label for="inputProvincia">Provincia</label>
                <input type="text" name="inputProvincia" id="inputProvincia" class="form-control" placeholder="Ej: Buenos Aires">
                <div id="errorProv" class="error"> <i class="fas fa-exclamation-triangle"></i> Ingrese la Provincia</div>
                <div id="errorProv2" class="error"> <i class="fas fa-exclamation-triangle"></i> Solo letras</div>
                <div id="errorProv3" class="error"> <i class="fas fa-exclamation-triangle"></i> La provincia de tener entre 8 a 20 caracteres</div>
            </div>

            <div class="form-group">
                <label for="inputLocalidad">Localidad</label>
                <input type="text" name="inputLocalidad" id="inputLocalidad" class="form-control" placeholder="Ej: Ramos Mejía">
                <div id="errorLocalidad" class="error"> <i class="fas fa-exclamation-triangle"></i> Ingrese su Localidad</div>
                <div id="errorLocalidad2" class="error"> <i class="fas fa-exclamation-triangle"></i> Solo letras</div>
                <div id="errorLocalidad3" class="error"> <i class="fas fa-exclamation-triangle"></i> La localidad debe tener entre 4 a 20 caracteres</div>
            </div>

            <div class="form-group">
                <label for="inputCalle">Calle</label>
                <input type="text" name="inputCalle" id="inputCalle" class="form-control" placeholder="Ej: Av. Rivadavia" aria-describedby="helpIdInputCalle" maxlength="40">
                <small id="helpIdInputCalle" class="text-muted">Sin la altura</small>
                <div id="errorCalle" class="error"> <i class="fas fa-exclamation-triangle"></i> Ingrese su Calle</div>
                <div id="errorCalle2" class="error"> <i class="fas fa-exclamation-triangle"></i> Solo letras, sin la altura</div>
                <div id="errorCalle3" class="error"> <i class="fas fa-exclamation-triangle"></i> La calle debe tener entre 4 a 20 caracteres</div>
            </div>

            <div class="form-row">
                <div class="col-5">
                    <div class="form-group">
                        <label for="inputAltura">Altura</label>
                        <input type="number" name="inputAltura" id="inputAltura" class="form-control" placeholder="Ej: 404">
                        <div id="errorAltura" class="error"> <i class="fas fa-exclamation-triangle"></i> Ingrese su Altura</div>
                        <div id="errorAltura2" class="error"> <i class="fas fa-exclamation-triangle"></i> Solo numeros</div>
                        <div id="errorAltura3" class="error"> <i class="fas fa-exclamation-triangle"></i> La altura no debe tener mas de 6 digitos </div>
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
            </div> -->

            <div class="d-flex justify-content-center align-items-center my-3">
                <button type="submit" name="btnRegistrar" id="btnRegistrar" class="btn btn-primary">Registrar</button>
            </div>
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
                // $prov = isset($_POST[Constantes::INPUTPROVINCIA]) ? $_POST[Constantes::INPUTPROVINCIA] : null;
                // $localidad = isset($_POST[Constantes::INPUTLOCALIDAD]) ? $_POST[Constantes::INPUTLOCALIDAD] : null;
                // $calle = isset($_POST[Constantes::INPUTCALLE]) ? $_POST[Constantes::INPUTCALLE] : null;
                // $altura = isset($_POST[Constantes::INPUTALTURA]) ? $_POST[Constantes::INPUTALTURA] : null;
                // $dto = isset($_POST[Constantes::INPUTDEPTO]) ? $_POST[Constantes::INPUTDEPTO] : null;
                // $piso = isset($_POST[Constantes::INPUTPISO]) ? $_POST[Constantes::INPUTPISO] : null;

                if (!$nombre || ($cantLetras = strlen($nombre)) > 15 || $cantLetras < 3 || !preg_match(Constantes::REGEXSOLOLETRAS, $nombre))
                    die("Nombre incorrecto");

                if (!$apellido || ($cantLetras = strlen($apellido)) > 15 || $cantLetras < 3 || !preg_match(Constantes::REGEXSOLOLETRAS, $apellido))
                    die("Apellido incorrecto");

                if (!$nickname || ($cantLetras = strlen($nickname)) > 15 || $cantLetras < 3 || !preg_match(Constantes::REGEXSOLOLETRAS, $nickname))
                    die("Nickname incorrecto");

                if (!$pass || ($cantLetras = strlen($pass)) > 15 || $cantLetras < 6  || !preg_match(Constantes::REGEXLETRASYNUMEROS, $pass))
                    die("Contraseña incorrecta");

                if (!$rePass || strcmp($rePass, $pass))
                    die("Confirmar contraseña incorrecta");

                $pass = strtoupper(sha1($pass));

                if (!$email || !preg_match(Constantes::REGEXEMAIL, $email))
                    die("Email incorrecto");

                // if(!$prov || $cantLetras = strlen($prov) < 3 || $cantLetras > 20 || !preg_match(Constantes::REGEXLETRASYESPACIO, $prov))
                //     die("Provincia incorrecta");

                // if(!$localidad || $cantLetras = strlen($localidad) < 3 || $cantLetras > 20 || !preg_match(Constantes::REGEXLETRASYESPACIO, $localidad))
                //     die("Localidad incorrecta");

                // if(!$calle || $cantLetras = strlen($calle) < 3 || $cantLetras > 20  || !preg_match(Constantes::REGEXLETRASYESPACIO, $calle))
                //     die("Calle incorrecta");

                // if(!$altura || $cantLetras = strlen($altura) > 6 || $cantLetras < 1 || !preg_match(Constantes::REGEXSOLONUMEROS, $altura))
                //     die("Altura incorrecta");

                // if((!$piso && $depto) || ($piso && !$depto) || $cantLetras = strlen($piso) > 3 || $cantLetras < 1 || $cantLetras = strlen($depto) > 2 ||  $cantLetras < 1 || !preg_match(Constantes::REGEXSOLONUMEROS, $piso) || !preg_match(Constantes::REGEXLETRASYNUMEROS, $depto))
                //     die("Piso y departamento incorrecto");

                $conn = new Conexion();

                // //direccion
                // $query = "INSERT INTO Direccion (Calle, Altura, Departamento, Piso) VALUES ('$calle', '$altura'";
                // $query .= $depto != null && $piso != null ? ", '$depto', '$piso'" : "";
                // $query .= ")";
                // $resultado = $conn->ejecutarQuery($query);
                // if (!$conn->getCantFilasAfectadas() || !$resultado)
                //     die("Ha ocurrido un error al ejecutar la query");

                // $query = "SELECT ID FROM Direccion WHERE Calle LIKE '$calle'";
                // $resultado = $conn->ejecutarQuery($query);
                // if (!$resultado)
                //     die("Ha ocurrido un error al ejecutar la query");
                // $direccion = $conn->getFila(Sresultado);

                // $query = "SELECT ID FROM Provincia WHERE Nombre LIKE '$prov'";
                // $resultado = $conn->ejecutarQuery($query);
                // if(!$resultado)
                //     die("Ha ocurrido un error al ejecutar la query");
                // $prov = $conn->getFila($resultado);

                //usuario
                $query = "INSERT INTO Usuario (Nombre, Apellido, FechaNac, Username, UPassword, Email) VALUES ('$nombre', '$apellido', STR_TO_DATE('$fecha', '%d/%m/%Y'), '$nickname', '$pass', '$email')";
                $resultado = $conn->ejecutarQuery($query);
                if (!$resultado || !$conn->getCantFilasAfectadas())
                    die("Ha ocurrido un error al crear al usuario");

                $query = "SELECT ID FROM Usuario WHERE Username LIKE '$nickname'";
                $resultado = $conn->ejecutarQuery($query);
                if (!$resultado || !$conn->getCantFilasAfectadas())
                    die("Ha ocurrido un error al consultar el usuario registrado");

                $IDUsuario = $conn->getFila($resultado)[0];

                // //seteo los permisos del usuario
                // //traigo el permiso de usuario normal
                // $query = "SELECT ID FROM Permiso WHERE Nombre_Permiso like 'normal'";
                // $resultado = $conn->ejecutarQuery($query);
                // if (!$resultado)
                //     die("Ha ocurrido un error al ejecutar la query");
                // $IDPermisos = $conn->getFila($resultado);

                // $query = "INSERT INTO PermisoUsuario (ID_Permiso, ID_Usuario) VALUES  ('$IDPermisos' ,'$IDUsuario')";

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
    <script src="..\..\wwwroot\js\seguridad\registrar.js"></script>
    <script src="..\..\wwwroot\js\seguridad\validacionRegistrar.js"></script>
</body>

</html>