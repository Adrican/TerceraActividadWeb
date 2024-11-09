<?php

    define('DB_SERVER', 'db');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', 'secret');
    define('DB_NAME', 'actividad3');

    $connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($connection == false) {
    die("Error en la conexión a la base de datos: " . mysqli_connect_error());
}


?>
