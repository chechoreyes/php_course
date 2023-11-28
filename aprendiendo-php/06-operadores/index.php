<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>

<body>
    <?php

    // Operadores aritmeticos

    $numero1 = 55;
    $numero2 = 33;

    echo 'Sumar: ' . ($numero1 + $numero2) . '<br/>';
    echo 'Restar: ' . ($numero1 - $numero2) . '<br/>';
    echo 'Multiplicacion: ' . ($numero1 * $numero2) . '<br/>';
    echo 'Dividir: ' . ($numero1 / $numero2) . '<br/>';
    echo 'Resto: ' . ($numero1 % $numero2) . '<br/>';

    // Operadores de incremento y decremento

    $year = 2019;
    $year++;

    echo 'Incremento: ' . $year . '<br/>';

    $year--;
    echo 'Decremento: ' . $year . '<br/>';


    // Operador de asignacion

    $edad = 55;
    echo 'edad ' . $edad . '<br/>';


    // $edad = $edad + 5
    echo 'edad ' . ($edad += 5)


    ?>
</body>

</html>