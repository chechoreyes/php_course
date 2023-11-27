<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $numero = 100;
    $decimal = 100.92;
    $string = "string";
    $bool = true;
    $nula = null;

    echo gettype($numero);
    echo gettype($decimal);
    echo gettype($string);
    echo gettype($bool);
    echo gettype($null);

    //Debug
    $mi_nombre = "Sergio Reyes";
    var_dump($mi_nombre);

    //Concatenar sin punto
    $conact = "Hola $mi_nombre";
    echo $conact

    ?>
</body>

</html>