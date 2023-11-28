<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables superglobales</title>
</head>

<body>

    <?php

    // Variables superglobales

    // Variable de Servidor

    echo '<h1>';
    echo $_SERVER['SERVER_ADDR'];
    echo '</h1>';

    echo '<h1>';
    echo $_SERVER['SERVER_NAME'];
    echo '</h1>';

    echo '<h1>';
    echo $_SERVER['HTTP_USER_AGENT'];
    echo '</h1>';

    echo '<h1>';
    echo $_SERVER['REMOTE_ADDR'];
    echo '</h1>';

    ?>

</body>

</html>