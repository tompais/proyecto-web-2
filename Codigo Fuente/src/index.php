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
    <title>Clase 6 - Conexión con la BD</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <?php

    //Para poder conectarnos a la base de datos, necesitamos la dirección del servidor, la clave, el usuario y el schema al que nos vamos a conectar.

    $host = "localhost";
    $usuario = "root";
    $clave = "";
    $bd = "pw";

    $conexion = new mysqli($host, $usuario, NULL, $bd);

    if ($conexion->connect_error)
        die("Ha ocurrido un error");
    else
        echo "Conectó perfecto<br/>";

    $sql = "select * from usuario";

    if (!$resultado = $conexion->query($sql))
        echo "Ha ocurrido un error al ejecutar la query";
    else {
        echo "La se query se ejecutó correctamente y tuvo " . $conexion->affected_rows . " filas afectadas<br/>";

        $fila = $resultado->fetch_assoc(); //me un array asociada a la primera fila.
        var_dump($fila);
    }
    ?>
    <script src="" async defer></script>
</body>

</html>