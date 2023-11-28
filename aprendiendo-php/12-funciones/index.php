<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // Funciones

    function muestraNombres()
    {
        echo "Sergio Reyes <br />";
        echo "Sergio Reyes2 <br />";
        echo "Sergio Reyes3 <br />";
        echo "Sergio Reyes4 <br />";
    }

    muestraNombres();

    function tabla($numero)
    {
        var_dump($numero);
    }

    tabla(55);


    function tabla2($numero1, $numero2, $negrita = false)
    {
        return 1;
    }

    tabla2(55, 200);

    ?>


</body>

</html>