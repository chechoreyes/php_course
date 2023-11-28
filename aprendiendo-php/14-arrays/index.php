<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>

<body>
    <?php

    $peliculas = array('Batman', 'Superman', 'The lord of the rings');
    $cantantes = ['2pac', 'Drake', 'Jennifer Lopez'];

    // Array asociativo
    $personas = array('nombre' => 'Victor', 'apellidos' => 'Robles', 'web' => 'victorrobles.es');

    echo $peliculas[0];

    // Recorrer arrays
    for ($i = 0; $i < count($peliculas); $i++) {
        echo "<li>" . $peliculas[$i] . "</li>";
    }

    foreach ($cantantes as $pelicula) {
        echo "<li>" . $pelicula . "</li>";
    }

    ?>
</body>

</html>