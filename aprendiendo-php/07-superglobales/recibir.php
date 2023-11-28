<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    //Para recibir los parametros de un formulario $_GET[propiedad] o $_POST depende el metodo

    echo '<h1>' . $_GET['nombre'] . ' ' . $_GET['apellidos'] . '</h1>';

    var_dump($_GET);

    ?>
</body>

</html>