<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constantes</title>
</head>

<body>
    <?php

    // Constantes
    define('nombre', 'Sergio Reyes');
    define('web', 'master php');

    echo '<h1>' . nombre . '</h1>';
    echo '<h1>' . web . '</h1>';

    // Built-in constants

    echo '<h1?>' . PHP_VERSION . '</h1>';
    echo '<h1?>' . PHP_OS . '</h1>';
    echo '<h1?>' . PHP_EXTENSION_DIR . '</h1>';
    echo '<h1?>' . __DIR__ . '</h1>';

    ?>
</body>

</html>