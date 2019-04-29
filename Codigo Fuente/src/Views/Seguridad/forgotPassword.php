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
    <title>Proyecto Web 2 - Olvidé Contraseña</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="..\..\wwwroot\lib\bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" href="..\..\wwwroot\lib\daterangepicker\daterangepicker.css">
    <link rel="stylesheet" href="..\..\wwwroot\lib\alertifyjs\css\alertify.min.css">
    <link rel="stylesheet" href="..\..\wwwroot\lib\fontawesome\css\all.min.css">
</head>

<body>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <div class="container-fluid">
        <form action="forgotPassword.php" method="post" class="w-25 shadow border rounded mx-auto p-4 mt-5">
            <div class="form-group">
                <label for="inputEmailOrNick">Nickname/Email</label>
                <input type="text" name="inputEmailOrNick" id="inputEmailOrNick" class="form-control" required>
            </div>
            <div class="d-flex justify-content-center align-items-center my-3">
                <button type="submit" name="btnRecuperarPassword" id="btnRecuperarPassword" class="btn btn-primary">Recuperar Contraseña</button>
            </div>
        </form>
        <?php        
        $regex = array(
                "usuario" => "/^[0-9a-zA-Z]+$/",
                "email" => "/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/",
                );
        if ($_POST != null && count($_POST) != 0){
            if ( !preg_match($regex["usuario"], $_POST["inputEmailOrNick"]) or !preg_match($regex["email"], $_POST["inputEmailOrNick"]) ) {
                //usuario incorrecto
                die("Usuario incorrecto");
            }
            $usuario = strtolower($_POST["inputEmailOrNick"] );

        } else {
            //usuario incorrecto
            die("Login incorrecto");
        }
                    
        
            //include("..\..\Codigo Fuente\src\Helpers\Conexion.php");
           require_once("..\..\Helpers\Constantes.php");
           require_once("..\..\Helpers\Conexion.php");
        /*
            $db = array(
            "user" => "root";
                "pass" => "";
                "db" => "pw2";
            );
            */
            $query = "SELECT Username, UPassword, Email FROM usuario where ";
            //$conn = new Conexion( $db[user],$db[pass],$db[db];
            $conn = new Conexion();
            if( preg_match($regex["usuario"],$usuario) ) {
                    $query .= "idUsuario like '$usuario'";
                } else {
                    $query .= "email like '$usuario'";
                }
            
            $resultado = $conn ->ejecutarQuery($query);

            if(!Sresultado){
                die("Ha ocurrido un error al ejecutar la query");
            }
            //cosas a hacer para recuperar el password
            
    
            $conn->desconectar();

        ?>
        
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