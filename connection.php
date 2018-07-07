<?php


$servername = "127.0.0.1";
$database = "DB_users";
$username = "root";
$password = "";

// Create connection

$enlace = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_errno() . PHP_EOL;
    exit;

    }
    // echo "Connected successfully";
    mysqli_close($enlace);


 ?>
