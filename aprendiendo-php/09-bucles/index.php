<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucles</title>
</head>

<body>

    <?php

    // BUCLE WHILE

    $numero = 0;
    while ($numero <= 100) {
        echo "<p>" . $numero . "</p>";
        $numero++;
    }

    // BUCLE DO WHILE

    $edad = 30;
    $contador = 1;

    do {
        echo "Tienes accceso al local privado $contador" . "<br />";
        $contador++;
    } while ($edad >= 19 && $contador <= 10);


    // BUCLE FOR
    $resultado = 0;
    for ($i = 0; $i <= 100; $i++) {
        $resultado += $i;
    };

    echo "<h1>El resultado es: " . $resultado . "</h1>"

    ?>




</body>

</html>